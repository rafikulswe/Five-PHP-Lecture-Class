<?php

    echo 'Update page';
    $id = $_GET['id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];

    $dbConnection = mysqli_connect('localhost', 'root', '', 'php_crud_db') or die('Connection failed');
    $update_qry = "UPDATE products SET product_name='{$product_name}', product_price='{$product_price}' WHERE id = $id";

    mysqli_query($dbConnection, $update_qry) or die('Ami Parlamna');

    header('location: index.php');

