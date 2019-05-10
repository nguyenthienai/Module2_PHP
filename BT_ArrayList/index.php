<?php

include "MyList.php";

$listInteger = new ArrayList();
$listInteger->add(3);
$listInteger->add(2);
$listInteger->add(1);

echo "My list is: " ;
foreach ($listInteger->toArray() as $value){
    echo $value;
}
echo "<br>";
echo "get(1) = " .$listInteger->get(1) ."<br>";

echo "<br>";
echo "After sort: ";
$listInteger->sort();
foreach ($listInteger->toArray() as $value){
    echo $value;
}
