<?php
    function findMax($arr){
        $max = $arr[0][0];
        $arrlength = count($arr);
           for ($i = 0; $i < $arrlength; $i++){
            for ($j = 0; $j < count($arr[$i]); $j++){
                if($max < $arr[$i][$j]){
                    $max = $arr[$i][$j];
                }
           }          
            }
            return $max; 
       }
?>