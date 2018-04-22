<?php
/**
 * Created by PhpStorm.
 * User: Анатолий
 * Date: 20.04.2018
 * Time: 13:42
 */

function meDiff($arr, $mas)
{
    $i = 0;
    $o = 0;
    foreach ($arr as $key => $value) {
           foreach ($mas as $k => $v){
               if ($value === $v+1){
                   echo $v;
                   var_dump($o);
               }
           }//var_dump($arr[$i]);
    }

}

meDiff([1, 2, 3], [1, 2, 3, 4]);