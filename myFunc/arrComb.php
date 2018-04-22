<?php
/**
 * Created by PhpStorm.
 * User: Анатолий
 * Date: 20.04.2018
 * Time: 12:21
 */

function myComb($a, $b)
{
    $key = [];
    $value = [];
    $ar = [];

    foreach ($a as $k => $v) {
        $key = $k;
    }
    foreach ($b as $ke => $va) {
        $value = $va;

    }
        var_dump($key);

}

myComb(['YA', 'NEYA'], ['ON', 'ONA']);