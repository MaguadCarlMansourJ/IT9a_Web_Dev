<?php

echo "<h2>1. Index Array</h2>";

$fruits = array("Apple", "Banana", "Orange");

echo $fruits[0] . "<br>";
echo $fruits[1] . "<br>";
echo $fruits[2] . "<br>";

echo "<h2>2. Associative Array</h2>";

$car = array(
    "brand" => "Toyota",
    "color" => "Red",
    "year" => 2023
);

echo "Brand: " . $car["brand"] . "<br>";
echo "Color: " . $car["color"] . "<br>";
echo "Year: " . $car["year"] . "<br>";

echo "<h2>3. Multidimensional Array</h2>";

$colors = array(
    array("Red", "Green", "Blue"),
    array("Yellow", "Purple", "Pink")
);

echo $colors[0][0] . "<br>";
echo $colors[0][1] . "<br>";
echo $colors[1][0] . "<br>";

?> 