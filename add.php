<?php
    session_start();
    $title = $_POST['title'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $src = $_POST['src'];
    $synopsis = $_POST['synopsis'];
        array_push($_SESSION['titles'], urldecode($title));
        array_push($_SESSION['prices'], $price);
        array_push($_SESSION['quantities'], $quantity);
        array_push($_SESSION['srcs'], $src);
        echo "<script> alert(Item added to cart)</script>";
        if($_POST['action'] == 'Add to Cart')
        header("Location: index.php");
        else header("Location: cart.php");
?>