<?php
/**
 * Created by PhpStorm.
 * User: bogda
 * Date: 21.12.2018
 * Time: 2:13
 */

namespace application\models;

use core\ConnectDB;
use core\Db;

class Product extends \core\mvc\Model
{
    public function getAllProduct($type, $group)
    {
        $connect = ConnectDB::getInstance();

        $sql = 'SELECT *';
        $sql .= ' FROM k_product';
        $sql .= ' WHERE type = "' . $type . '" AND `group` = "' . $group . '"';
        $sql .= ' ORDER BY id DESC';
        $prdocuts = $connect->getAll($sql);
        return $prdocuts;

    }

    public function sendProduct($target_file, $name, $price, $description, $group, $type)
    {
        $connect = ConnectDB::getInstance();
        $sql = "INSERT INTO `kidestore`.`k_product` (`name`, `price`,  `description`,  `group`, `type`, `url_imae`)
        VALUES ('" . $name . "', '" . $price . "', '" . $description . "', '" . $group . "', '" . $type . "', '" . $target_file . "')";

        Db::add($sql);
        return true;
    }
}