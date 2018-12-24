<?php
/**
 * Created by PhpStorm.
 * User: bogda
 * Date: 21.12.2018
 * Time: 3:07
 */

namespace application\controllers;

use application\models\Auth;
use core\Redirect;
use core\Session;
use core\User;

class authController extends \core\mvc\Controller
{
    public function __construct($route)
    {
        parent::__construct($route);
    }

    public function index()
    {

        $this->set(compact(''));
    }

    public function login()
    {
        $login = \BRequest::getString('login');
        $password = \BRequest::getString('password');
        $model = new Auth();
        $userInfo = $model->isVaildUser($login, $password);
        if ($userInfo) {
            User::setUserInfo($userInfo);
            User::setId($userInfo['id']);
            Redirect::_('');
        } else {
            Redirect::_('auth?error');
        }

    }

    public function logout()
    {
        if (!User::authorised()) {
            Redirect::_301('/auth');
        }
        User::logout();
        Redirect::_301('/auth');

    }
}
