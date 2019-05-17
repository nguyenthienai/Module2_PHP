<?php
require_once ('Controllers/ProductController.php');
require_once ('Views/ProductView.php');

$product = new ProductController();
$action = $_GET['action'];
if ($action === 'add'){
    $product->addProductController();
}
if ($action === 'doAdd'){
    $product->getDataAddController();
    $product->alertResultAddView();
}
if ($action==='list'){
    $product->getProductController();
}
if ($action===NULL){
    $product->getProductController();
}
if ($action === 'delete'){
    $product->deleteProductController();
}
if ($action === 'edit'){
    $product->editProductController();
}
if ($action === 'doEdit'){
    $product->getDataEditController();
    $product->alertResultEditView();
}