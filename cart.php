<?php
    session_start();
    $titles = $_SESSION['titles'];
    $prices = $_SESSION['prices'];
    $quantities = $_SESSION['quantities'];
    for($i = 0; $i < sizeOf($titles); $i++){
        echo $titles[$i]."<br>";
        echo $prices[$i]."<br>";
        echo $quantities[$i]."<br>";
    }
?>