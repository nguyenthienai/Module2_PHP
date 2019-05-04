<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hien thi hinh</title>
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
        <h1>Hiển thị các loại hình</h1>
        <div>
            <form action="" method="POST">
                <label>Chọn hình: </label>
                <select name="operator">
                    <option value="cn">Chữ nhật</option>
                    <option value="tg">Tam giác</option>
                    <option value="v">Vuông</option>
                </select><br/><br/>
                <input type="submit" name="display" value="Hiển thị">
            </form>
        </div>
        <div class="result">
            <h2>Result:</h2>
            <?php
                $operator = $_POST['operator'];
                $display = $_POST['display'];

                function cn(){
                    for($i = 0; $i < 5; $i ++) {
                        echo "<br>";
                        for($j = 0; $j < 20; $j ++) {
                            echo "*";
                        }
                    }
                } 
                
                function tg(){
                    for($i = 0; $i < 10; $i ++) {
                        for($j = (10 - $i); $j < 10; $j ++) {
                            echo "*";
                        }
                        echo "<br>";
                    } 
                }

                function vuong(){
                    for($i = 0; $i < 5; $i ++) {
                        echo "<br>";
                        for($j = 0; $j < 10; $j ++) {
                            echo "*";
                        }
                    }
                } 

                if($display){
                    switch($operator){
                        case "cn":
                            cn();
                            break;
                        case "v":
                            vuong();
                            break;
                        case "tg":
                            tg();
                            break;
                    }
                }
            ?>
            
        </div>
    </div>
    
</body>
</html>