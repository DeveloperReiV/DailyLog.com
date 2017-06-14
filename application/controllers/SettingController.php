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
        $view->images = MyFile::getAllFiles(UPLOAD_DIR . 'background');
        $view->display('setting/index.php');
    }

    public function action_upload()
    {
        if($_FILES['fileBack'])
        {
           MyFile::uploadFile($_FILES['fileBack'],UPLOAD_DIR . 'background');
           header('location: \setting');
        }
    }

    public function action_delete()
    {
        if($_GET['n'])
        {
            $path = UPLOAD_DIR . 'background\\' . cleanInput($_GET['n']);
            if(file_exists($path))
            {
                MyFile::deleteImage($path);
            }
        }
        header('location: \setting');
    }

    public function action_setback()
    {
        if($_GET['n'])
        {
            $path = UPLOAD_DIR . 'background\\' . cleanInput($_GET['n']);
            if(file_exists($path))
            {
                setcookie('backIMG', $_GET['n'], time()+60*60*24*360, '/', 'dailylog.com');
            }
        }
        header('location: \setting');
    }

    public  function action_deleteback()
    {
        setcookie ('backIMG', null, time()-60*60*24*360, '/', 'dailylog.com');
        header('location: \setting');
    }
}