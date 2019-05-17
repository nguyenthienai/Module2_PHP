<?php
require_once ('Controllers/CategoryController.php');
require_once ('Models/CategoryModel.php');

    $category = new CategoryController();


    $id = $_GET['id'];
    if ($id === 'add'){
        $category->addCategoryController();
    }
    if ($id === 'get'){
        $category->getCategory();
    }
    if ($id === 'doAdd'){
        $category->doAdd();
    }


