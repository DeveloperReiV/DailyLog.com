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

        if(empty($_POST['search_text']))
        {

            $view->ctg = !empty($_GET['cat']) ? cleanInput($_GET['cat']) : 1;
            $view->p   = !empty($_GET['p']) ? cleanInput($_GET['p']) : 1;

            $count_note       = Notice::getCountItem('category', $view->ctg);            //общее число записей
            $view->count_page = round($count_note / Notice::$item_on_page);                  //число страниц
            $first            = $view->p * Notice::$item_on_page - Notice::$item_on_page;

            $view->notices = Notice::findByColumnOnePages('category', $view->ctg, $first);
        }
        else
        {
            $view->str_srh = cleanInput($_POST['search_text']);
            $view->notes_search = Notice::search($view->str_srh);
        }
        $view->display('notice\index.php');
    }

    public function action_delete()
    {
        $id  = cleanInput($_GET['id']);
        $cat = cleanInput($_GET['cat']);

        if($id)
        {
            Notice::delete($id);
            if($cat)
            {
                header("location: /notice?cat=$cat");
            }
            else
            {
                header("location: /notice");
            }
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
        $notice         = new Notice();
        $view           = new View();
        $view->category = getAllCategory();                         //получаем список всех категорий

        if($_POST)
        {
            if(!empty($_GET['id']))
            {
                $notice->id = cleanInput($_GET['id']);
                $st         = 'обновлена';
            }
            else
            {
                $st = 'добавлена';
            }

            if(!empty($_POST['header']) && !empty($_POST['date']) && !empty($_POST['category']))
            {
                $notice->header      = cleanInput($_POST['header']);
                $notice->description = cleanInput($_POST['description']);
                $notice->date        = cleanInput($_POST['date']) . ' ' . cleanInput($_POST['time']) . ':' . '00';
                $notice->importance  = cleanInput($_POST['importance']);
                $notice->category    = cleanInput($_POST['category']);

                if($notice->save())
                {
                    $_SESSION['success'] = "Заметка '{$notice->header}' успешно $st!!!";
                    header("location: /notice?cat=$notice->category");
                }
            }
            else
            {
                $_SESSION['warning'] = 'Поля отмеченные * заполнять обязательно!!!';
                $view->display('notice\add.php');
            }
        }

    }

    public function action_edit()
    {
        $id = cleanInput($_GET['id']);

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
            $id             = cleanInput($_GET['id']);
            $view->note     = Notice::findByColumn('id', $id)[0];
            $view->category = getAllCategory();                         //получаем список всех категорий
        }
        $view->display('notice\view.php');
    }
}