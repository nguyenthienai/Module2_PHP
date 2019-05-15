<form method="post">
    Office Code: <input type="text" placeholder="office code" name="officecode"><br><br>
    City: <input type="text" placeholder="city" name="city"><br><br>
    Phone: <input type="text" placeholder="phone" name="phone"><br><br>
    Country: <input type="text" placeholder="country" name="country"><br><br>
    <input name="ok" type="submit" value="OK">
    <button><a href="index.php">Back</a> </button>
</form>

<?php
include_once "db-connect.php";

if ($_POST){
if (isset($_POST['ok'])){
try {
    $officeCode = (int)$_POST['officecode'];
    $city = $_POST['city'];
    $phone = $_POST['phone'];
    $country = $_POST['country'];
    $data = $conn->exec("INSERT INTO offices(officeCode,city,phone,country) VALUES ('$officeCode','$city','$phone','$country')");
    echo "insert ok";
    $last_id = $conn->lastInsertId();
}
catch (PDOException $e){
    echo "Error:" .$e->getMessage();
}
}
}

?>