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
    // header("Location: index.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style> 
        *{
            margin: 0; 
            padding: 0;
            font-family: Arial;
        } 
        body{
            opacity: 0;
        }
        div{
            height: 100vh; 
            width: 100vw; 
            background-image: url(images/bg.jpg); 
            background-position: fixed; 
            background-attachment: fixed; 
            background-repeat: no-repeat; 
            background-size: 100% 100%; 
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        input[type=text]{
            /* position: absolute;
            top: 50%;
            left: 35%; */
            height: auto;
            font-size: 50px;
            border: none; 
            background-color: transparent;
            border-bottom: 1px solid white; 
            color: white;
            text-align: center;
            margin: 50px 0;
        }
        input[type=text]:focus{
            outline: none;
        }
        input[type=text]::placeholder{
            opacity: .5;
        }
        h1{
            color: #ffb91d;
            font-size: 100px;
        }
        input[type=submit]{
            display: none;
            background: none;
            border: none;
            font-size: 30px;
            color: white;
            position: absolute;
            bottom: 20%;
            left: 45%;
            font-family: Lucida Calligraphy;
            transition: .5s;
        }
        input[type=submit]:hover{
            -webkit-text-stroke: 1px #ffb91d;
            cursor: pointer;
            transition: .5s;
        }
    </style>
    <title>Welcome</title>
</head>
<body>
    <div>
        <h1 class=welcome>Welcome</h1>
        <form action="addusername.php" method=post autocomplete=off>
            <input type="text" name=username placeholder="Your Name" class=username onkeyup=showAlohamora()>
            <input type="submit" value="Alohamora" class=alohamora>
        </form>
    </div>
</body>
<script>
    window.onload = function(){
        document.body.style = "opacity: 1; transition: 4s";
    }
    function showAlohamora(){
        if(document.querySelector(".username").value.length > 0) document.querySelector(".alohamora").style = "display: block";
        else document.querySelector(".alohamora").style = "display: none";
    }
</script>
</html>