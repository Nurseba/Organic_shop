// ===============================
// CART
// ===============================
let cart = JSON.parse(localStorage.getItem("cart")) || [];

// ADD TO CART
function addToCart(name, price) {

    cart = JSON.parse(localStorage.getItem("cart")) || [];

    let found = cart.find(item => item.name === name);

    if (found) {
        found.qty++;
    } else {
        cart.push({
            name: name,
            price: Number(price),
            qty: 1
        });
    }

    localStorage.setItem("cart", JSON.stringify(cart));

    updateCartCount();

    alert(name + " added to cart!");
}

// Global Function
window.addToCart = addToCart;


// UPDATE CART COUNT
function updateCartCount() {

    let cartData = JSON.parse(localStorage.getItem("cart")) || [];

    let count = 0;

    cartData.forEach(item => {
        count += item.qty;
    });

    let countEl = document.querySelector(".cart-count");

    if (countEl) {
        countEl.innerText = count;
    }
}


// ===============================
// SIGN UP MODAL
// ===============================

// Open Modal
function openModal() {

    const modal = document.getElementById("signupModal");

    if (modal) {
        modal.classList.add("active");
    } else {
        console.error("signupModal not found");
    }

}

// Global
window.openModal = openModal;


// Close Modal
function closeModal() {

    const modal = document.getElementById("signupModal");

    if (modal) {
        modal.classList.remove("active");
    }

}

window.closeModal = closeModal;


// Outside Click Close
window.addEventListener("click", function (event) {

    const modal = document.getElementById("signupModal");

    if (modal && event.target === modal) {
        closeModal();
    }

});


// PAGE LOAD

document.addEventListener("DOMContentLoaded", function () {

    updateCartCount();

});