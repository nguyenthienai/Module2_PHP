<?php
include "Circle.php";
include "Rectangle.php";
include "Square.php";

$circle = new Circle("Circle", 2);
$rect = new Rectangle("Rectangle",4,2);
$square = new Square("Square",2,2);

$array = array($circle, $rect, $square);

foreach ($array as $hinh){
    echo $hinh->show() ."<br>";
    echo "Area = " .$hinh->calculateArea() ."<br>";
    if ($hinh instanceof Colorable){
        echo $hinh->howToColor()."<br>";
    }

}