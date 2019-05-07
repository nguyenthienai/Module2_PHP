<?php

include "ComparableCircle.php";

$circleOne = new ComparableCircle('circleOne', 8);
$circleTwo = new ComparableCircle('circleTwo', 2);
$circleThree = new ComparableCircle('circleThree', 4);
$circleFour = new ComparableCircle('circleFour', 4);

$test1 = $circleOne->compareTo($circleTwo);
echo ('Comparable: <br>');
echo $test1 ."<br><br>";

$test2 = $circleTwo->compareTo($circleThree);
echo ('Comparable: <br>');
echo $test2 ."<br><br>";

$test3 = $circleThree->compareTo($circleFour);
echo ('Comparable: <br>');
echo $test3 ."<br><br>";