<?php

namespace app\core;

use app\lib\DataBase;

class Model
{
    protected static $table;
    protected        $data = [];

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
        $db->setClassName(get_called_class());

        $sql = 'SELECT * FROM ' . static::$table . ' ORDER BY id DESC';

        return $db->query($sql);
    }

    /**
     * Вернуть записи из таблицы значение колонки $column в которых равно $value
     *
     * @param $column
     * @param $value
     *
     * @return bool или object
     */
    public static function findByColumn($column, $value)
    {
        $db = new DataBase();
        $db->setClassName(get_called_class());

        $sql = 'SELECT * FROM ' . static::$table . ' WHERE ' . $column . ' = :value';
        $res = $db->query($sql, [':value' => $value]);

        if(!empty($res))
        {
            return $res;
        }

        return false;
    }
}