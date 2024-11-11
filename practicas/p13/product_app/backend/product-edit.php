<?php
    require_once '../vendor/autoload.php';
    use myapi\Update as Update;

    $products = new Update("root", "Calcetines2", "marketzonefinal");

    if(isset($_POST['id'])) {
        $products->edit($_POST);
    }

    echo $products->getData();
?>