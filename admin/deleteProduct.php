<?php

    $id = $_GET['id'];

    $dbConnection = mysqli_connect('localhost', 'root', '', 'php_crud_db') or die('Connection failed');
    $delete_qry = "UPDATE products SET valid = 0 WHERE id = $id";

    mysqli_query($dbConnection, $delete_qry) or die('Ami Parlamna');

    header('location: index.php');

