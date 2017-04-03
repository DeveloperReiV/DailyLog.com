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
    return date('G:i',strtotime($timestamp));
}

function showWarning($mes)
{
    echo "<div class='alert alert-danger'>$mes</div>";
    unset($_SESSION['warning']);
}

function showSuccess($mes)
{
    echo "<div class='alert alert-success'>$mes</div>";
    unset($_SESSION['success']);
}

