<?php
/**
 * Created by PhpStorm.
 * User: Анатолий
 * Date: 03.04.2018
 * Time: 20:20
 */
function metrTokilom($convert)
{
    if ($convert){
        $fin = $convert/1000;
        echo $fin;
    }else{
        echo 'Вы не ввели число';
    }

}
metrTokilom(59);