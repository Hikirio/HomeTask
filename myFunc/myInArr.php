<?php
/**
 * Created by PhpStorm.
 * User: Анатолий
 * Date: 20.04.2018
 * Time: 12:46
 */


function meInArr($val, $a)
{

    foreach ($a as $key => $value) {
        if ($value === $val ) {
            var_dump('Нашел ' . ' => ' . $value.' по ключу '.$key);
            break;
        }
    }


}

meInArr('Asus', ['Mac', 'Acer', 'Asus', 'HP']);