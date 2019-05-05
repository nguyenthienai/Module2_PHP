<?php
     function find($input, $array)
     {
         $position = null;
         for ($i = 0; $i < count($array); $i++) {
             if ($input == $array[$i]) {
                 $position = $i;
                 return $position;
             };
         };
     };
?>