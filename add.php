<?php
    session_start();
    $title = $_POST['title'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $src = $_POST['src'];
    $synopsis = $_POST['synopsis'];
    if($_POST['addtocart']){
        array_push($_SESSION['titles'], $title);
        array_push($_SESSION['prices'], $price);
        array_push($_SESSION['quantities'], $quantity);
        header("Location: index.php");
    }
    else if($_POST['buyitnow']){
        header('Location: cart.php');
    }
?>