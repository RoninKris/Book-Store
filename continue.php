<?php
    error_reporting(0);
    session_start();
    $titles = array();
    $prices = array();
    $quantities = array();
    $srcs = array();
    $_SESSION['titles'] = $titles;
    $_SESSION['prices'] = $prices;
    $_SESSION['quantities'] = $quantities;
    $_SESSION['srcs'] = $srcs;
    header("Location: index.php");
?>