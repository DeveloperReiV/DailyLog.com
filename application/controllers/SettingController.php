<?php


namespace app\controllers;

use app\core\Controller;
use app\core\View;
use app\lib\MyFile;

class SettingController extends Controller
{
    public function action_index()
    {
        $view = new View();
        $view->images = MyFile::getAllFiles('background');
        $view->display('setting/index.php');
    }

    public function action_upload()
    {
        if($_FILES['file'])
        {
           MyFile::uploadFile($_FILES['file'],'background\\');
           header('location: \setting');
        }
    }
}