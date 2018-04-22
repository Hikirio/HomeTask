<?php
/*
 * Created by PhpStorm.
 * User: Анатолий
 * Date: 06.04.2018
 * Time: 13:03
 */
$n = ' 2 ';
function fEmpty($perem)
{
    if ($perem == '' || $perem == 0) {
        echo "Пусто";
    } else {
        echo "Есть значение";
    }
}

fEmpty($n);