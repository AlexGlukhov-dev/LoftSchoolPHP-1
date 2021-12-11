<?php
$bmw = [
    "model" => "X5",
    "speed" => 120,
    "doors" => 5,
    "year" => "2015",
];

$toyota = [
    "model" => "camry",
    "speed" => 150,
    "doors" => 5,
    "year" => "2012",
];

$opel = [
    "model" => "astra",
    "speed" => 140,
    "doors" => 5,
    "year" => "2011",
];

$cars = ["bmw" => $bmw, "toyota" => $toyota, "opel" => $opel];

foreach ($cars as $name => $car) {
    $i = 0;
    echo "name: " . $name;
    echo '<br>';
    foreach ($car as $param) {
        if ($i === 0) {
            echo $param . " ";
        } else {
            echo " - " . $param;
        }
        $i++;
    }
    echo '<br>';
    echo '<br>';
    unset($i);
}

