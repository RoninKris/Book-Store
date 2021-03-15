<?php
    $bookname = $_POST['bookname'];
    $price = $_POST['price'];
    $booknames = array();
    $prices = array();
    array_push($booknames, $bookname);
    array_push($prices, $price);
    // for($i = 0; $i < sizeof($booknames); $i++){
    //     echo $booknames[$i] . "<br>";
    // }
    echo $booknames[0];
?>