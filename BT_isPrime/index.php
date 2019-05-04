<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prime</title>
</head>
<body>
    <h2>Các số nguyên tố nhỏ hơn 100</h2>
    <?php
        $max = 100;
        function isPrime($n){
            if($n===1) return false;
            if($n===0) return false;
            for($i = 2; $i < $n; $i++){
                if ($n % $i === 0){
                    return false;
                }     
            }
            return true;
        }
        for ($i = 0; $i < $max; $i++){
            if (isPrime($i)){
                echo $i." ,";
            }
        }
    ?>
</body>
</html>