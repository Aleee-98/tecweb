<?php
    require_once '../vendor/autoload.php';
    use myapi\Create as Create;
    

    $products = new Create("root", "Calcetines2", "marketzonefinal");

    if(isset($_POST['nombre'])) {
        $products->add($_POST);
    }

    echo $products->getData();
?>