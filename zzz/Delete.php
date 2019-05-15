<?php
//including the database connection file
include("db-connect.php");

   $id = $_GET["id"];
   var_dump($id);

       $sql = "DELETE FROM offices WHERE officeCode='$id'";
       $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $data = $conn->prepare($sql);
       $data->execute();

header("Location: index.php");

?>