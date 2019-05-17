<?php


class CategoryView
{
    public function categoryShow($category)
    {
        require_once ('Templates/Categories.php');
    }
    public function addCategory()
    {
        require_once ('Templates/addCategoryForm.php');
    }
}