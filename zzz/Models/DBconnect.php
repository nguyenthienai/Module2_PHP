<?php
require_once ('DBconnection.php');


class DBconnect
{
    public function connect()
    {
        $connection = new DBConnection("mysql:host=127.0.0.1; dbname=quanly_thuvien", "root","");
        try {
            $conn = $connection->connect();
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $conn;
        }
        catch (PDOException $e)
        {
            echo "Error:" .$e->getMessage();
        }

    }
}