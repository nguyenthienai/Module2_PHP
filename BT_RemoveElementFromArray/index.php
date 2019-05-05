<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php 
        $array = array('Ái', 'Rin', 'Hoàng', 'Bá', 'Thành');
        include "printElementInArray.php";
    ?>
    <form method="post">
        <input type="text" name="input" />
        <input type="submit" value="Remove" />
    </form>
    <?php
    include "findElementInArray.php";
    include "removeElementInArray.php";
    ?>
</body>

</html>