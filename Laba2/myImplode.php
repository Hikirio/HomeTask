<?php
/*
 * Created by PhpStorm.
 * User: Анатолий
 * Date: 06.04.2018
 * Time: 21:07
 */
function myImp($del, $arr)
{
    $res = null;//'';
    $i = 0;
    foreach ($arr as $key => $value) {
        if (isset($arr[$i + 1])) {
            $res .= $value . $del;
        } else {
            $res = $value;
        }
        $i++;
        echo $res;
    }

//    return $i;
//    $rr = myImp();
//    echo myImp([234,24234,4324,4234,345]);

}

myImp(',', [1, 3, 5, 7]);