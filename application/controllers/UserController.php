<?php

namespace app\controllers;

use app\core\Controller;
use app\core\View;
use app\models\User;

class UserController extends Controller
{
    public function action_index()
    {
        $view = new View();
        $view->user = User::findAll();
        $view->display('user\index.php');
    }

    public function action_exit()
    {
        unset($_SESSION['user']);
        header('location: /');
    }
}