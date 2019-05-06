<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Tìm giá trị nhỏ nhất của mảng</h2>
    <?php
        $array = array(1,2,3,4,5,6,0,-9,5);
        include "findMinInArray.php";
        include "printArray.php";
        echo "<br/>";
        include "printMinValueInArray.php";
    ?>
</body>
</html>