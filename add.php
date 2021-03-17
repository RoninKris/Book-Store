<?php
    session_start();
    $title = $_POST['title'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $src = $_POST['src'];
    $synopsis = $_POST['synopsis'];
        array_push($_SESSION['titles'], $title);
        array_push($_SESSION['prices'], $price);
        array_push($_SESSION['quantities'], $quantity);
        array_push($_SESSION['srcs'], $src);
        echo "<script> alert(Item added to cart)</script>";
        header("Location: index.php");
?>