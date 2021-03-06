<?php
    error_reporting(0);
    $src = $_GET['src'];
    $title = $_GET['title'];
    $price = $_GET['price'];
    $synopsis = $_GET['synopsis'];
?>
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='style.css'>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
    <title><?php echo $title ?></title>
</head>
<body>
    <div class='navbar' style='margin-bottom: 0'>
        <img src='images/logo.png' alt='' height='100%'>
        <h1> <div id='yellow'> Flourish</div> and <div id='yellow'>Blotts</div> Bookseller</h1>
            <a class='cart' href='cart.php'>
                <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'><path d='M10 19.5c0 .829-.672 1.5-1.5 1.5s-1.5-.671-1.5-1.5c0-.828.672-1.5 1.5-1.5s1.5.672 1.5 1.5zm3.5-1.5c-.828 0-1.5.671-1.5 1.5s.672 1.5 1.5 1.5 1.5-.671 1.5-1.5c0-.828-.672-1.5-1.5-1.5zm1.336-5l1.977-7h-16.813l2.938 7h11.898zm4.969-10l-3.432 12h-12.597l.839 2h13.239l3.474-12h1.929l.743-2h-4.195z'/></svg>
            </a>
    </div>
    <div class='main-container'
    style='
    background-color: white; 
    width: 100%;
    padding: 50px 0;
    padding-left: 300px;
    '>
        <?php
            echo "<div class='icon'>
            <img src='$src' alt=''>
        </div>
        <div class='product-details'>
            <h1>".urldecode($title)."</h1>
            <p>PHP $price</p>
            <hr>
            <form action='add.php' method='post' id='submitform'>
                <div class=invisible>
                <input type=text name=title value='".urldecode($title)."'>
                <input type=text name=price value=$price>
                <input type=text name=src value=$src>
                <input type=text name=synopsis value=$synopsis>
                </div>
                <div class='quantity'>
                    <p style='font-weight: 500;'>Quantity</p>
                    <input type='button' value='&minus;' onclick='minusQuantity()'><input type='text' name='quantity' value='1' class='quantityBox'><input type='button' value='+' onclick='addQuantity()'>
                </div>
                <input type=submit value='Add to Cart'  name=action class='addtocart'>
                <input type=submit value='Buy it now'  name=action class='buynow'>
                <div class='synopsis'>
                    <hr>
                    $synopsis
                    <hr>
                </div>
            </form>
        </div>";
        ?>
    </div>
    <footer>
        <div class='col one'>
            <h1>INFORMATION</h1>
            <p>Contact Us</p>
            <p>About Us</p>
        </div>
        <div class='col two'>
            <h1>FOLLOW US</h1>
            <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'><path d='M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z'/></svg>
            <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'><path d='M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z'/></svg>
            <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'><path d='M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z'/></svg>
        </div>
        <div class='col three'>
            <h1>BE IN THE KNOW</h1>
            <p>Promotions, new products and sales. </p>
            <p>Directly to your inbox.</p>
            <input type='email' placeholder='Your email'>
            <a href=''>
                <div class='submit'>
                    <svg width='24' height='24' xmlns='http://www.w3.org/2000/svg' fill-rule='evenodd' clip-rule='evenodd'><path d='M4 .755l14.374 11.245-14.374 11.219.619.781 15.381-12-15.391-12-.609.755z'/> </svg>
                 </div>
        </div></a>
    </footer>
</body>
<script src='script.js'></script>
</html>