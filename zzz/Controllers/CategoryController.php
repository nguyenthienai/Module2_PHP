<?php
require_once ('Models/CategoryModel.php');
require_once ('Models/DBconnection.php');
require_once ('Views/CategoryView.php');
//namespace Controllers;
//
//use CategoryModel\CategoryModel;

class CategoryController
{
    public  function getCategory()
    {
        $categoryModel = new CategoryModel();
        $category = $categoryModel->getCategoryModel();

        $categoryView = new CategoryView();
        $categoryView->categoryShow($category);
    }
    public function addCategoryController()
    {
        $categoryView = new CategoryView();
        $categoryView->addCategory();
    }
}