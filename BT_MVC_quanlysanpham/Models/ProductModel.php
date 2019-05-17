<?php
require_once ('DBconnect.php');
require_once ('Controllers/ProductController.php');

class ProductModel extends DBconnect
{
    public function getProductModel()
    {
        $conn=$this->connect();
        $sql = "SELECT * FROM sanpham";
        $data = $conn->prepare($sql);
        $data->execute();
        $data->setFetchMode(PDO::FETCH_ASSOC);
        $result = $data->fetchAll();
        return $result;
    }

    public function addProductModel($data)
    {
        $a = $data['tensp'];
        $b = $data['giasp'];
        $c = $data['mota'];
        $d = $data['nsx'];
        $conn = $this->connect();
       $sql = "INSERT INTO sanpham(tensp, giasp, mota, nsx) VALUES ('$a','$b','$c','$d')";
       $rs = $conn->prepare($sql);
        $result = $rs->execute();
        return $result;
    }

    public function deleteProductModel($id)
    {
        $conn = $this->connect();
        $sql = "DELETE FROM sanpham WHERE id = '$id'";
        $rs = $conn->prepare($sql);
        $result = $rs->execute();
        return $result;
    }

    public function editProductModel($data,$id)
    {

        $ab = $data['id'];
        $a = $data['tensp'];
        $b = $data['giasp'];
        $c = $data['mota'];
        $d = $data['nsx'];
        $conn = $this->connect();
        $sql = "UPDATE `sanpham`
                SET `id`= '$ab',`tensp`= '$a',`giasp`= '$b',`mota`= '$c',`nsx`= '$d' WHERE id = '$id' ";
        $rs = $conn->prepare($sql);
        $result = $rs->execute();
        return $result;
    }
}