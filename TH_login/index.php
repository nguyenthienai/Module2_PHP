<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<style>
 .login {
    height:200px; width:260px;
    margin:0 auto;
    padding:10px;
    border:5px #CCC solid;
    }
 .alert {
    height:200px; width:360px;
    text-align: center;
    margin:0 auto;
    padding:10px;
   
 }
 .login input {
    padding:5px; margin:5px
    }
</style>
<body>
    <form action="" method="POST">
    <div class="login">
    <h2>Login</h2>
    <input type="text" name="username" size="30" placeholder="User name"/>
    <input type="password" name="pass" size="30" placeholder="Password">
    <input type="submit" name="submit" value="Sign in">
    </div>
    </form>
    <div class="alert">
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST"){
        $name = $_POST["username"];
        $pass = $_POST["pass"];
        if ($name === "admin" && $pass === "admin"){
            echo "<h2>Welcome <span style='color:red'>" .$name. "</span> to website</h2>";
        }else{
            echo "<h2><span style='color:red'>Login Error</span></h2>";
       }
    }
    ?>
    </div>
</body>
</html>