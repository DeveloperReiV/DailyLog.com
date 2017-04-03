<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 30.03.17
 * Time: 13:49
 */

namespace app\models;

use app\core\Model;

class Main extends Model
{
    /**
     * Выбор важных заметок на сегоднешний день из  массива $notes
     *
     * @param $notes
     *
     * @return array
     */
    public static function getNotesImportanceToday($notes)
    {
        $res = [];

        foreach($notes as $note)
        {
            if(date('d.m.Y', time()) == getDateFromTimestamp($note->date))
            {
                $res[] = $note;
            }
        }

        return $res;
    }
}