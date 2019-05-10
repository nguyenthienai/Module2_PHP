<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<?php include "StopWatch.php";
      include "InitArrayNumber.php"; ?>
<body>
    <?php
    $stopWatch = new StopWatch();
    echo ($stopWatch->get_startTime());
    $stopWatch->start();
    selectSort($arrayNumber);
    $stopWatch->stop();
    echo "<br/>Times: " . $stopWatch->getElapsedTime() . " miliseconds<br/>";
    print_r(selectSort($arrayNumber));
    ?>
</body>

</html>