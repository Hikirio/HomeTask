<?php
/*
 * Created by PhpStorm.
 * User: Анатолий
 * Date: 13.04.2018
 * Time: 19:10
 */


function mer($arr, $mas)
{

    foreach ($mas as $key => $value) {
        if (is_string($key) && $arr[$key]){//вменсто исстринг можно $key{0}
            $arr[$key] = $value;
        }else {
            if (is_string($key)) {
                $arr[] = $value;
            } else {
                $arr[] = $value;
            }
        }
    }
    var_dump($arr);
}


mer([6, 3, 3, 'test' => 5], [1, 4, 'test' => 2]);