let cart = [];

function increment(inputID) {
    const inputElement = document.getElementById(inputID);
    if (inputElement) {
        inputElement.value = parseInt(inputElement.value) + 1;
    }
}

function decrement(inputID) {
    const inputElement = document.getElementById(inputID);
    if (inputElement && parseInt(inputElement.value) > 0) {
        inputElement.value = parseInt(inputElement.value) - 1;
    }
}

function addToCart(itemID, itemName, itemPrice, inputID) {
    const inputElement = document.getElementById(inputID);
    const quantity = parseInt(inputElement.value);

    if (quantity > 0) {
        const itemIndex = cart.findIndex(item => item.id === itemID);

        if (itemIndex !== -1) {
            cart[itemIndex].quantity += quantity;
        } else {
            cart.push({
                id: itemID,
                name: itemName,
                price: itemPrice,
                quantity: quantity
            });
        }

        inputElement.value = 0;
        updateCart();
    }
}

function updateCart() {
    const cartDiv = document.querySelector('#cart');
    const subtotalDiv = document.querySelector('#subtotal');
    const taxDiv = document.querySelector('#tax');
    const totalDiv = document.querySelector('#total');

    cartDiv.innerHTML = '';

    let subtotal = 0;

    for (const item of cart) {
        const itemTotal = item.price * item.quantity;
        subtotal += itemTotal;

        const cartItemDiv = document.createElement('div');
        cartItemDiv.classList.add('cart-item');
        cartItemDiv.innerHTML = `
            <div class="cart-item-details">
                <img src="images/${item.id}.jpg" class="cart-item-image" alt="${item.name}">
                <div class="cart-item-info">
                    <strong>${item.name}</strong>
                    <p>Rp ${item.price} x ${item.quantity}</p>
                    <p>Rp ${itemTotal}</p>
                </div>
            </div>
        `;

        cartDiv.appendChild(cartItemDiv);
    }

    const tax = subtotal * 0.11;
    const total = subtotal + tax;

    subtotalDiv.textContent = `Subtotal: Rp ${subtotal.toFixed(2)}`;
    taxDiv.textContent = `Tax (11%): Rp ${tax.toFixed(2)}`;
    totalDiv.textContent = `Total (incl. tax): Rp ${total.toFixed(2)}`;
}
