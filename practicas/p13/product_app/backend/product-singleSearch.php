require_once '../vendor/autoload.php';
    use myapi\Read as Read;

    $products = new Read("root", "Calcetines2", "marketzonefinal");

    if(isset($_POST['id'])) {
        $products->single($_POST['id']);
    }

    echo $products->getData();
?>