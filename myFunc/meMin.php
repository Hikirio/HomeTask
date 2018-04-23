<?php
/**
 * Created by PhpStorm.
 * User: Анатолий
 * Date: 23.04.2018
 * Time: 15:49
 */

function myMin($arr)
{

    $min = 0;
    $max = 0;
    for ($i = 0; $i < 15; $i++) {

        if ($min > $arr[$i]) {

            $min = $arr[$i];

        } elseif ($max < $arr[$i]) {

            $max = $arr[$i];

        }
    }

    echo $min;


}

myMin([12, 7, 100, 10500]);