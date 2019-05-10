<?php

include_once ('LinkList.php');

$linkedList = new LinkList();
$linkedList->insertFirst(1);
$linkedList->insertFirst(3);
$linkedList->insertFirst(33);
$linkedList->insertLast(313);
$linkedList->insertLast(21);
$linkedList->insertFirst(1);
$linkedList->insertFirst(3);
$linkedList->insertFirst(33);
$totalNodes = $linkedList->totalNodes();
$linkData = $linkedList->readList();

echo "Sum Note = " .$totalNodes ."<BR>";
echo "LinkedList : " .implode ('-' , $linkData);