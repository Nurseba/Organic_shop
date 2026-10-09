<!DOCTYPE html>
<html>
<head>
<title>Cart</title>
<link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

<div class="container py-4">

<h2 style="color:#00c853;">Your Cart</h2>

<div id="cart-items"></div>

<h3 id="total" style="margin-top:20px;"></h3>

</div>

<script>
let cart = JSON.parse(localStorage.getItem("cart")) || [];

// RENDER CART
function renderCart() {

    let container = document.getElementById("cart-items");
    container.innerHTML = "";

    let total = 0;

    cart.forEach((item, index) => {

        total += item.price * item.qty;

        container.innerHTML += `
        <div style="background:#111;padding:15px;margin:10px 0;border:1px solid #333;color:white;">

            <h4>${item.name}</h4>

            <p>Price: ৳${item.price}</p>

            <div>
                <button onclick="decreaseQty(${index})">-</button>
                <span style="margin:0 10px;">${item.qty}</span>
                <button onclick="increaseQty(${index})">+</button>
            </div>

            <p>Subtotal: ৳${item.price * item.qty}</p>

            <button onclick="removeItem(${index})" style="background:red;color:white;border:none;padding:5px;">
                Remove
            </button>

        </div>
        `;
    });

    document.getElementById("total").innerText = "Total: ৳" + total;

    localStorage.setItem("cart", JSON.stringify(cart));
}

// INCREASE QTY
function increaseQty(i){
    cart[i].qty++;
    renderCart();
}

// DECREASE QTY
function decreaseQty(i){
    if(cart[i].qty > 1){
        cart[i].qty--;
    }
    renderCart();
}

// REMOVE ITEM
function removeItem(i){
    cart.splice(i,1);
    renderCart();
}

// INIT
renderCart();
</script>

</body>
</html>