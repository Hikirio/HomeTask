<?php

function StrL($str)
{

    $k = 0;
    for ($i = 0; ; $i++) {
        if ($str{$i}) {
            $k++;
        } else {
            break;
        }
    }
    echo 'Длина строки: ' . $k;
}

StrL('dfsg    ');