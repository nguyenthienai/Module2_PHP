<?php
    function countOccurrencesChar($str,$char){
        $strlength = strlen($str);
        $count = 0;
        for($i = 0; $i < $strlength; $i++){
            if($char === $str[$i]){
                $count += 1;
            }
        }
        return $count;
    }
?>