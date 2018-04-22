<?php
/**
 * Created by PhpStorm.
 * User: Анатолий
 * Date: 20.04.2018
 * Time: 11:45
 */

function myArrSearch($znach, $arr)
{
    foreach ($arr as $key => $value) {
        if ($znach == $value) {
            var_dump('Ключ равен: ' . $key);
        }
    }


}

myArrSearch('green', [1, 45 => 'green', 2, 3, 5, 9]);