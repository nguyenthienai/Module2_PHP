<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "classicmodels";

try {
    $conn= new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//    var_dump($dbh);

    echo "Connect Success" ."<br>";
} catch (PDOException $e) {
    echo "error" .$e->getMessage();
}




