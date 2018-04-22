<?php
/*
 * Created by PhpStorm.
 * User: Анатолий
 * Date: 06.04.2018
 * Time: 13:12
 */

function myTrim($string)
{
    $i = 0;
    $arr = [];
    while (isset($string{$i})) {
        $arr[] = $string{$i};
        $i++;
    }

    foreach ($arr as $key => $value) {
        if ($value == ' ') {
            unset($arr[$key]);
        } else {
            break;
        }
    }

    for ($q = count($arr); $q > 0; $q--) {
        if ($arr[$q] == ' ') {
            unset($arr[$q]);
        } else {
            break;
        }
    }

    $res = null;
    foreach ($arr as $v) {
        $res .= $v;
    }

    var_dump($res);
}

myTrim(' Hello      World! ');