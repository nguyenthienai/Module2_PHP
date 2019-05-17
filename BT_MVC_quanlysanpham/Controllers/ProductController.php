<?php
require_once ('Models/DBconnect.php');
require_once ('Models/ProductModel.php');
require_once ('Views/ProductView.php');

class ProductController extends Dbconnect
{
        public function getProductController()
        {
            $product = new ProductModel();
            $result = $product->getProductModel();
            $product = new ProductView();
            $product->showProductView($result);
        }

        public function addProductController()
        {
            $product = new ProductView();
            $product->addProductView();
        }

        public function getDataAddController()
        {
            $product = new ProductModel();


            $tensp = $_POST['tensp'];
            $giasp = $_POST['giasp'];
            $mota = $_POST['mota'];
            $nsx = $_POST['nsx'];

            $data = array(
                'tensp' =>$tensp,
                'giasp' =>$giasp,
                'mota' => $mota,
                'nsx' => $nsx
            );
            $status = $product->addProductModel($data);
            $product = new ProductView();
            $product->alertResultAddView($status);
        }

        public function deleteProductController()
        {
            $product = new ProductModel();
            $id = $_GET['id'];
            $status = $product->deleteProductModel($id);
            $product = new ProductView();
            $product->alertResultDeleteView($status);
        }

        public function editProductController()
        {
            $product = new ProductView();
            $product->editProductView();
//            $status = $product->editProductModel($data);
//            $product = new ProductView();
//            $product->alertResultEditView($status);
        }

    public function getDataEditController()
    {
        $product = new ProductModel();
        $id = $_POST['id'];
        $tensp = $_POST['tensp'];
        $giasp = $_POST['giasp'];
        $mota = $_POST['mota'];
        $nsx = $_POST['nsx'];

        $data = array(
            'id' => $id,
            'tensp' =>$tensp,
            'giasp' =>$giasp,
            'mota' => $mota,
            'nsx' => $nsx
        );
        $status = $product->editProductModel($data,$id);
        $product = new ProductView();
        $product->alertResultEditView($status);
    }
}