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

    public function action_delete()
    {
        $id = $_GET['id'];

        if($id)
        {
            Notice::delete($id);
            header('location: /notice');
        }
    }

    public function action_add()
    {
        $view           = new View();
        $view->category = getAllCategory();                         //получаем список всех категорий
        $view->display('notice\add.php');
    }

    public function action_insert()
    {
        if($_POST)
        {
            $notice = new Notice();
            if(!empty($_POST['header']) && !empty($_POST['date']) && !empty($_POST['category']))
            {
                $notice->header      = $_POST['header'];
                $notice->description = $_POST['description'];
                $notice->date        = $_POST['date'] . ' ' . $_POST['time'] . ':' . '00';
                $notice->importance  = $_POST['importance'];
                $notice->category    = $_POST['category'];
                if($notice->save())
                {
                    $_SESSION['success'] = 'Заметка добавлена успешно!!!';
                }
            }
            else
            {
                $_SESSION['warning'] = 'Поля отмеченные * заполнять обязательно!!!';
            }

            $view = new View();
            $view->category = getAllCategory();                         //получаем список всех категорий
            $view->display('notice\add.php');
        }
    }

    public function action_edit()
    {

    }
}