// selected_items.js

// Get the query parameter containing the selected items
const queryString = window.location.search;
const urlParams = new URLSearchParams(queryString);
const selectedItemsJson = urlParams.get('items');
const selectedItems = JSON.parse(selectedItemsJson);

// Function to calculate total price
function calculateTotalPrice() {
    let totalPrice = 0;

    // Loop through the selected items and calculate the total price
    selectedItems.forEach(item => {
        totalPrice += item.price * item.qty;
    });

    return totalPrice.toFixed(2); // Convert to fixed decimal places
}

// Function to render selected items and total price
function renderSelectedItems() {
    const selectedItemsContainer = document.getElementById('selected_items_container');
    const totalPriceContainer = document.getElementById('total_price');

    // Loop through the selected items and display them
    selectedItems.forEach(item => {
        const itemElement = document.createElement('div');
        itemElement.classList.add('selected_item');
        itemElement.innerHTML = `
            <div class="item_name">${item.name}</div>
            <div class="item_price">PHP ${item.price}</div>
            <div class="item_qty">Qty: ${item.qty}</div>
        `;
        selectedItemsContainer.appendChild(itemElement);
    });

    // Calculate total price and display it
    const totalPrice = calculateTotalPrice();
    totalPriceContainer.innerText = `Total Price: PHP ${totalPrice}`;
}

// Render selected items and total price when the page loads
window.onload = renderSelectedItems;


