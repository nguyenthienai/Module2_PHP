<?php
     function findMinInArray($arr){
        $min = $arr[0];
        $arrlength = count($arr);
        for ($i = 0; $i < $arrlength; $i++){
            if ($min > $arr[$i]){
                $min = $arr[$i];
            }   
        }
        return $min;
    }
?>