<?php
     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $input = $_POST['input'];
        try {
            if (find($input, $array) === null) {
                throw new Exception("Không có giá trị này trong mảng");
            };
            $index_del = find($input, $array);
            for ($i = $index_del; $i < count($array) - 1; $i++) {
                $array[$i] = $array[$i + 1];
            };
            array_pop($array);
            array_push($array,'');
            echo "Element removed at: ". $index_del."<br/>";
            foreach($array as $key){
                echo $key."<br/>";
            }
        } catch (Exception $e) {
            echo "Error: " .$e->getMessage();
        }
    }
?>