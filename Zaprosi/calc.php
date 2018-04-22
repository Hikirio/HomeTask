<?php
function calculator()
{
    $res = 0;
    $operand = $_POST['operand'];
    $val1 = $_POST['val1'];
    $val2 = $_POST['val2'];
    if ($operand == '+') {
        $res = $val1 + $val2;
    } elseif ($operand == '-') {
        $res = $val1 - $val2;
    } elseif ($operand == '/' && $val2 != 0) {
        $res = $val1 / $val2;
    } elseif ($operand == '*') {
        $res = $operand * $operand;
    } else {
        echo "Error";
    }
    echo $res;

}