<?php
function getTovar()
{
    $arr = [];
    for ($i = 0; $i <= 5; $i++) {
        $arr[] = [//первый доступный элемент массива
            'title' => 'my title' . $i,
            'content' => 'my content' . $i
        ];
    }
    return $arr;
}