<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Count Occurrence Of Char</title>
</head>

<body>
    <div>
        <h2>Count Occurrence Of Char</h2>
        <form method="post">
            <legend>Input data</legend>
            <label>Input String:</label>
            <input type="text" name="string"><br/><br/>
            <label>Find to char:</label>
            <input type="text" name="char"><br/><br/>
            <input type="submit" name="count" value="Find">
        </form>
        <h3>Result</h3>
        <?php 
             include "initVariable.php";
             include "countOccurrencesChar.php";
            //include "checkInputStringIsNull.php";
            include "printResult.php"; 
            
        ?>
    </div>
</body>
</html>