<?php


namespace app\models;

use app\core\Model;

class TelDir extends Model
{
    protected static $table = 'teldir';

    public static $item_on_page = 10;        //колличество записей на странице
}