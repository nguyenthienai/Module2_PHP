<?php
     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $input = $_POST['input'];
        try {
            if (find($input, $array) === null) {
                throw new Exception();
            };
            $index_del = find($input, $array);
            for ($i = $index_del; $i < count($array) - 1; $i++) {
                $array[$i] = $array[$i + 1];
            };
            array_pop($array);
            array_push($array,'');
            foreach($array as $key){
                echo $key."<br/>";
            }
        } catch (Exception $e) {
            echo "Không có giá trị này trong mảng";
        }
    }
?>