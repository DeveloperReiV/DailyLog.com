<?php

namespace app\controllers;

use app\core\Controller;
use app\core\View;
use app\models\Notice;

class NoticeController extends Controller
{
    public function action_index()
    {
        $view           = new View();
        $view->category = getAllCategory();
        $notices        = Notice::findAll();
        $view->notices  = Notice::sortNoticeOnCategory($notices);

        $view->display('notice\index.php');
    }
}