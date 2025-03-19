(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();
    
    
    // Initiate the wowjs
    new WOW().init();


    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 45) {
            $('.navbar').addClass('sticky-top shadow-sm');
        } else {
            $('.navbar').removeClass('sticky-top shadow-sm');
        }
    });
    
    
    // Dropdown on mouse hover
    const $dropdown = $(".dropdown");
    const $dropdownToggle = $(".dropdown-toggle");
    const $dropdownMenu = $(".dropdown-menu");
    const showClass = "show";
    
    $(window).on("load resize", function() {
        if (this.matchMedia("(min-width: 992px)").matches) {
            $dropdown.hover(
            function() {
                const $this = $(this);
                $this.addClass(showClass);
                $this.find($dropdownToggle).attr("aria-expanded", "true");
                $this.find($dropdownMenu).addClass(showClass);
            },
            function() {
                const $this = $(this);
                $this.removeClass(showClass);
                $this.find($dropdownToggle).attr("aria-expanded", "false");
                $this.find($dropdownMenu).removeClass(showClass);
            }
            );
        } else {
            $dropdown.off("mouseenter mouseleave");
        }
    });
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Facts counter
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 2000
    });


    // Modal Video
    $(document).ready(function () {
        var $videoSrc;
        $('.btn-play').click(function () {
            $videoSrc = $(this).data("src");
        });
        console.log($videoSrc);

        $('#videoModal').on('shown.bs.modal', function (e) {
            $("#video").attr('src', $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0");
        })

        $('#videoModal').on('hide.bs.modal', function (e) {
            $("#video").attr('src', $videoSrc);
        })
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        margin: 24,
        dots: true,
        loop: true,
        center: true,
        responsive: {
            0:{
                items:1
            },
            576:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:3
            }
        }
    });
    
})(jQuery);

const ITEMS = [
    {
      id: 1,
      name: 'Pares',
      price: 85.00,
      image: 'img/menu-1.png',
      qty: 1,
    },
    {
      id: 2,
      name: 'Sisig',
      price: 85.00,
      image: 'img/menu-2.png',
      qty: 1,
    },
    {
      id: 3,
      name: 'Dinakdakan',
      price: 85.00,
      image: 'img/menu-3.png',
      qty: 1,
    },
    {
      id: 4,
      name: 'Kare-Kare',
      price: 85.00,
      image: 'img/menu-4.png',
      qty: 1,
    },
    {
      id: 5,
      name: 'Pinakbet',
      price: 85.00,
      image: 'img/menu-5.png',
      qty: 1,
    },
    {
      id: 6,
      name: 'Lechon Paksiw',
      price: 85.00,
      image: 'img/menu-6.png',
      qty: 1,
    },
    {
      id: 7,
      name: 'Sinigang',
      price: 85.00,
      image: 'img/menu-7.png',
      qty: 1,
    },
    {
      id: 8,
      name: 'Tinola',
      price: 85.00,
      image: 'img/menu-8.png',
      qty: 1,
    }
    
  ]; 


const openBtn = document.getElementById('open_cart_btn');
const cart = document.getElementById('sidecart');
const closeBtn = document.getElementById('close_btn');
const backdrop = document.querySelector('.backdrop');
const itemsEl = document.querySelector('.items')
const cartItems = document.querySelector('.cart_items')
const itemsNum = document.getElementById('items_num')
const subtotalPrice = document.getElementById('subtotal_price')
const checkoutBtn = document.getElementById('checkout_btn');

let cart_data = []

openBtn.addEventListener('click', openCart);
closeBtn.addEventListener('click', closeCart);
backdrop.addEventListener('click', closeCart);
checkoutBtn.addEventListener('click', checkout);

renderItems()
renderCartItems()

// Open Cart
function openCart() {
    cart.classList.add('open');
    backdrop.style.display = 'block';
    setTimeout(() => {
      backdrop.classList.add('show');
    }, 0);
  }
  
  // Close Cart
  function closeCart() {
    cart.classList.remove('open');
    backdrop.classList.remove('show');

    setTimeout(() => {
        backdrop.style.display = 'none';
      }, 500);
  }
  
// Add Items to Cart
function addItem(idx, itemId){
    // find same items
    const foundedItem = cart_data.find(
        item => item.id.toString() === itemId.toString()
        )

    if(foundedItem){
        // increase item qty
        increaseQty(itemId)
    }else{
        cart_data.push(ITEMS[idx])
    }
    updateCart()
    openCart()
}

// Remove Cart Items
function removeCartItem(itemId){
    cart_data = cart_data.filter((item) => item.id != itemId)

    updateCart();
}

// Increase Qty
function increaseQty(itemId){
    cart_data = cart_data.map((item) => item.id.toString() === itemId.toString() ? {...item, qty: item.qty + 1} : item)

    updateCart()
}

// Decrease Qty
function decreaseQty(itemId){
    cart_data = cart_data.map((item) => item.id.toString() === itemId.toString()
     ? {...item, qty: item.qty > 1 ? item.qty -1 : item.qty} : item)

    updateCart()
}

// Calculate Items Number
function calcItemsNum(){
    let itemsCount = 0

    cart_data.forEach((item) => (itemsCount += item.qty))

    itemsNum.innerText = itemsCount
}

// Calculate Subtotal Price
function calcSubtotalPrice(){
    let subtotal = 0

    cart_data.forEach(item => (subtotal += item.price * item.qty))

    subtotalPrice.innerText = subtotal
}

// Render Items
function renderItems() {
    ITEMS.forEach((item, idx) => {
        const itemEl = document.createElement('div');
        itemEl.classList.add('item');
        itemEl.onclick = () => addItem(idx, item.id)
        itemEl.innerHTML = `
            <img src="${item.image}" alt="">
            <button>Add to Cart</button>
        `;

        itemsEl.appendChild(itemEl);
    });
}

// Display / Render Cart Items
function renderCartItems(){
    // remove everything from cart
    cartItems.innerHTML = ''
    // add new data
    cart_data.forEach(item => {
        const cartItem = document.createElement('div');
        cartItem.classList.add('cart_item');
        cartItem.innerHTML = `
            <div class="remove_item" onclick="removeCartItem(${item.id})">
                <span>&times;</span>
            </div>
            <div class="item_img">
                <img src="${item.image}" alt="" />
            </div>
            <div class="item_details">
                <p>${item.name}</p>
                <strong>PHP ${item.price}</strong>
                <div class="qty">
                    <span onclick="decreaseQty(${item.id})">-</span>
                    <strong>${item.qty}</strong>
                    <span onclick="increaseQty(${item.id})">+</span>
                </div>
            </div>
        `;

        cartItems.appendChild(cartItem)
    });
}

function updateCart(){
    //re render cart items with updated data
    renderCartItems()
    // Update Items Number in Cart
    calcItemsNum()
    // Update subtotal price
    calcSubtotalPrice()
}

function checkout() {
    // Gather the selected items
    const selectedItems = JSON.stringify(cart_data);
    
    // Redirect to the selected items page with the selected items as query parameters
    window.location.href = `order.html?items=${selectedItems}`;
}
// PAMPASTORE NG DATA SA CART
window.addEventListener('DOMContentLoaded', () => {
    const storedCart = localStorage.getItem('cart_data');
    if (storedCart) {
        cart_data = JSON.parse(storedCart);
        updateCart();
    }
});

//UPDATE SA CART
function updateCart() {
    renderCartItems();
    calcItemsNum();
    calcSubtotalPrice();
    localStorage.setItem('cart_data', JSON.stringify(cart_data));
}