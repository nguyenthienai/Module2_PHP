<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<?php include "classRectangle.php"; ?>
<body>
   <?php
        $width = 20;
        $height = 10;
        $rectangle = new Rect($width, $height);

        echo $rectangle->width."<br/>"; // 0utput: 10
        echo $rectangle->height."<br/>"; // 0utput: 20

        $rectangle->height = 30;
        $rectangle->width = 20;

        echo $rectangle->height."<br/>"; // 0utput: 30
        echo $rectangle->width."<br/>"; // 0utput: 20
        echo "Perimeter = " .$rectangle->getPerimeter()."<br/>"; // 0utput: 100
        echo "Area = " .$rectangle->getArea()."<br/>"; // Output: 600
        echo ("Your Rectangle". $rectangle->display());
   ?>
</body>
</html>