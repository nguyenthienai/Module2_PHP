<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lớp phường trình bậc 2</title>
</head>
<?php 
    include "classQuadraticEquation.php";
    include "initVariable.php";
?>
<body>
    <h2>Giải phương trình bậc 2</h2>
    <div>
        <form method="post">
            <label>a=</label>
            <input type="text" name="a">
            <label>b=</label>
            <input type="text" name="b">
            <label>c=</label>
            <input type="text" name="c"><br/><br/>
            <input type="submit" name="giai" value="Giải">
        </form>
    </div>
    <?php
        include "QuadraticEquation.php";
    ?>
</body>
</html>