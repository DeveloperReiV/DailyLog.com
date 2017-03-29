<?php

namespace app\core;

use app\lib\DataBase;

class Model
{
    protected static $table;
    protected $data = [];

    public function __get($key)
    {
        return $this->data[$key];
    }

    public function __set($key, $value)
    {
        $this->data[$key] = $value;
    }

    public function __isset($key)
    {
        return isset($this->data[$key]);
    }

    /**
     * Вернуть все записи из таблицы
     *
     * @return object
     */
    public static function findAll()
    {
        $db = new DataBase();
        //echo get_called_class();
        $db->setClassName(get_called_class());

        $sql = 'SELECT * FROM ' . static::$table . ' ORDER BY date DESC';
        return $db->query($sql);
    }
}