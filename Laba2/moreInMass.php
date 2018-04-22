<?php
/*
 * Created by PhpStorm.
 * User: Анатолий
 * Date: 03.04.2018
 * Time: 12:50
 */

function moreInMass($arr)
{
    // $arr1 = max($arr);
    // echo max($arr);
    $min = 0;
    $max = 0;
    for ($i = 0; $i < 15; $i++) {

        if ($min > $arr[$i]) {

            $min = $arr[$i];

        } elseif ($max < $arr[$i]) {

            $max = $arr[$i];

        }
    }

    echo $max;


}

moreInMass([12, 7, 100, 10500]);