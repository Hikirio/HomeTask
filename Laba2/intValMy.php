<?php
/*
 * Created by PhpStorm.
 * User: Анатолий
 * Date: 12.04.2018
 * Time: 10:19
 */


function myVal($x)
{

    $int = (int)$x;
    if ($int) {
        var_dump($int);
    } elseif ($int == '') {
        echo 0;
    }
}


myVal(5.9);