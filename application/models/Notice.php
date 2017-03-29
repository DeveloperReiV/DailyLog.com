<?php

namespace app\models;

use app\core\Model;

class Notice extends Model
{
    protected static $table = 'notice';

    public static function sortNoticeOnCategory($notices)
    {
        $res = [];
        foreach($notices as $note)
        {
            if($note->category != null)
            {
                $arr = (array)$note->data;
                $res["{$arr['category']}"][]= $arr;
            }
        }
        return $res;
    }
}