<?php
/**
 * Created by PhpStorm.
 * User: bogda
 * Date: 21.12.2018
 * Time: 3:07
 */

namespace application\models;


use core\ConnectDB;
use core\mvc\Model;

class Auth extends Model
{
    public function isVaildUser($login, $password)
    {
        $connect = ConnectDB::getInstance();

        $sql = 'SELECT *';
        $sql .= ' FROM k_users';
        $sql .= ' WHERE login = "' . $login . '"';
        $sql .= ' AND password = "' . $password . '"';
        $user_info = $connect->getAll($sql);

        return isset($user_info[0]) && !empty($user_info[0]) ? $user_info[0] : false;
    }
}