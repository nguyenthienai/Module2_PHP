<?php  
    if ($_POST){
        if ($find){
            try {
                if(empty($string)){
                    throw new Exception("String input Not empty");
                }
                echo "String: ".$string."<br/>";
                echo "Occurrences of " .$findChar ." is " .countOccurrencesChar($string, $findChar);
            }
            catch (Exception $e){
                echo "Error:" .$e->getMessage();
            }            
        }
        }
    ?>