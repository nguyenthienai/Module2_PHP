<?php
     if($_POST){
        $a = (int)$_POST["a"];
        $b = (int)$_POST["b"];
        $c = (int)$_POST["c"];
        $result = $_POST["giai"];   
        $checkEmptyInput = empty($a) && empty($b) && empty($c);
         
        $quad = new QuadraticEquation($a, $b, $c);
        $delta = (int)$quad->getDelta();
     }
?>