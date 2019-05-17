<?php
require_once ('DBconnection.php');
require_once ('DBconnect.php');

//namespace CategoryModel;



class CategoryModel extends DBconnect
{

    public function getCategoryModel()
    {
        $conn = $this->connect();
        $sql = "SELECT * FROM categories";
        $data = $conn->prepare($sql);
        $data->execute();
        $data->setFetchMode(PDO::FETCH_ASSOC);
        $result = $data->fetchAll();
        return $result;
    }

    public function addCategoryModel()
    {
        echo "add model";
    }
}