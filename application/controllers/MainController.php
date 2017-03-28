<?php

namespace app\controllers;

use app\core\Controller;
use app\core\View;


class MainController extends Controller
{
    public function action_index()
    {
        $view = new View();
//        $view->datatime = getDataTime();
        $view->display('main\index.php');
    }

}