<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{url('')}}/public/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('')}}/public/assets/css/all.min.css">
    <link rel="stylesheet" href="{{url('')}}/public/assets/css/animate.css">
    <link rel="stylesheet" href="{{url('')}}/public/assets/css/flaticon.css">
    <link rel="stylesheet" href="{{url('')}}/public/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="{{url('')}}/public/assets/css/odometer.css">
    <link rel="stylesheet" href="{{url('')}}/public/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{url('')}}/public/assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{url('')}}/public/assets/css/nice-select.css">
    <link rel="stylesheet" href="{{url('')}}/public/assets/css/jquery.animatedheadline.css">
    <link rel="stylesheet" href="{{url('')}}/public/assets/css/main.css">

    <link rel="shortcut icon" href="{{url('')}}/public/assets/images/favicon.png" type="image/x-icon">

    <title>Boleto  - Online Ticket Booking Website HTML Template</title>


</head>

<body>
    <!-- ==========Preloader========== -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ==========Preloader========== -->
    <!-- ==========Overlay========== -->
    <div class="overlay"></div>
    <a href="index-2.html#0" class="scrollToTop">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- ==========Overlay========== -->

    <!-- ==========Header-Section========== -->
    <header class="header-section">
        <div class="container">
            <div class="header-wrapper">
                <div class="logo">
                    <a href="index.html">
                        <img src="{{url('')}}/public/assets/images/logo/logo.png" alt="logo">
                    </a>
                </div>
                <ul class="menu">
                    <li>
                        <a href="index-2.html#0" class="active">Home</a>
                        <ul class="submenu">
                            <li>
                                <a href="index.html">Home One</a>
                            </li>
                            <li>
                                <a href="index-2.html#0" class="active">Home Two</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="index-2.html#0">movies</a>
                        <ul class="submenu">
                            <li>
                                <a href="movie-grid.html">Movie Grid</a>
                            </li>
                            <li>
                                <a href="movie-list.html">Movie List</a>
                            </li>
                            <li>
                                <a href="movie-details.html">Movie Details</a>
                            </li>
                            <li>
                                <a href="movie-details-2.html">Movie Details 2</a>
                            </li>
                            <li>
                                <a href="movie-ticket-plan.html">Movie Ticket Plan</a>
                            </li>
                            <li>
                                <a href="movie-seat-plan.html">Movie Seat Plan</a>
                            </li>
                            <li>
                                <a href="movie-checkout.html">Movie Checkout</a>
                            </li>
                            <li>
                                <a href="popcorn.html">Movie Food</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="index-2.html#0">events</a>
                        <ul class="submenu">
                            <li>
                                <a href="events.html">Events</a>
                            </li>
                            <li>
                                <a href="event-details.html">Event Details</a>
                            </li>
                            <li>
                                <a href="event-speaker.html">Event Speaker</a>
                            </li>
                            <li>
                                <a href="event-ticket.html">Event Ticket</a>
                            </li>
                            <li>
                                <a href="event-checkout.html">Event Checkout</a>
                            </li>
                        </ul>
                    </li>
                
                   
                    @if(Auth::check())

                    @if(Auth::user()->role == 2)
                    <li>
                        <a href="agent-dashboard">My Dashboard</a>
                    </li>
                    @elseif(Auth::user()->role == 3)
                    <li>
                        <a href="admin">Admin Dashboard</a>
                    </li>
                    @else

                    @endif
                    
                    @endif


                    <li>
                        <a href="contact.html">contact</a>
                    </li>
                    @if(Auth::check())

                    <li class="header-button pr-0">
                        <a href="profile">Hi, {{ Auth::user()->first_name }}</a>
                    </li>

                    <li class="header-button pr-0">
                        <a href="log-out">Log Out</a>
                    </li>

                    @else
                    <li class="header-button pr-0">
                        <a href="register">join us</a>
                    </li>
                    <li class="header-button pr-0">
                        <a href="login">Login</a>
                    </li>
                    @endif
                </ul>
                <div class="header-bar d-lg-none">
					<span></span>
					<span></span>
					<span></span>
				</div>
            </div>
        </div>
    </header>
    <!-- ==========Header-Section========== -->


    @yield('content')

    


    <!-- ==========Newslater-Section========== -->
    <footer class="footer-section">
        <div class="newslater-section padding-bottom">
            <div class="container">
                <div class="newslater-container bg_img" data-background="./{{url('')}}/public/assets/images/newslater/newslater-bg01.jpg">
                    <div class="newslater-wrapper">
                        <h5 class="cate">subscribe to Boleto </h5>
                        <h3 class="title">to get exclusive benifits</h3>
                        <form class="newslater-form">
                            <input type="text" placeholder="Your Email Address">
                            <button type="submit">subscribe</button>
                        </form>
                        <p>We respect your privacy, so we never share your info</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="footer-top">
                <div class="logo">
                    <a href="https://pixner.net/boleto/demo/index-1.html">
                        <img src="{{url('')}}/public/assets/images/footer/footer-logo.png" alt="footer">
                    </a>
                </div>
                <ul class="social-icons">
                    <li>
                        <a href="index-2.html#0">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="index-2.html#0" class="active">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="index-2.html#0">
                            <i class="fab fa-pinterest-p"></i>
                        </a>
                    </li>
                    <li>
                        <a href="index-2.html#0">
                            <i class="fab fa-google"></i>
                        </a>
                    </li>
                    <li>
                        <a href="index-2.html#0">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="footer-bottom">
                <div class="footer-bottom-area">
                    <div class="left">
                        <p>Copyright © 2020.All Rights Reserved By <a href="index-2.html#0">Boleto </a></p>
                    </div>
                    <ul class="links">
                        <li>
                            <a href="index-2.html#0">About</a>
                        </li>
                        <li>
                            <a href="index-2.html#0">Terms Of </a>
                        </li>
                        <li>
                            <a href="index-2.html#0">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="index-2.html#0">FAQ</a>
                        </li>
                        <li>
                            <a href="index-2.html#0">Feedback</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{url('')}}/public/assets/js/jquery-3.3.1.min.js"></script>
    <script src="{{url('')}}/public/assets/js/modernizr-3.6.0.min.js"></script>
    <script src="{{url('')}}/public/assets/js/plugins.js"></script>
    <script src="{{url('')}}/public/assets/js/bootstrap.min.js"></script>
    <script src="{{url('')}}/public/assets/js/heandline.js"></script>
    <script src="{{url('')}}/public/assets/js/isotope.pkgd.min.js"></script>
    <script src="{{url('')}}/public/assets/js/magnific-popup.min.js"></script>
    <script src="{{url('')}}/public/assets/js/owl.carousel.min.js"></script>
    <script src="{{url('')}}/public/assets/js/wow.min.js"></script>
    <script src="{{url('')}}/public/assets/js/countdown.min.js"></script>
    <script src="{{url('')}}/public/assets/js/odometer.min.js"></script>
    <script src="{{url('')}}/public/assets/js/viewport.jquery.js"></script>
    <script src="{{url('')}}/public/assets/js/nice-select.js"></script>
    <script src="{{url('')}}/public/assets/js/main.js"></script>
</body>



</html>
