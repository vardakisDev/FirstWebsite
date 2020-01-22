<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Athlete of the year 2019</title>
</head>

<body>
    <header>
        <div class="logo-container">
            <h3 class="logo">Anna Korakaki</h3>

        </div>
        <nav>
            <ul class="nav-links">
                <li><a class="nav-link" href="index.php">Home</a></li>
                <!--Main page-->
                <li><a class="nav-link" href="email.php">Contact us</a></li>
                <!--Newsletter page-->
                <li><a class="nav-link" href="shop.php">Shop</a></li>
                <!--SHOP adding to cart page-->
            </ul>
        </nav>
        <div class="cart-info">
            <button class="cart-btn" onclick="showcart()"><img src="./img/cart.svg" alt="cart"></button>

        </div>
    </header>
    <!-- cart -->

    <main>
        <div id="cart" class="cart">
            <h3>Cart</h3>

            <!-- cart total -->
            <div class="cart-total">
                <h5>total</h5>
                <h5> &euro; <strong id="cart-total" class="font-weight-bold">0</strong> </h5>
            </div>
            <!-- end cart total -->
            <!-- cart buttons -->
            <div class="cart-buttons-container mt-3 d-flex justify-content-between">
                <a href="#" id="clear-cart">clear cart</a>
                <a href="checkout.php">checkout</a>
            </div>
            <!--end of  cart buttons -->
        </div>
        <!-- end of the modal -->
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



