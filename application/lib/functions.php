<?php

function debug($data)
{
    echo '<pre>' . print_r($data, true) . '</pre>';
}

function getAllCategory()
{
    return [
        '1' => 'Работа',
        '2' => 'Домашние дела',
        '3' => 'Личное',
        '4' => 'Семья',
    ];
}

/**
 * вернуть дату в формате дд.мм.гггг из timestamp
 *
 * @param $timestamp
 *
 * @return bool|string
 */
function getDateFromTimestamp($timestamp)
{
    return date('d.m.Y',strtotime($timestamp));
}

/**
 * вернуть время в формате чч:мм из timestamp
 *
 * @param $timestamp
 *
 * @return bool|string
 */
function getTimeFromTimestamp($timestamp)
{
    if(date('G',strtotime($timestamp))<=9)
    {
        $time = '0' . date('G:i',strtotime($timestamp));
    }
    else
    {
        $time = date('G:i',strtotime($timestamp));
    }
    return $time;
}

/**
 * Вывести предупреждение
 *
 * @param $mes
 */
function showWarning($mes)
{
    echo "<div class='alert alert-danger'>$mes</div>";
    unset($_SESSION['warning']);
}

/**
 * Вывести сообщение об удаче
 *
 * @param $mes
 */
function showSuccess($mes)
{
    echo "<div class='alert alert-success'>$mes</div>";
    unset($_SESSION['success']);
}

/**
 * Сравнивает текущую дату с датой переданной в $data.
 * Если текущая дата больше, возвращает false, иначе true
 *
 * @param $date
 *
 * @return bool
 */
function comparisonDate($date)
{
    $currentDate = date('Y-m-d');
    $date        = date('Y-m-d',strtotime($date));

    if($date < $currentDate)
    {
        return false;
    }
    else
    {
        return true;
    }
}