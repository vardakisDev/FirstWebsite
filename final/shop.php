<?php 

    include('inc/buy.php');
    include('inc/footer.php');
    include('config/config.php');


?>

<!-- cart -->
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
<!-- start of the modal -->
<div class="modal" id="modal">
    <div id="modal-content" class="modal-content">
        <span class="close" onclick="hideModal();">&times;</span>
        <h3>Item has been added to your cart:</h3>
        <button class="btn-modal btn-shop" onclick="hideModal();">Continue Shopping</button>
        <a href="checkout.php">
            <button class="btn-modal " id="btn-checkout" href="<?php echo ROOT_URL; ?>">Go to checkout</button>
        </a>

    </div>
</div>
<!-- end of the modal -->


<div class="products">
    <div class="overlay">
        <img class="preview" src="./img/mock1.jpg" alt="">
        <div class="product">
            <h2 class="p_name">White T-Shirt</h2>
            <h3 class="p_price">30 &euro;</h3>
            <p class="p_desc">White T shirt signed by Anna Korakaki for her golden awarded winning in the Olympics of Rio 2016.
            </p>
            <div class="options">
                <h3>size:</h3>
                <div class="select-style">
                    <select id="size" class="size">
                        <option>S</option>
                        <option>M</option>
                        <option>L</option>
                        <option>XL</option>
                    </select>
                </div>
            </div>
            <div class="options">
                <h3>quant.</h3>
                <div class="select-style">
                    <select id="quantity" class="quantity">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <button class="btn-add">Buy</button>
            </div>

        </div>
    </div>
    <div class="overlay">
        <img class="preview" src="img/mock2.jpg" alt="">
        <div class="product">
            <h2 class="p_name">Black T-shirt</h2>
            <h3 class="p_price">30 &euro; </h3>
            <p class="p_desc">Black T shirt signed by Anna Korakaki for her golden awarded winning in the Olympics of Rio 2016</p>
            <div class="options">
                <h3>size:</h3>
                <div class="select-style">
                    <select id="size" class="size">
                        <option>S</option>
                        <option>M</option>
                        <option>L</option>
                        <option>XL</option>
                    </select>
                </div>
            </div>
            <div class="options">
                <h3>quant.</h3>
                <div class="select-style">
                    <select id="quantity" class="quantity">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <button class="btn-add">Buy</button>
            </div>

        </div>
    </div>
</div>
</div>
</div>
</div>



<script type="text/javascript" src="js/shop.js">
</script>