<?php
/**
 * Created by PhpStorm.
 * User: bogda
 * Date: 21.12.2018
 * Time: 2:11
 */

namespace application\controllers;

use application\models\Product;
use core\Redirect;

class productController extends \core\mvc\Controller
{
    public function __construct($route)
    {
        parent::__construct($route);
    }

    public function index()
    {
        $group = \BRequest::getString('group', false);
        $type = \BRequest::getString('type', false);
        if (!$group || !$type) {
            Redirect::_('/');
        }
        $model = new Product();
        $res_prod = $model->getAllProduct($type, $group);
        $this->set(compact('res_prod'));
    }


    public function addNewProduct()
    {
        $uploads_dir = '../uploads';
        $tmp_name = $_FILES["image_url"]["tmp_name"];
        $path = basename($_FILES["image_url"]["name"]);
        move_uploaded_file($tmp_name, "$uploads_dir/$path");

        $name = \BRequest::getString('name', false);
        $price = floatval(\BRequest::getString('price', false));
        $description = \BRequest::getString('description', false);
        $group = \BRequest::getString('group');
        $type = \BRequest::getString('type');
        $model = new Product();
        $model->sendProduct($path, $name, $price, $description, $group, $type);
        Redirect::_('/product?group=' . $group . '&type=' . $type);
    }
}