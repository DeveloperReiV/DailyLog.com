<?php

namespace app\models;

use app\core\Model;

class Notice extends Model
{
    protected static $table = 'notice';

//    public $header;
//    public $description;
//    public $date;
//    public $importance;
//    public $category;

    /**
     * Формирует массив заметок разбитый по категориям.
     *
     * @param $notices - объект класса Notice
     *
     * @return array массив вида [[номер категории] => [массив заметок относящийся к этой категории]]
     */
    public static function sortNoticeOnCategory($notices)
    {
        $res = [];
        foreach($notices as $note)
        {
            if($note->category != null)
            {
                $arr                         = (array) $note->data;
                $res["{$arr['category']}"][] = $arr;
            }
        }

        return $res;
    }
}