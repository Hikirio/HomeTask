<?php
/*
 * Created by PhpStorm.
 * User: Анатолий
 * Date: 13.04.2018
 * Time: 19:39
 */


function cusUn($arr)
{

    function myArray_unique($arr)
    {
        $resultArr = [];

        foreach ($arr as $value) {
            $count = 0;
            foreach ($resultArr as $item) {
                if ($value == $item) {
                    $count++;
                }
            }
            if ($count == 0) {
                $resultArr[] = $value;
            }
        }

    }
}

cusUn([1, 1, 2, 3, 4, 4]);