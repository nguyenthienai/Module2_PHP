<!DOCTYPE html>
<html>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link type="text/css" rel="stylesheet" href="css/style.css"/>
<head>
    <title>Future Value Calculator</title>
</head>
<body>
    <?php
        $investment = $_POST['investment'];
        $rate = $_POST['rate'] / 100;
        $years = $_POST['years'];
        $futurevalue = $investment + ($investment * $rate );
        for ($i = 2; $i <= $years; $i++){
            $futurevalue += $futurevalue * $rate;
        }
    ?>
    <div id="content">
        <h1>Future Value Calculator</h1>
        
        <form method="POST">
            <div id="data">
                <label>Investment Amount:</label> <?php echo "$".$_POST["investment"] ?> <br/>

                <label>Yearly Interest Rate:</label> <?php echo $_POST["rate"]. " %" ?> <br/>

                <label>Number of Years:</label> <?php echo $_POST["years"] ?> <br/>

                <label>Future Value:</label> <?php echo "$".$futurevalue ?> 
            </div>        
        </form>
    </div>
</body>
</html>