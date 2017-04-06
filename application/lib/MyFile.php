<?php

namespace app\lib;


class MyFile
{

    public static function uploadFile($file, $filepath)
    {
        // Проверяем загружен ли файл
        if(is_uploaded_file($file["tmp_name"]))
        {
            $type     = explode('.', $file['name'])[1];
            $filename = uniqid() . '.' . $type;
            // Если файл загружен успешно, перемещаем его из временной директории в конечную
            move_uploaded_file($file["tmp_name"], UPLOAD_DIR . $filepath . $filename);

            return true;
        }
        else
        {
            return false;
        }
    }

    public static function getAllFiles($dir)
    {
        $images = scandir(UPLOAD_DIR . $dir, 1);
        unset($images[count($images)-1]);
        unset($images[count($images)-1]);
        return $images;
    }

    public static function deleteImage($path)
    {
        return unlink($path);
    }
}