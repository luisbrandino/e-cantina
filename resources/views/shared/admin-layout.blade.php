<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Food order wizard with online payment">
	<meta name="author" content="UWS">
	<title>E-cantina | @yield('title')</title>

	<!-- Favicon -->
	<link href="../img/favicon.png" rel="shortcut icon">

	<!-- Google Fonts - Jost -->
	<link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700&display=swap" rel="stylesheet">

	<!-- Font Awesome CSS -->
	<link href="../vendor/fontawesome/css/all.min.css" rel="stylesheet">

	<!-- Custom Font Icons -->
	<link href="../vendor/icomoon/css/iconfont.min.css" rel="stylesheet">

	<!-- Vendor CSS -->
	<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="../vendor/dmenu/css/menu.css" rel="stylesheet">
	<link href="../vendor/hamburgers/css/hamburgers.min.css" rel="stylesheet">
	<link href="../vendor/mmenu/css/mmenu.min.css" rel="stylesheet">
	<link href="../vendor/magnific-popup/css/magnific-popup.css" rel="stylesheet">
	<link href="../vendor/float-labels/css/float-labels.min.css" rel="stylesheet">

	<!-- Main CSS -->
	<link href="./../css/style.css" rel="stylesheet">

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
							<h1><a href="https://ultimatewebsolutions.net/foodboard/" title="FoodBoard">E-cantina</a>
							</h1>
						</div>
					</div>
					<div class="col-lg-9 col-6">
						<ul id="menuIcons">
							<li><a href="#"><i class="icon icon-support"></i></a></li>
							<li><a href="#"><i class="icon icon-shopping-cart2"></i></a></li>
						</ul>
						<!-- Menu -->
						<nav id="menu" class="main-menu">
							<ul>
								<li><span><a href="https://ultimatewebsolutions.net/foodboard/">Home</a></span></li>
								<li>
									<span><a href="#">Order <i class="fa fa-chevron-down"></i></a></span>
									<ul>
										<li>
											<span><a href="#">Pay online</a></span>
											<ul>
												<li><a href="pay-with-card-online/">Demo 1 - Filtering</a></li>
												<li><a href="pay-with-card-online/order-2.php">Demo 2 - Sticky
														navigation</a></li>
											</ul>
										</li>
										<li>
											<span><a href="#">Pay with cash</a></span>
											<ul>
												<li><a href="pay-with-cash-on-delivery/">Demo 1 - Filtering</a></li>
												<li><a href="pay-with-cash-on-delivery/order-2.php">Demo 2 - Sticky
														navigation</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li><span><a href="faq.html">Faq</a></span></li>
								<li><span><a href="contacts.html">Contacts</a></span></li>
							</ul>
						</nav>
						<!-- Menu End -->
					</div>
				</div>
			</div>
		</header>
		<!-- Header End -->

		<!-- Main -->
		<main>
		    @yield('content')
		</main>
		<!-- Main End -->

		<!-- Footer -->
		<footer class="main-footer footerBottom">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
					<div id="logo">
							<h1><a href="#" title="FoodBoard">FoodBoard</a></h1>
						</div>
					</div>
					<div class="col-md-3">
						<h5 class="footer-heading">Links úteis</h5>
						<ul class="list-unstyled nav-links">
							<li><i class="fa fa-angle-right"></i> <a href="../index.html" class="footer-link">Home</a></li>
							<li><i class="fa fa-angle-right"></i> <a href="../pay-with-card-online/index.php" class="footer-link">Cardápio</a></li>
						</ul>
					</div>
					<!--<div class="col-md-2">
						<h5 class="footer-heading">Find Us On</h5>
						<ul class="list-unstyled social-links">
							<li><a href="https://facebook.com" class="social-link" target="_blank"><i class="icon icon-facebook"></i></a></li>
							<li><a href="https://twitter.com" class="social-link" target="_blank"><i class="icon icon-twitter"></i></a></li>
							<li><a href="https://instagram.com" class="social-link" target="_blank"><i class="icon icon-instagram"></i></a></li>
							<li><a href="https://pinterest.com" class="social-link" target="_blank"><i class="icon icon-pinterest"></i></a></li>
						</ul>
					</div>-->
				</div>
				<hr>
				<div class="row">
					<div class="col-md-8">
						<ul id="subFooterLinks">
							<li><a>Desenvolvido por Matheus Monteiro e Luís Brandino</a></li>
							<!--<li><a href="../pdf/terms.pdf" target="_blank">Terms and conditions</a></li>-->
						</ul>
					</div>
					<div class="col-md-4">
						<div id="copy">Copyright @2022</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- Footer End -->

	</div>

	<!-- Page End -->

	<!-- Back to top button -->
	<div id="toTop"><i class="icon icon-chevron-up"></i></div>

	@yield('modal')

  </div>
 </div>
	<!-- Vendor Javascript Files -->
	<script src="../vendor/jquery/jquery.min.js"></script>
	<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="../vendor/easing/js/easing.min.js"></script>
	<script src="../vendor/parsley/js/parsley.min.js"></script>
	<script src="../vendor/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="../vendor/price-format/js/jquery.priceformat.min.js"></script>
	<script src="../vendor/theia-sticky-sidebar/js/ResizeSensor.min.js"></script>
	<script src="../vendor/theia-sticky-sidebar/js/theia-sticky-sidebar.min.js"></script>
	<script src="../vendor/mmenu/js/mmenu.min.js"></script>
	<script src="../vendor/magnific-popup/js/jquery.magnific-popup.min.js"></script>
	<script src="../vendor/float-labels/js/float-labels.min.js"></script>
	<script src="../vendor/jquery-wizard/js/jquery-ui-1.8.22.min.js"></script>
	<script src="../vendor/jquery-wizard/js/jquery.wizard.js"></script>
	<script src="../vendor/isotope/js/isotope.pkgd.min.js"></script>
	<script src="../vendor/scrollreveal/js/scrollreveal.min.js"></script>
	<script src="../vendor/lazyload/js/lazyload.min.js"></script>
	<script src="../vendor/sticky-kit/js/sticky-kit.min.js"></script>

	<!-- Main Javascript File -->
	<script src="../js/scripts.js"></script>

	@yield('scripts')

</body>

</html>
