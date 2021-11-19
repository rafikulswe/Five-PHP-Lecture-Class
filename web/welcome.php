<?php 
    session_start();
    if (empty($_SESSION['email'])) {
        header('Location: index.php');
        exit();
    }
    echo 'Welcome';
?>