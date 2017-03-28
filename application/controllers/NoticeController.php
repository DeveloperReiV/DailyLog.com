<?php

namespace app\controllers;

use app\core\Controller;
use app\core\View;

class NoticeController
{
    public function action_index()
    {
        $view = new View();
        $view->display('notice\index.php');
    }
}