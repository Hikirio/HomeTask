<?php
/*
 * Created by PhpStorm.
 * User: Анатолий
 * Date: 06.04.2018
 * Time: 11:44
 */

function Fib($n)
{
    echo  0;
    $f1 = 0;
    $f2 = 1;
    for ($i = 0; $i != $n; $i++) {
        $f1 += $f2;
        $f2 = $f1 - $f2;
        echo $f1 . "<br>";
    }

}

$n = 10;
Fib($n); // 1,1,2,3 - получается 3
