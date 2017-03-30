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
        $view->category = getAllCategory();                         //получаем список всех категорий
        $notices        = Notice::findAll();                        //получаем все заметки из базы данных
        $view->notices  = Notice::sortNoticeOnCategory($notices);   //сортируем заметки по категориям

        $view->display('notice\index.php');
    }
}