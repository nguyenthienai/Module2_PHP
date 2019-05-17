<?php
require ('DBconnection.php');


class DBconnect
{
    public function connect()
    {
        $connection = new DBConnection("mysql:host=127.0.0.1; dbname=sanpham", "root","");
        try {
            $conn = $connection->connect();
            $conn->query("SET NAMES utf8");
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $conn;
        }
        catch (PDOException $e)
        {
            echo "Error:" .$e->getMessage();
        }

    }
}