<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Checkout</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="/style.css">
</head>

<body style="background:#266942; color:white;">

<div class="container py-5">

    <h2 class="mb-4 checkout-title">Checkout</h2>

    <div class="row g-4">

        <!-- LEFT: FORM -->
        <div class="col-lg-6">

            <div class="checkout-card">

                <h4 class="mb-3">Billing Details</h4>

                <input type="text" id="name" placeholder="Full Name" class="form-control mb-3">
                <input type="text" id="phone" placeholder="Phone Number" class="form-control mb-3">
                <textarea id="address" placeholder="Full Address" class="form-control mb-3"></textarea>

                <select class="form-control mb-3">
                    <option>Cash on Delivery</option>
                    <option>Online Payment (Coming Soon)</option>
                </select>

                <button onclick="placeOrder()" class="place-btn">
                    Place Order
                </button>

            </div>

        </div>

        <!-- RIGHT: SUMMARY -->
        <div class="col-lg-6">

            <div class="checkout-card">

                <h4 class="mb-3">Order Summary</h4>

                <div id="summary"></div>

                <hr style="border-color:#333;">

                <h3 id="total" class="total-price"></h3>

            </div>

        </div>

    </div>

</div>

<script>
let cart = JSON.parse(localStorage.getItem("cart")) || [];

let summary = document.getElementById("summary");
let total = 0;

cart.forEach(item => {

    total += item.price * item.qty;

    summary.innerHTML += `
        <div class="summary-item">
            <span>${item.name} x ${item.qty}</span>
            <span>৳${item.price * item.qty}</span>
        </div>
    `;
});

document.getElementById("total").innerText = "Total: ৳" + total;

function placeOrder(){

    let name = document.getElementById("name").value;
    let phone = document.getElementById("phone").value;
    let address = document.getElementById("address").value;

    if(!name || !phone || !address){
        alert("Please fill all fields");
        return;
    }

    alert("Order placed successfully!");

    localStorage.removeItem("cart");

    window.location.href = "index.html";
}
</script>

</body>
</html>