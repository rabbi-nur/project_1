<?php
require_once 'vendor/autoload.php';
use App\classes\Product;
use App\classes\Category;

$product  = new Product();

$category = new Category();
$categories = $category->getAllCategory();

if (isset($_GET['page']))
{
    if ($_GET['page'] == 'home')
    {
        $products = $product->getAllProduct();
        include 'pages/home.php';
    }
    elseif ($_GET['page'] == 'detail')
    {
        $productId = $_GET['id'];
        $singleProduct = $product->getAllProductById($productId);
        include 'pages/detail.php';
    }
    elseif ($_GET['page'] == 'category')
    {
        $categoryId = $_GET['id'];
        $products = $product->getCategoryProduct($categoryId);
        include 'pages/category.php';
    }
    elseif ($_GET['page'] == 'about')
    {
        include 'pages/about.php';
    }
    elseif ($_GET['page'] == 'contact')
    {
        include 'pages/contact.php';
    }
}