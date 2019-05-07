<?php
include "Circle.php";
include "Rectangle.php";
include "Square.php";

$circle = new Circle("Circle", 2);
$rect = new Rectangle("Rectangle", 4, 2);
$square = new Square("Square", 2, 2);

$array = array(
    array("name" => $circle->name, "radius" => $circle->radius),
    array("name" => $rect->name, "width" => $rect->width, "height" => $rect->height),
    array("name" => $square->name, "width" => $square->width)
);

echo "......__Circle__......" . "<br>";
echo $circle->show() . "<br>";
echo "Radius = " . $circle->radius . "<br>";
echo "Area = " . $circle->calculateArea() . "<br>";
echo "Perimeter = " . $circle->calculatePerimeter() . "<br><br>";

echo "After resize: " . "<br>";
$circle->resize(0.5);
echo "Radius = " . $circle->radius . "<br>";
echo "Area = " . $circle->calculateArea() . "<br>";
echo "Perimeter = " . $circle->calculatePerimeter() . "<br><br><br>";


foreach ($array as $hinh) {
    echo "<br>";
    foreach ($hinh as $key => $value) {
        echo $key . "=>" . $value . "<br>";
    }
}
