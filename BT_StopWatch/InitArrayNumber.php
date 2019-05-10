<?php
$arrayNumber = array();
for ($index = 0; $index < 100; $index++) {
    array_push($arrayNumber, mt_rand(0, 100));
};
function selectSort($array)
{
    for ($i = 0; $i < count($array) - 1; $i++) {
        $indexMin = $i;
        for ($index = $i + 1; $index < count($array); $index++) {
            if ($array[$indexMin] > $array[$index]) {
                $indexMin = $index;
            };
        }
        //swap
        $temp = $array[$i];
        $array[$i] = $array[$indexMin];
        $array[$indexMin] = $temp;
    }
    return $array;
}