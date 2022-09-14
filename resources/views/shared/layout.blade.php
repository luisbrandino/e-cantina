<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Food order wizard with online payment">
    <meta name="author" content="UWS">
    <title>E-Cantina</title>
    <!-- Favicon -->
    <link href="{{ asset('img/favicon.png') }}" rel="shortcut icon">

    <!-- Google Fonts - Jost -->
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link href="{{ asset('vendor/font-awesome/css/font-awesome.min.css')}} " rel="stylesheet">

    <!-- Custom Font Icons -->
    <link href="{{ asset('vendor/icomoon/css/iconfont.min.css') }}" rel="stylesheet">

    <!-- Vendor CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/dmenu/css/menu.css') }}" rel="stylesheet">
    <link href="{{ asset('css/hamburgers.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mmenu.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('css/float-labels.min.css') }}" rel="stylesheet">

    <!-- Main CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    @yield('head')
</head>

<body>
        <!-- Preloader -->
        <div id="preloader">
            <div data-loader="circle-side"></div>
        </div>
        <!-- Preloader End -->
    
        <!-- Page -->
        <div id="page">

        <!-- Header -->
        <header class="main-header sticky">
            <a href="#menu" class="btn-mobile">
                <div class="hamburger hamburger--spin" id="hamburger">
                    <div class="hamburger-box">
                        <div class="hamburger-inner"></div>
                    </div>
                </div>
            </a>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <div id="logo">
                            <h1><a href="#" title="FoodBoard">E-Cantina</a></h1>
                        </div>
                    </div>
                    <div class="col-lg-9 col-6">
                        <ul id="menuIcons">
                            @guest
                                @foreach (Config::get('providers') as $provider) 
                                    @if ($provider['enabled'])
                                        <li><a href="{{ $provider['auth_uri'] }}/authorize?client_id={{ $provider['client_id'] }}&redirect_uri={{ $provider['redirect_uri'] }}&scope={{ $provider['scope'] }}&response_mode=form_post&response_type=token" class="btn btn-purple"><i class="fab fa-{{ strtolower($provider['name']) }}"></i> Entrar com {{ $provider['name'] }} </a></li>
                                    @endif
                                
                                @endforeach
                            @endguest

                            @auth
                                Bem-vindo(a), {{ Auth::user()->name }}
                                <li><a href="/auth/logout"><i class="icon icon-logout">Logout</i></a></li>
                            @endauth
                            <li><a href="#"><i class="icon icon-shopping-cart2"></i></a></li>
                        </ul>
                        <!-- Menu -->
                        <nav id="menu" class="main-menu">
                            <ul>
                                <li><span><a href="#">Home</a></span></li>
                                <li>
                                    <span><a href="#">Order <i class="fa fa-chevron-down"></i></a></span>
                                    <ul>
                                        <li>
                                            <span><a href="#">Pay online</a></span>
                                            <ul>
                                                <li><a href="../pay-with-card-online/">Demo 1 - Filtering</a></li>
                                                <li><a href="../pay-with-card-online/order-2.php">Demo 2 - Sticky navigation</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <span><a href="#">Pay with cash</a></span>
                                            <ul>
                                                <li><a href="../pay-with-cash-on-delivery/">Demo 1 - Filtering</a></li>
                                                <li><a href="../pay-with-cash-on-delivery/order-2.php">Demo 2 - Sticky navigation</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><span><a href="../faq.html">Faq</a></span></li>
                                <li><span><a href="../contacts.html">Contacts</a></span></li>
                            </ul>
                        </nav>
                        <!-- Menu End -->
                    </div>
                </div>
            </div>
        </header>
        <!-- Header End -->

        <!-- Sub Header -->
        <div class="sub-header">
            <div class="container">
                <h1>
                    @yield('sub-header')
                </h1>
            </div>
        </div>

        <!-- Main -->
        <main>
            @yield('content')
        </main>

        <!-- Footer -->
        <footer class="main-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h5 class="footer-heading">Menu Links</h5>
                        <ul class="list-unstyled nav-links">
                            <li><i class="fa fa-angle-right"></i> <a href="https://ultimatewebsolutions.net/foodboard/" class="footer-link">Home</a></li>
                            <li><i class="fa fa-angle-right"></i> <a href="../faq.html" class="footer-link">FAQ</a></li>
                            <li><i class="fa fa-angle-right"></i> <a href="../contacts.html" class="footer-link">Contacts</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h5 class="footer-heading">Order Wizard</h5>
                        <ul class="list-unstyled nav-links">
                            <li><i class="fa fa-angle-right"></i> <a href="../pay-with-card-online/" class="footer-link">Pay online</a></li>
                            <li><i class="fa fa-angle-right"></i> <a href="../pay-with-cash-on-delivery/" class="footer-link">Pay with cash on delivery</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h5 class="footer-heading">Contacts</h5>
                        <ul class="list-unstyled contact-links">
                            <li><i class="icon icon-map-marker"></i><a href="https://goo.gl/maps/vKgGyZe2JSRLDnYH6" class="footer-link" target="_blank">Address: 1234 Street Name, City Name, USA</a>
                            </li>
                            <li><i class="icon icon-envelope3"></i><a href="mailto:info@yourdomain.com" class="footer-link">Mail: info@yourdomain.com</a></li>
                            <li><i class="icon icon-phone2"></i><a href="tel:+3630123456789" class="footer-link">Phone: +3630123456789</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2">
                        <h5 class="footer-heading">Find Us On</h5>
                        <ul class="list-unstyled social-links">
                            <li><a href="https://facebook.com" class="social-link" target="_blank"><i class="icon icon-facebook"></i></a></li>
                            <li><a href="https://twitter.com" class="social-link" target="_blank"><i class="icon icon-twitter"></i></a></li>
                            <li><a href="https://instagram.com" class="social-link" target="_blank"><i class="icon icon-instagram"></i></a></li>
                            <li><a href="https://pinterest.com" class="social-link" target="_blank"><i class="icon icon-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-8">
                        <ul id="subFooterLinks">
                            <li><a href="https://themeforest.net/user/ultimatewebsolutions" target="_blank">With <i class="fa fa-heart pulse"></i> by UWS</a></li>
                            <li><a href="../pdf/terms.pdf" target="_blank">Terms and conditions</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <div id="copy">© 2021 FoodBoard</div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer End -->

        <!-- Notification Messages -->
        <div class="addedToCartMsg">Added to cart</div>
        <div class="alreadyInCartMsg">Already in cart</div>

    </div>
    <!-- Page End -->

    <!-- Back to top button -->
    <div id="toTop">
        <i class="icon icon-chevron-up"></i>
    </div>

    <!-- Vendor Javascript Files -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendor/easing/js/easing.min.js') }}"></script>
    <script src="{{ asset('vendor/parsley/js/parsley.min.js') }}"></script>
    <script src="{{ asset('vendor/nice-select/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('vendor/price-format/js/jquery.priceformat.min.js') }}" ></script>
    <script src="{{ asset('vendor/theia-sticky-sidebar/js/ResizeSensor.min.js') }}"></script>
    <script src="{{ asset('vendor/theia-sticky-sidebar/js/theia-sticky-sidebar.min.js') }}" ></script>
    <script src="{{ asset('vendor/mmenu/js/mmenu.min.js') }}"></script>
    <script src="{{ asset('vendor/magnific-popup/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('vendor/float-labels/js/float-labels.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery-wizard/js/jquery-ui-1.8.22.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery-wizard/js/jquery.wizard.js') }}"></script>
    <script src="{{ asset('vendor/isotope/js/isotope.pkgd.min.js') }}" ></script>
    <script src="{{ asset('vendor/scrollreveal/js/scrollreveal.min.js') }}"></script>
    <script src="{{ asset('vendor/lazyload/js/lazyload.min.js') }}"></script>
    <script src="{{ asset('vendor/sticky-kit/js/sticky-kit.min.js') }}"></script>

    <!-- Stripe Javascript Files -->
    <script src="https://js.stripe.com/v3/"></script>
    <script src="{{ asset('js/stripe-func.js')  }}"></script>

    <!-- Main Javascript File -->
    <script src=" {{ asset('js/scripts.js') }}"></script>
</body>
</html>