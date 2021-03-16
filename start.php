<?php
    session_start();
    $titles = array();
    $prices = array();
    $quantities = array();
    $_SESSION['titles'] = $titles;
    $_SESSION['prices'] = $prices;
    $_SESSION['quantities'] = $quantities;
    header("Location: index.php");
?>