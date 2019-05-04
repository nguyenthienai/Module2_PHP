<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Read Number to Word</title>
</head>
<style> 
        input[type=text] {
            width: 300px;
            font-size: 16px;
            border: 2px solid #ccc; 
            border-radius: 4px;
            padding: 12px 10px 12px 10px;
        }
        #submit {
            border-radius: 2px;
            padding: 10px 32px;
            font-size: 16px;
        }
        </style>
<body>
<h2>Input number:</h2>
       <form method="POST">
          <input type="text" name="number" placeholder="Input number"/>
          <input type = "submit" id = "submit" value = "Read"/>
       </form>
       <?php
       if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $number = (int)($_POST["number"]);
            $checkEmptyInput = empty($_POST["number"]);
            $hundreds = $number / 100; 
            $dozens = ($number % 100) / 10;
            $units = $number % 10;

            if (!$checkEmptyInput){
                if ($number >= 0 && $number <= 12){
                    switch ($number){
                        case 0:
                            echo "zero";
                            break;
                        case 1:
                            echo "one";
                            break;
                        case 2:
                            echo "two";
                            break;
                        case 3:
                            echo "three";
                            break;
                        case 4:
                            echo "four";
                            break;
                        case 5:
                            echo "five";
                            break;
                        case 6:
                            echo "six";
                            break;
                        case 7:
                            echo "seven";
                            break;
                        case 8:
                            echo "eight";
                            break;
                        case 9:
                            echo "nine";
                            break;
                        case 10:
                            echo "ten";
                            break;
                        case 11:
                            echo "elevent";
                            break;
                        case 12:
                            echo "twelve";
                            break;                        
                    }
                }else{
                    echo "Out of ability";
                }
            } else {
                echo "Please input a number";
            }
      }
       ?>
</body>
</html>