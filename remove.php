<?php
    session_start();
    $src = $_GET['src'];
    $srcs = $_SESSION['srcs'];
    $arrayIndex = array_search($src, $srcs);
    unset($srcs[$arrayIndex]);
    header('Location: cart.php');
    for($i = 0; $i < sizeOf($srcs); $i++){
        echo $srcs[$i];
    }

?>