<?php

namespace app\controllers;

use app\core\Controller;
use app\core\View;
use app\lib\DataBase;
use app\models\Notice;
use app\models\Main;


class MainController extends Controller
{
    public function action_index()
    {
        $view = new View();
        $view->notes = Notice::findByColumn('importance', 1);
        $view->imp_notes = Main::getNotesImportanceToday($view->notes);
        $view->display('main\index.php');
    }

}