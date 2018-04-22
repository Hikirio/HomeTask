<?php
/*
 * Created by PhpStorm.
 * User: Анатолий
 * Date: 12.04.2018
 * Time: 20:40
 */


function mrg($arr)
{


    for ($i = 0; $i <= count($arr); $i++) {

        var_dump($arr[$i + 1]);

    }

    echo "<>";
    foreach ($arr as $key => $value) {
        var_dump($arr[$key] . $value);
    }

}

mrg([1, 2, 3, 4]);