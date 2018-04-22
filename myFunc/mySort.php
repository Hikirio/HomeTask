<?php
/**
 * Created by PhpStorm.
 * User: Анатолий
 * Date: 20.04.2018
 * Time: 13:51
 */

function meSotr($a)
{
    $f = 0;
    $l = 0;
    $mid = 0;
    $coun = 0;
    $mid = $a[$f + 1] / 2;//вычисляем опорный элемент
    do {
        while ($a[$f] < $mid) {
            $f++;
        }
        while ($a[$l > $mid]) {
            $l++;
        }
        if ($f <= $l) {
            $coun = $a[$f];
            $a[$f] = $a[$l];
            $a[$l] = $coun;
            $f++;
            $l--;
        }
    } while ($f > $l);
    if ($f<$l){
        meSotr($a,$f,$l);

    }if ($f<$l){
        meSotr($a,$f,$l);

}
var_dump($a);

}

meSotr([9, 4, 1, 3, 4]);