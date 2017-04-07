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
    return date('d.m.Y', strtotime($timestamp));
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
    return date('G', strtotime($timestamp)) <= 9 ? '0' . date('G:i', strtotime($timestamp)) : date('G:i', strtotime($timestamp));
}

/**
 * Вывести предупреждение
 *
 * @param $mes
 */
function showWarning($mes)
{   echo "<div class='row'>";
    echo "<div class='col-sm-4'>";
    echo "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>$mes</div>";
    echo "</div>";
    echo "</div>";
    unset($_SESSION['warning']);
}

/**
 * Вывести сообщение об удаче
 *
 * @param $mes
 */
function showSuccess($mes)
{
    echo "<div class='row'>";
    echo "<div class='col-sm-4'>";
    echo "<div class='alert alert-success alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>$mes</div>";
    echo "</div>";
    echo "</div>";
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
    $date        = date('Y-m-d', strtotime($date));

    return $date < $currentDate ? false : true;
}

function cleanInput($val)
{
    $val = trim($val);
    $val = stripcslashes($val);
    $val = strip_tags($val);
    $val = htmlspecialchars($val);

    return $val;
}