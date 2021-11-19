<?php

$product_name = $_POST["product_name"];
$product_price = $_POST["product_price"];

$dbConnection = mysqli_connect('localhost', 'root', '', 'php_crud_db') or die('Connection Failed');
$insert_sql = "INSERT INTO products (product_name, product_price, valid) VALUES ('{$product_name}', '{$product_price}', 1)";

mysqli_query($dbConnection, $insert_sql) or die('insertion Failed');

header('location: index.php');



