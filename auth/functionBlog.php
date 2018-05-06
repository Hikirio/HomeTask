<?php
/**
 * Created by PhpStorm.
 * User: Анатолий
 * Date: 23.04.2018
 * Time: 21:40
 */


function getArticles()
{
    $arr = [];
    for ($i = 0; $i <= 5; $i++) {
        $arr[] = [//первый доступный элемент массива
            'title' => 'my title' . $i,
            'content' => 'my content' . $i
        ];
    }
    return $arr;
}






