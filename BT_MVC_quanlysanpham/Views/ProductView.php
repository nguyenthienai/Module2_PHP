<?php
require_once ('Models/DBconnect.php');
require_once ('MOdels/ProductModel.php');
require_once ('Controllers/ProductController.php');

class ProductView
{
    public function showProductView($result)
    {
        require_once ('Templates/ShowProducts.php');
    }

    public function addProductView()
    {
        require_once ('Templates/AddProducts.php');
    }

    public function alertResultAddView($status)
    {
        header("location: ?action=add");
    }

    public function alertResultDeleteView($status)
    {
        header("location: ?action=list");
    }

    public function editProductView()
    {
        require_once ('Templates/EditProducts.php');
    }

    public function alertResultEditView($status)
    {
        header("location: ?action=list");
    }
}