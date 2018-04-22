<?php


$int = 5;
$float = 5.5;
$str = 'str';
$bool = false;
$nul = null;

echo "$int" . ' , ' . "$str" . ' ' . "$float";
echo "<br>";
var_dump($bool, $nul);

$arr = [
    "Анатолий" => "Матвменков",
    "Город" => "Харьков",
    "Универ" => "Каразина"
];

$arr1 = [1, 2, 3, 4, 5];
print_r($arr1);
echo "<br>";
$arr2 = ["a",
    "b",
    10 => "oplia",
    "d"
];
print_r($arr2);

//Задание второе и 3-е, 4-е

$name = 'Анатолий';
$age = '20';
echo "Меня зовут :" . ' ' . $name . "<br>" . 'Мой возраст: ' . /*$age.*/
    "<br>";

////Задание 5-ть

define("City", "Харьков");
echo City . "<br>";


//Задание 6-ть

$age = 17;

if ($age >= 18 && $age <= 59) {
    echo("Вам еще работать и работать");
} elseif ($age <= 18) {
    echo("Вам еще рано работать");
} else {
    echo("Пора на пенсию");
}


//Задание 7-мь


$day = 152;
switch ($day) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo "Это очень плохой день, потому что он рабочий:D";
        break;
    case 6:
    case 7:
        echo "Хороших выходных)";
        break;
    default:
        echo "Поверь мне, такого дня нет)";

}


//Задание 8-мь


$bmw = ["model" => "x5",
    "speed" => 120,
    "doors" => 5,
    "year" => 2006,
];
$toyota = ["model" => "Carina",
    "speed" => 130,
    "doors" => 4,
    "year" => 2007,
];
$opel = ["model" => "Corsa",
    "speed" => 140,
    "doors" => 5,
    "year" => 2007,
];

foreach ($bmw as $key => $value) {

    echo $key . ' : ' . $value . ' ';
}

echo "<br>";

foreach ($toyota as $key => $value) {

    echo $key . ' : ' . $value . ' ';
}

echo "<br>";

foreach ($opel as $key => $value) {

    echo $key . ' : ' . $value . ' ';
}

//Задание 9

for ($i = 1; $i < 50; $i++) {
    if ($i % 2 != 1) {
        $i++;
    }
    echo $i . "<br>";
}


//Задание 10

$arr = array();
for ($mas = 0; $mas <= 100; $mas++) {
    $arr[] = $mas;

}

print_r($arr);
