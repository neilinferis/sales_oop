<?php
    include "../classes/Product.php";

    $product = new Product;

    $product->deleteProduct($_GET['product_id']);

    // this is a comment to test git
