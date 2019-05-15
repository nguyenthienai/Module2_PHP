<?php
include_once "db-connect.php";

$id = $_GET['id'];
$sql = "SELECT * FROM offices WHERE officeCode = '$id'";
$data = $conn->prepare($sql);
$data->execute();
$obj = $data->fetch(PDO::FETCH_OBJ);
?>

<form method="post">
    Office Code: <input type="text" value="<?php echo $obj->officeCode;?>" name="officecode"><br><br>
City: <input type="text" value="<?php echo $obj->city;?>" name="city"><br><br>
Phone: <input type="text" value="<?php echo $obj->phone;?>" name="phone"><br><br>
Country: <input type="text" value="<?php echo $obj->country;?>" name="country"><br><br>
    <input name="ok" type="submit" value="OK">
    <button><a href="index.php">Back</a> </button>


<?php

if ($_POST['ok']){
    $officecode = $_POST['officecode'];
    $city = $_POST['city'];
    $phone = $_POST['phone'];
    $country = $_POST['country'];

    $sql = "UPDATE offices SET officeCode = '$officecode', city = '$city', phone = '$phone', country = '$country'
        WHERE officeCode = '$id'";
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->exec($sql);
    header("location: index.php");
}

