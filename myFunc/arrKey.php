<?php
/**
 * Created by PhpStorm.
 * User: Анатолий
 * Date: 20.04.2018
 * Time: 11:52
 */

function myArrSearch($arr1, $arr2)
{
    echo "Первый массив - ключи = ";
    foreach ($arr1 as $key1 => $value1) {
        print_r($key1.' ');
    }
    echo "<br>";
    echo "Второй массив - ключи = ";
    foreach ($arr2 as $key2 => $value2) {
        print_r($key2.' ');
    }
    echo "<br>";


//    var_dump('Ключи первого массива = '.$key1);//,'Ключи 2-го массива'.$key1,'Ключи 3-го массива'.$key2);

}

myArrSearch([1, 'tr' => 'red', 2, 3], [7, 'jk' => 'green', 5, 3]);