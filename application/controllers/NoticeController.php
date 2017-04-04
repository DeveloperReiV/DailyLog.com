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
        $notice = new Notice();
        $view   = new View();

        if($_POST)
        {
            if(!empty($_GET['id']))
            {
                $notice->id = $_GET['id'];
                $st = 'обновлена';
            }
            else
            {
                $st = 'добавлена';
            }

            if(!empty($_POST['header']) && !empty($_POST['date']) && !empty($_POST['category']))
            {
                $notice->header      = $_POST['header'];
                $notice->description = $_POST['description'];
                $notice->date        = $_POST['date'] . ' ' . $_POST['time'] . ':' . '00';
                $notice->importance  = $_POST['importance'];
                $notice->category    = $_POST['category'];

                if($notice->save())
                {
                    $_SESSION['success'] = "Заметка '{$notice->header}' успешно $st!!!";
                    $view->form = true;
                }
            }
            else
            {
                $_SESSION['warning'] = 'Поля отмеченные * заполнять обязательно!!!';
            }
        }

        $view->category = getAllCategory();                         //получаем список всех категорий
        $view->display('notice\add.php');
    }

    public function action_edit()
    {
        $id = $_GET['id'];

        if($id)
        {
            $view           = new View();
            $view->category = getAllCategory();                         //получаем список всех категорий
            $view->note     = Notice::findByColumn('id', $id)[0];
            $view->display('notice\add.php');
        }
    }

    public function action_view()
    {
        $view = new View();
        if($_GET['id'])
        {
            $id         = $_GET['id'];
            $view->note = Notice::findByColumn('id', $id)[0];
            $view->category = getAllCategory();                         //получаем список всех категорий
        }
        $view->display('notice\view.php');
    }
}