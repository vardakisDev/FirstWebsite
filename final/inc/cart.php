<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/shop.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Athlete of the year 2019</title>
</head>

<body>
    <header>
        <div class="logo-container">
            <img src="img/logo.svg" alt="logo">
            <h4 class="logo">Athlete PHP</h4>

        </div>
        <nav>
            <ul class="nav-links">
                <li><a class="nav-link" href="index.php">Home</a></li>
                <!--Main page-->
                <li><a class="nav-link" href="#">ICONS</a></li>
                <!--4 ICONS  page-->
                <li><a class="nav-link" href="email.php">Contact us</a></li>
                <!--Newsletter page-->
                <li><a class="nav-link" href="shop.php"  >Shop</a></li>
                <!--SHOP adding to cart page-->
            </ul>
        </nav>
        <div class="cart-info">
            <button class="cart-btn" onclick="showcart()"><img src="./img/cart.svg" alt="cart"></button>

        </div>
    </header>
    <!-- cart -->
    <div id="cart" class="cart">
        <h3>Cart</h3>
        <!-- cart item 1 -->
        <div class="cart-item">
            <img class="cart-img" src="./img/mock1.jpg" alt="">
            <div class="item-text">
                <p id="cart-title-item">Mock1</p>
                <span>&euro;</span>
                <span id="cart-item-price" class="cart-item-price" class="mb-0">10.99</span>
                <span id='cart-item-size' class="cart-item-size">M</span>
                <span id='cart-item-quantity' class="cart-item-quantity">1</span>
            </div>
            <a href="#" id='cart-item-remove' class="cart-item-remove">
                <i class="fa fa-trash" aria-hidden="true"></i>
            </a>
        </div>
        <!-- cart 1 end -->
        <!-- cart item2 -->
        <div class="cart-item">
            <img class="cart-img" src="./img/mock2.jpg" alt="">
            <div class="item-text">
                <p id="cart-title-item">Mock2</p>
                <span>&euro;</span>
                <span id="cart-item-price" class="cart-item-price" class="mb-0">10.99</span>
                <span id='cart-item-size' class="cart-item-size">M</span>
                <span id='cart-item-quantity' class="cart-item-quantity">1</span>
            </div>
            <a href="#" id='cart-item-remove' class="cart-item-remove">
                <i class="fa fa-trash" aria-hidden="true"></i>
            </a>
        </div>
        <div class="cart-bottom">
            <!-- cart 2 end -->
            <!-- cart total -->
            <div class="cart-total">
                <h5>total</h5>
                <h5> &euro; <strong id="cart-total" class="font-weight-bold">10.00</strong> </h5>
            </div>
            <!-- end cart total -->
            <!-- cart buttons -->
            <div class="cart-buttons-container mt-3 d-flex justify-content-between">
                <a href="#" id="clear-cart">clear cart</a>
                <a href="#">checkout</a>
            </div>
            <!--end of  cart buttons -->
        </div>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript">
        // fuction to toggle the cart
        function showcart() {
            var cart = document.getElementById("cart");
            cart.classList.toggle("cart-show");
        }
        //end of  function
        //
        //
    </script>