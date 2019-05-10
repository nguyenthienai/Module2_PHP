<?php

include_once ('LinkList.php');

$linkedList = new LinkList();
$linkedList->insertFirst(33);
$linkedList->insertFirst(33);
$linkedList->insertFirst(33);
$linkedList->insertLast(33);
$linkedList->insertLast(44);
$totalNodes = $linkedList->totalNodes();
$linkData = $linkedList->readList();

echo $totalNodes ."<BR>";
echo implode ('-' , $linkData);