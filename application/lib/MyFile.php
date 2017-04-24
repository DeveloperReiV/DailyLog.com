<?php

namespace app\lib;


class MyFile
{

    /**
     * Загрузить файл $file в папку $filepath
     *
     * @param $file
     * @param $filepath
     *
     * @return bool
     */
    public static function uploadFile($file, $filepath)
    {
        if(!file_exists($filepath))
        {
            mkdir($filepath);
        }

        // Проверяем загружен ли файл
        if(is_uploaded_file($file["tmp_name"]))
        {
            $type     = explode('.', $file['name'])[1];
            $filename = uniqid() . '.' . $type;
            // Если файл загружен успешно, перемещаем его из временной директории в конечную
            move_uploaded_file($file["tmp_name"], $filepath . '\\' . $filename);

            return true;
        }
        else
        {
            return false;
        }
    }

    /**
     * Загрузить файлы $masfiles в папку $path
     *
     * @param $masfiles
     * @param $path
     */
    public static function uploadFiles($masfiles, $path)
    {
        if(!file_exists($path))
        {
            mkdir($path);
        }
        $file_count = count($masfiles['name']);

        for($i = 0; $i < $file_count; $i++)
        {
            // Проверяем загружен ли файл
            if(is_uploaded_file($masfiles["tmp_name"][$i]))
            {
                $type     = explode('.', $masfiles['name'][$i])[1];
                $filename = uniqid() . '.' . $type;
                // Если файл загружен успешно, перемещаем его из временной директории в конечную
                move_uploaded_file($masfiles["tmp_name"][$i], $path . '\\' . $filename);
            }
        }
    }

    /**
     * Получить список всех фалов в дирректории $dir
     *
     * @param $dir
     *
     * @return array
     */
    public static function getAllFiles($dir)
    {
        $images = scandir($dir, 1);
        unset($images[count($images)-1]);
        unset($images[count($images)-1]);
        return $images;
    }

    /**
     * Удалить файл
     *
     * @param $path
     *
     * @return bool
     */
    public static function deleteImage($path)
    {
        return unlink($path);
    }
}