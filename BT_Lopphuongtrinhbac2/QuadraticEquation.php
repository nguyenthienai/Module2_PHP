<?php
    if($_POST){
     if($result){
        if(!$checkEmptyInput){
            echo "delta = " .$delta ."<br/>";
            if($delta === 0){
                echo "Phuong trinh co nghiem kep x1 = x2 = " .$quad->getRoot1();
            }
            if($delta > 0){
                echo "Phuong trinh co 2 nghiem: x1 = " .$quad->getRoot1() ." , x2 = " .$quad->getRoot2();
            }
            if ($delta < 0){
                echo "Phuong trinh vo nghiem.";
            }
        }
    }
    }
?>