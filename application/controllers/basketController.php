<?php
/**
 * Created by PhpStorm.
 * User: bogda
 * Date: 21.12.2018
 * Time: 4:57
 */

namespace application\controllers;

use application\models\Basket;

class basketController extends \core\mvc\Controller
{
    public function __construct($route)
    {
        parent::__construct($route);
    }

    public function index()
    {

        $this->set(compact(''));
    }


}