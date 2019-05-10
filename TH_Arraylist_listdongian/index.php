<?php

include "ArrayList.php";

$listInteger = new ArrayList();
$listInteger->add(3);
$listInteger->add(2);
$listInteger->add(1);

echo $listInteger->get(1) ."<br>";

foreach ($listInteger->toArray() as $value){
    echo $value;
}
echo "<br>";

$listInteger->sort();
foreach ($listInteger->toArray() as $value){
    echo $value;
}
