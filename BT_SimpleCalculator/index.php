<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simple Calculator</title>
    <style>
    .div {
        width: 400px;
        margin:0 auto;
        padding:10px;
        border:5px #CCC solid;
    }
    form {
        margin:5px;
        padding: 10px;
        border:1px #CCC solid;
    }
    </style>
</head>
<body>
    <div class="div">
        <h1>Simple Calculator</h1>
        <div>
            <form action="" method="POST">
                <label>First Operand: </label>
                <input type="text" name="firstnum"><br/>
                <label>Operator: </label>
                <select name="operator">
                    <option>+</option>
                    <option>-</option>
                    <option>x</option>
                    <option>/</option>
                </select><br/>
                <label>Second Operand: </label>
                <input type="text" name="secondnum"><br/>
                <input type="submit" name="calculator" value="Calculator">

            </form>
        </div>
        <div class="result">
            <h2>Result:</h2>
            <?php
            $num1 = (int)$_POST['firstnum'];
            $num2 = (int)$_POST['secondnum'];
            $operator = $_POST['operator'];

            function divition($num1, $num2){
                if (!$num2){
                    throw new Exception("Please no divition with zero!");
                }
                return $num1 / $num2;
            }
            if ($_POST["calculator"]){
               
                    switch ($operator){
                        case "+":
                            echo $num1."+".$num2." = ".($num1 + $num2);
                            break;
                        case "-":
                            echo $num1."-".$num2." = ".($num1 - $num2);
                            break;
                        case "x":
                            echo $num1."x".$num2." = ".($num1 * $num2);
                            break;
                        case "/":
                            try {
                                echo $num1.":".$num2." = ".divition($num1, $num2);
                            }
                            catch (Exception $e){
                                echo "Error:" .$e->getMessage();
                            }
                            break;
                    }
            }
            ?>
        
        </div>
    </div>
    
</body>
</html>