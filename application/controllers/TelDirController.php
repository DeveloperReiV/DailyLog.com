<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 04.04.17
 * Time: 12:26
 */

namespace app\controllers;

use app\core\Controller;
use app\core\View;
use app\models\TelDir;

class TelDirController extends Controller
{
    public function action_index()
    {
        $view         = new View();
        $view->teldir = TelDir::findAll();
        $view->display('teldir\index.php');
    }

    public function action_delete()
    {
        $id = cleanInput($_GET['id']);

        if($id)
        {
            TelDir::delete($id);
            header('location: /teldir');
        }
    }

    public function action_add()
    {
        $view = new View();
        $view->display('teldir\add.php');
    }

    public function action_insert()
    {
        $teldir = new TelDir();
        $view   = new View();

        if($_POST)
        {
            if(!empty($_GET['id']))
            {
                $teldir->id = cleanInput($_GET['id']);
                $st = 'обновлен';
            }
            else
            {
                $st = 'сохранен';
            }

            if(!empty($_POST['owner']) && !empty($_POST['phone']))
            {
                $teldir->owner = cleanInput($_POST['owner']);
                $teldir->phone = cleanInput($_POST['phone']);

                if($teldir->save())
                {
                    $_SESSION['success'] = "Телефон успешно $st!!!";
                    header('location: /teldir');
                }
            }
            else
            {
                $_SESSION['warning'] = 'Поля отмеченные * заполнять обязательно!!!';
                $view->category = getAllCategory();                         //получаем список всех категорий
                $view->display('teldir\add.php');
            }
        }
    }

    public function action_edit()
    {
        $id = cleanInput($_GET['id']);

        if($id)
        {
            $view         = new View();
            $view->teldir = TelDir::findByColumn('id', $id)[0];
            $view->display('teldir\add.php');
        }
    }
}