<!DOCTYPE html>
<html lang="pt">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>E-cantina | cardápio</title>

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
							<h1><a href="#" title="FoodBoard">FoodBoard</a></h1>
						</div>
					</div>
					<div class="col-lg-9 col-6">
						<!-- Menu -->
						<nav id="menu" class="main-menu">
							<ul>
								<li><span><a href="../">Home</a></span></li>
								<li><span><a href="../pay-with-card-online/">Cardápio</a></span></li>

								@php
                                    $provider = config('providers.microsoft');
                                @endphp

                                @guest
                                    <li><span><a href="{{ $provider['auth_uri'] }}/authorize?client_id={{ $provider['client_id'] }}&redirect_uri={{ $provider['redirect_uri'] }}&scope={{ $provider['scope'] }}&response_mode=form_post&response_type=token">Entrar com Microsoft</a></span></li>
                                @endguest

                                @auth
                                	<li><span class="loginText">Bem-vindo, {{ Auth::user()->name }}</span></li>
                                @endauth
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
				<h1>Cardápio</h1>
			</div>
		</div>
		<!-- Sub Header End -->

		<!-- Main -->
		<main>
			@yield('content')
		</main>
		<!-- Main End -->

		<footer class="main-footer">
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

		<!-- Notification Messages -->
		<div class="addedToCartMsg">Item adicionado ao carrinho!</div>
		<div class="alreadyInCartMsg">O item já está no carrinho!</div>

	</div>
	<!-- Page End -->

	<!-- Modal Warning Qty min. Limit -->
	<div id="modalWarningQtyMinLimit" class="modal-popup zoom-anim-dialog mfp-hide">
		<div class="small-dialog-header">
			<h3>Atenção!</h3>
		</div>
		<div class="content">
			<h6 class="mb-0">A quantidade mínima por pedido é de pelo menos 1 item.</h6>
		</div>
		<div class="footer">
			<div class="row">
				<div class="col-4 pr-0">
					<button type="button" class="btn-modal-close">Got it</button>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal Warning Qty min. Limit End -->

	<!-- Modal Warning Qty max. Limit -->
	<div id="modalWarningQtyMaxLimit" class="modal-popup zoom-anim-dialog mfp-hide">
		<div class="small-dialog-header">
			<h3>Atenção!</h3>
		</div>
		<div class="content">
			<h6 class="mb-0">A quantidade máxima por pedidos é de 10 itens.</h6>
		</div>
		<div class="footer">
			<div class="row">
				<div class="col-4 pr-0">
					<button type="button" class="btn-modal-close">Entendi.</button>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal Warning Qty max. Limit End -->

	<!-- Modal Options for Item 01 -->

			<!--<div class="row">
				<div class="col-md-12 col-sm-12">
					<input type="hidden" id="item01ExtraTitle" name="item01ExtraTitle" value="Extra Cheese" />
					<input type="checkbox" id="item01Extra" class="inp-cbx" name="item01Extra" value="3.50" />
					<label class="cbx mb-0" for="item01Extra">
						<span>
							<svg width="12px" height="10px" viewbox="0 0 12 10">
								<polyline points="1.5 6 4.5 9 10.5 1"></polyline>
							</svg>
						</span>
						<span>Extra Cheese</span><span class="option-price format-price">2.00</span>
					</label>
				</div>
			</div>-->
		</div>
		<!-- Content End -->
		<!-- Footer End -->
	</div>
	<!-- Modal Options for Item 01 End -->

	<!-- Modal Options for Item 02
	<div id="modalOptionsItem02" class="modal-popup zoom-anim-dialog mfp-hide">
		<div class="small-dialog-header">
			<h3>Bolognese</h3>
			<div class="addedToCartMsgInModal">Added to cart</div>
			<div class="alreadyInCartMsgInModal">Already in cart</div>
		</div>
		<div class="content">
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<label class="cbx radio-wrapper">
						<input type="radio" value="Small: 26cm" name="size-options-item-02">
						<span class="checkmark"></span>
						<span class="radio-caption">Small: 26cm</span><span class="option-price format-price">4.30</span>
					</label>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<label class="cbx radio-wrapper">
						<input type="radio" value="Medium: 32cm" name="size-options-item-02" checked>
						<span class="checkmark"></span>
						<span class="radio-caption">Medium: 32cm</span><span class="option-price format-price">6.80</span>
					</label>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<label class="cbx radio-wrapper">
						<input type="radio" value="Large: 45cm" name="size-options-item-02">
						<span class="checkmark"></span>
						<span class="radio-caption">Large: 45cm</span><span class="option-price format-price">13.60</span>
					</label>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<input type="hidden" id="item02ExtraTitle" name="item02ExtraTitle" value="Extra Cheese" />
					<input type="checkbox" id="item02Extra" class="inp-cbx" name="item02Extra" value="3.50" />
					<label class="cbx" for="item02Extra">
						<span>
							<svg width="12px" height="10px" viewbox="0 0 12 10">
								<polyline points="1.5 6 4.5 9 10.5 1"></polyline>
							</svg>
						</span>
						<span>Extra Cheese</span><span class="option-price format-price">2.00</span>
					</label>
				</div>
			</div>
		</div>-->
		<!-- Content End -->

		<!-- Footer End -->
	</div>
	<!-- Modal Options for Item 02 End -->

	<!-- Modal Options for Item 03
	<div id="modalOptionsItem03" class="modal-popup zoom-anim-dialog mfp-hide">
		<div class="small-dialog-header">
			<h3>Castello</h3>
			<div class="addedToCartMsgInModal">Added to cart</div>
			<div class="alreadyInCartMsgInModal">Already in cart</div>
		</div>
		<div class="content">
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<label class="cbx radio-wrapper">
						<input type="radio" value="Small: 26cm" name="size-options-item-03">
						<span class="checkmark"></span>
						<span class="radio-caption">Small: 26cm</span><span class="option-price format-price">5.00</span>
					</label>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<label class="cbx radio-wrapper">
						<input type="radio" value="Medium: 32cm" name="size-options-item-03" checked>
						<span class="checkmark"></span>
						<span class="radio-caption">Medium: 32cm</span><span class="option-price format-price">8.65</span>
					</label>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<label class="cbx radio-wrapper">
						<input type="radio" value="Large: 45cm" name="size-options-item-03">
						<span class="checkmark"></span>
						<span class="radio-caption">Large: 45cm</span><span class="option-price format-price">15.00</span>
					</label>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<input type="hidden" id="item03ExtraTitle" name="item03ExtraTitle" value="Extra Cheese" />
					<input type="checkbox" id="item03Extra" class="inp-cbx" name="item03Extra" value="2.00" />
					<label class="cbx" for="item03Extra">
						<span>
							<svg width="12px" height="10px" viewbox="0 0 12 10">
								<polyline points="1.5 6 4.5 9 10.5 1"></polyline>
							</svg>
						</span>
						<span>Extra Cheese</span><span class="option-price format-price">2.00</span>
					</label>
				</div>
			</div>
		</div>-->
		<!-- Content End -->
		<!-- Footer End -->
	</div>
	<!-- Modal Options for Item 03 End -->

	<!-- Modal Options for Item 04
	<div id="modalOptionsItem04" class="modal-popup zoom-anim-dialog mfp-hide">
		<div class="small-dialog-header">
			<h3>Fitness</h3>
			<div class="addedToCartMsgInModal">Added to cart</div>
			<div class="alreadyInCartMsgInModal">Already in cart</div>
		</div>
		<div class="content">
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<label class="cbx radio-wrapper">
						<input type="radio" value="Small: 26cm" name="size-options-item-04">
						<span class="checkmark"></span>
						<span class="radio-caption">Small: 26cm</span><span class="option-price format-price">4.30</span>
					</label>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<label class="cbx radio-wrapper">
						<input type="radio" value="Medium: 32cm" name="size-options-item-04" checked>
						<span class="checkmark"></span>
						<span class="radio-caption">Medium: 32cm</span><span class="option-price format-price">7.90</span>
					</label>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<label class="cbx radio-wrapper">
						<input type="radio" value="Large: 45cm" name="size-options-item-04">
						<span class="checkmark"></span>
						<span class="radio-caption">Large: 45cm</span><span class="option-price format-price">14.30</span>
					</label>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<input type="hidden" id="item04ExtraTitle" name="item04ExtraTitle" value="Extra Cheese" />
					<input type="checkbox" id="item04Extra" class="inp-cbx" name="item04Extra" value="2.00" />
					<label class="cbx" for="item04Extra">
						<span>
							<svg width="12px" height="10px" viewbox="0 0 12 10">
								<polyline points="1.5 6 4.5 9 10.5 1"></polyline>
							</svg>
						</span>
						<span>Extra Cheese</span><span class="option-price format-price">2.00</span>
					</label>
				</div>
			</div>
		</div>-->
		<!-- Content End -->
		<!-- Footer End -->
	</div>
	<!-- Modal Options for Item 04 End -->

	@yield('modal')

	<!-- Back to top button -->
	<div id="toTop"><i class="icon icon-chevron-up"></i></div>

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

	<!-- Order Javascript File -->
	<script src="assets/js/order.js"></script>

	<!-- Main Javascript File -->
	<script src="../js/scripts.js"></script>
</body>

</html>
