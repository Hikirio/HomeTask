<?php
/**
 * Created by PhpStorm.
 * User: Анатолий
 * Date: 20.04.2018
 * Time: 13:39
 */
function myArrEx($val, $arr)
{

    foreach ($arr as $key => $value) {
        if ($key === $val) {
            var_dump('Масиив содержит элемент ' . ' => ' . $key );

        }
    }


}

myArrEx('HP', ['Mac' => 250, 'Acer' => 100, 'Asus' => 90, 'HP' => 50]);