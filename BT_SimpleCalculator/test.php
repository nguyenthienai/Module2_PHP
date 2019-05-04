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
   include 'index.php';
    function h($value = '123'){
        echo "hello ". $value;
    }
    h('ba');
    ?>
</body>
</html>