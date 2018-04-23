<?php
/**
 * Created by PhpStorm.
 * User: Анатолий
 * Date: 23.04.2018
 * Time: 16:13
 */
function quickSort($array)
{
    if (!$length = count($array)) {
        return $array;
    }

    $k = $array[0];
    $x = $y = array();

    for ($i=1;$i<$length;$i++) {
        if ($array[$i] <= $k) {
            $x[] = $array[$i];
        } else {
            $y[] = $array[$i];
        }
    }
    print_r(array_merge(quickSort($x),array($k),quickSort($y)));
}
quickSort([1,8,3,5,11,0,7]);