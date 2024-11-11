<?php
    require_once '../vendor/autoload.php';
    use myapi\Read as Read;

    $products = new Read("root", "Calcetines2", "marketzonefinal");

    if(isset($_GET['search'])) {
        $products->search($_GET['search']);
    }

    echo $products->getData();
?>