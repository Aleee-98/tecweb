<?php
    
    require_once '../vendor/autoload.php';
    use myapi\Delete as Delete;

    $products = new Delete("root", "Calcetines2", "marketzonefinal");

    if(isset($_POST['id'])) {
        $products->delete($_POST['id']);
    }

    echo $products->getData();
?>