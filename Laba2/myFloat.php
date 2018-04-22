<?php

function myFl($x)
{
    $i = 0;
    $str = null;
    $str .= $x;

    while (isset($str{$i})) {
        $i++;
        if ($str{$i} > '.') {
            if ($str{$i} >= 5) {
                return (int)$str + 1;
            }
            return (int)$str;
        }
    }
    return $x;
}

var_dump(myFl(555999999999999952.88888));