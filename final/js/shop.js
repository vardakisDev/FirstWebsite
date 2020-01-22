// fuction to toggle the cart
function showcart() {
    var cart = document.getElementById("cart");
    cart.classList.toggle("cart-show");
}
//end of  function
//
//
var cartItems = []; // we will store the objects here so later we can access them
var count = 0;
var tempItem; //this is a pointer
//cart item class 

//add an item to the cart
(function () {
    const cartBtn = document.querySelectorAll('.btn-add');

    cartBtn.forEach(function (btn) {
        btn.addEventListener('click', function (event) {
            // console.log(event.target);
            //we target the product 
            var item = {}
            let path = event.target.parentElement.parentElement.previousElementSibling.src;
            let pos = path.indexOf("img");
            let partpath = path.slice(pos);


            // we create the object item



            item.img = `${partpath}`;

            let product = event.target.parentElement.parentElement.children;
            item.name = product[0].innerHTML;
            // console.log(name);
            item.price = product[1].innerHTML.slice(0, 2);
            // console.log(price);
            let option = product[3].lastElementChild.firstElementChild;
            let quantity = product[4].querySelector('.quantity');

            // get the drop down selected index of the size and quantity
            item.size = getIndex(option, 'size');
            item.quant = getIndex(quantity, 'quantity');
            //store the items to local storage so we can acess them in the  ckeckout page 
            //maybe later i will refine the whole code since i dont use the object somewhere
            //we will  use an array to store the objects and then push them to the storage by using JSON
            //we add an event listner for the ckeckout button and then we will parse it !!!

            cartItems.push(item);
            localStorage.setItem('items', JSON.stringify(cartItems));

            //add to the cart
            const cart = document.getElementById('cart');
            const total = document.querySelector('.cart-total');
            const lol = document.createElement('div');
            lol.innerHTML = `
                    <div class="cart-item">
                        <img class="cart-img" src="${item.img}" alt="">
                        <div class="item-text">
                            <p id="cart-title-item">${item.name}</p>
                            <span>&euro;</span>
                            <span id="cart-item-price" class="cart-item-price" class="mb-0">${item.price}</span>
                            <span id='cart-item-size' class="cart-item-size">${item.size}</span>
                            <span id='cart-item-quantity' class="cart-item-quantity">${item.quant}</span>
                        </div>
                        <a href="#" id='cart-item-remove' class="cart-item-remove">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                        </a>
                    </div>
                    <hr>`;

            cart.insertBefore(lol, total);
            showTotal(item.quant);
            Quantity()
            showModal();
            document.getElementById('btn-checkout').addEventListener('click', function () {
                localStorage.setItem('items', JSON.stringify(cartItems));
            })

        })

    })

})();

//show total fuction
function showTotal(quantity) {
    const total = [];
    const items = document.querySelectorAll('.cart-item-price');
    items.forEach(function (item) {
        total.push(parseFloat(item.textContent));

    });

    // console.log(total);

    const euro = total.reduce(function (total, item) {
        total += item * quantity;
        return total;

    }, 0);
    localStorage.setItem('total', euro);
    document.cookie = 'total=' + euro;
    // console.log(euro);
    document.getElementById('cart-total').textContent = euro;

}

function Quantity() {
    const total = [];
    const items = document.querySelectorAll('.cart-item-quantity');

    items.forEach(function (item) {
        total.push(parseFloat(item.textContent));
    });

    // console.log(total);

    const quant = total.reduce(function (total, item) {
        total += item;
        return total;

    }, 0);

    document.cookie = 'quant=' + quant;
    // console.log(quant);
}


//modal pop up 
function showModal() {
    var modal = document.getElementById("modal");
    var shopping = document.getElementsByClassName("btn-shop")[0];
    modal.style.display = "block"
}

function hideModal() {
    modal.style.display = "none";
}

function getIndex(option, str) {
    let options = option.options;
    let x = option.selectedIndex;
    return size = options[x].textContent;
}