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

