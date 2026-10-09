let cart = JSON.parse(localStorage.getItem("cart")) || [];

// ADD TO CART (GLOBAL FUNCTION)
window.addToCart = function(name, price) {

    cart = JSON.parse(localStorage.getItem("cart")) || [];

    let found = cart.find(item => item.name === name);

    if (found) {
        found.qty += 1;
    } else {
        cart.push({
            name: name,
            price: Number(price),
            qty: 1
        });
    }

    localStorage.setItem("cart", JSON.stringify(cart));

    updateCartCount();

    alert(name + " added to cart");
};

// UPDATE CART COUNT
function updateCartCount() {
    let cartData = JSON.parse(localStorage.getItem("cart")) || [];

    let countEl = document.querySelector(".cart-count");

    if (countEl) {
        countEl.innerText = cartData.length;
    }
}

// RUN ON PAGE LOAD
document.addEventListener("DOMContentLoaded", updateCartCount);