<?php
    require_once '../vendor/autoload.php';
    use myapi\Read as Read;
    
    $products = new Read("root", "Calcetines2", "marketzonefinal");

    $products->list();

    echo $products->getData();
?>