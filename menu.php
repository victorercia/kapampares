<!DOCTYPE html>
<html lang="en">

<head>
<style>
    button.check-btn {
        padding: 2px 4px;
        border-radius: 30px;
        font-weight: bold;
        border: none;
        background-color: #ff4d4d; /* Red color */
        color: #fff;
        cursor: pointer;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    button.check-btn:hover {
        transform: scale(1.05);
        box-shadow: 0 0 20px rgba(255, 77, 77, 0.5); /* Adjusted shadow color */
    }

    button.check-btn:focus {
        outline: none;
    }

    @keyframes pulse {
        0% {
            transform: scale(1);
            box-shadow: 0 0 0 0 rgba(255, 77, 77, 0.7); /* Adjusted shadow color */
        }
        50% {
            transform: scale(1.03);
            box-shadow: 0 0 0 5px rgba(255, 77, 77, 0.2); /* Adjusted shadow color */
        }
        100% {
            transform: scale(1);
            box-shadow: 0 0 0 0 rgba(255, 77, 77, 0); /* Adjusted shadow color */
        }
    }

    button.check-btn:active {
        animation: pulse 0.3s;
    }
</style>




    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Kampampares | Menu</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">


    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/chatbot.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <a href="" class="navbar-brand p-0">
                        <img src="img/logo.svg" alt="Logo" style="
                        padding-left: 97px;
                        padding-top: 0px;
                    ">
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="index.php" class="nav-item nav-link">Home</a>
                        <a href="about.html" class="nav-item nav-link">About</a>
                        <a href="service.html" class="nav-item nav-link">Service</a>
                        <a href="menu.php" class="nav-item nav-link active">Menu</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="team.html" class="dropdown-item">Our Team</a>
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                <a href="admin_signup.html" class="dropdown-item">Admin</a>
                            </div>
                        </div>
                    </div>
                    <a href="order.html" class="btn btn-primary py-2 px-4">Order</a>
                </div>
            </nav>

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Food Menu</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Menu</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Menu Items Start -->
        <div class="items">
			


        </div>
        <!-- Menu Items End -->
        
        <!-- Open Btn Start -->
        <button id="open_cart_btn">
            <img src="img/carticon.jpg" alt="" style="width: 30px" />
        </button>
        <!-- Open Btn End -->

        <!-- Backdrop Start -->
		
        <div class="backdrop">

        </div>
        <!-- Backdrop End -->

        <!-- Side Cart Start -->
        <div id="sidecart" class="sidecart">
            <div class="cart_content">
                <!-- Cart Header -->
                <div class="cart_header">
                    <img src="img/carticon.jpg" alt="" style="width: 30px" />
                    <div class="header_title">
                        <h3>Your Cart</h3>
                        <span id="items_num">0</span>
                    </div>
                    <span id="close_btn" class="close_btn">&times;</span>
                </div>

                <!-- Cart Items -->
                <div class="cart_items">
                

                </div>
                <!-- Cart Actions -->
                <div class="cart_actions">
                    <div class="subtotal">
                        <p>SUBTOTAL:</p>
                        <p>PHP <span id="subtotal_price">3896</span></p>
                    </div>
                    <button id="checkout_btn">Checkout</button>


                </div>
            </div>
        </div>
        <!-- Side Cart End -->
        

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Company</h4>
                        <a class="btn btn-link" href="">About Us</a>
                        <a class="btn btn-link" href="">Contact Us</a>
                        <a class="btn btn-link" href="">Reservation</a>
                        <a class="btn btn-link" href="">Privacy Policy</a>
                        <a class="btn btn-link" href="">Terms & Condition</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Contact</h4>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Mc. Arthur Highway, Dela Paz Sur, City of San Fernando Pampanga</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+639175952003</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>kapampares@gmail.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Opening</h4>
                        <h5 class="text-light fw-normal">Monday - Saturday</h5>
                        <p>09AM - 09PM</p>
                        <h5 class="text-light fw-normal">Sunday</h5>
                        <p>10AM - 08PM</p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Newsletter</h4>
                        <p>Signup For Newsletter</p>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                            <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Kapampares</a>, All Rights Reserved. 
							
							<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
							Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a><br><br>
                            Distributed By <a class="border-bottom" href="https://themewagon.com" target="_blank">ThemeWagon</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!--CHATBOT-->
    <div class="chat-bubble">
        <div class="chat-toggle">
            <i class="fas fa-comments"></i>
        </div>
        
        <div class="chat-container">
            <div class="chat-header">
                <h3><i class="fas fa-robot"></i>Kapampares AI Assistant</h3>
                <i class="fas fa-times chat-close"></i>
            </div>
            
            <div class="input-group">
                <input type="text" id="text" placeholder="Ask me anything about Kapmpares...">
                <button onclick="generateResponse();"><i class="fas fa-paper-plane"></i></button>
            </div>

            <div class="typing">AI is thinking...</div>
            <div id="response">Hello! I'm the Kapampares AI Assistant. I can help you with information about our food and beverage services. How may I assist you today?</div>
        </div>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>


    <script>
        //AI CHATBOT SCRIPT
        document.addEventListener('DOMContentLoaded', () => {
            const chatToggle = document.querySelector('.chat-toggle');
            const chatContainer = document.querySelector('.chat-container');
            const chatClose = document.querySelector('.chat-close');

            chatToggle.addEventListener('click', () => {
                chatContainer.style.display = 'block';
                chatToggle.style.display = 'none';
                document.getElementById('text').focus();
            });

            chatClose.addEventListener('click', () => {
                chatContainer.style.display = 'none';
                chatToggle.style.display = 'flex';
            });
        });
    </script>
    <script src="script.js"></script>


</body>

</html>