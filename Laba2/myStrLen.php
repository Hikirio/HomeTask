<?php
/*
Работа со строками
 */
function strLenMy($str)
{
    $i = 0;
    while ($str{$i}) {
        $i++;
    }
    echo 'Длина строки: ' . $i;
}

strLenMy('dfhd');