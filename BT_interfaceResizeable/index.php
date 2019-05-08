<?php
include "Circle.php";
include "Rectangle.php";
include "Square.php";

$circle = new Circle("Circle", 2);
$rect = new Rectangle("Rectangle", 4, 2);
$square = new Square("Square", 2, 2);

$array = array($circle, $rect, $square);

$percent = mt_rand(1,100);

echo "<b>...Before resize...</b>" ."<br>";
foreach ($array as $hinh) {
    echo $hinh->show() . "<br>";
    foreach ($hinh as $key=>$value){
        echo $key ."=>" .$value ."<br>";
    }
    echo "Area = " .$hinh->calculateArea() ."<br><br>";
}

echo "<hr/>";

echo "<b>...After resize " .$percent ."%" ."...</b>" ."<br>";
foreach ($array as $hinh) {
    $hinh->resize($percent/100);
    echo $hinh->show() . "<br>";
    foreach ($hinh as $key=>$value){
        echo $key ."=>" .$value ."<br>";
    }
    echo "Perimeter = " . $hinh->calculatePerimeter() ."<br>";
    echo "Area = " .$hinh->calculateArea() ."<br><br>";
}