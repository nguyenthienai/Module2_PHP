<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Doi tien te</title>
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
        <h1>Chuyển đổi tiền tệ</h1>
        <div>
            <form action="" method="POST">
                <label>Số tiền muốn đổi: </label>
                <input type="text" name="money" placeholder="USD or VND"><br/><br/>
                <label>Bạn muốn đổi sang: </label>
                <select name="operator">
                    <option value="u">chọn</option>
                    <option value="usd">USD</option>
                    <option value="vnd">VND</option>
                </select><br/><br/>
                <input type="submit" name="doi" value="Đổi">
            </form>
        </div>
        <div class="result">
            <h2>Result:</h2>
            
            <?php
                $tigia = 23000;
                $money = $_POST['money'];
                $operator = $_POST['operator'];
                $change = $_POST['doi'];

                if ($change){
                    switch($operator){
                        case "usd";
                            echo ($money / $tigia) . " USD";
                            break;
                        case "vnd":
                            echo ($money * $tigia) . " VND";
                            break;
                    }
                }
            ?>
        </div>
    </div>
    
</body>
</html>