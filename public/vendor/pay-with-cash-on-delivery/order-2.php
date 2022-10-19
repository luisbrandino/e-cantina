<?php

use Foodboard\Config;

require_once __DIR__ . '/Config/Config.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Food order wizard with online payment">
	<meta name="author" content="UWS">
	<title>FoodBoard | Food delivery dashboard</title>

	<!-- Favicon -->
	<link href="../img/favicon.png" rel="shortcut icon">

	<!-- Google Fonts - Jost -->
	<link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700&display=swap" rel="stylesheet">

	<!-- Font Awesome CSS -->
	<link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">

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

<body data-spy="scroll" data-target="#stickyNavItems" data-offset="90">

	<!-- Preloader -->
	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div>
	<!-- Preloader End -->

	<!-- Page -->
	<div id="page">

		<!-- Header -->
		<header class="main-header-2 static">
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
							<h1><a href="https://ultimatewebsolutions.net/foodboard/" title="FoodBoard">FoodBoard</a></h1>
						</div>
					</div>
					<div class="col-lg-9 col-6">
						<ul id="menuIcons">
							<li><a href="#"><i class="icon icon-support"></i></a></li>
							<li><a href="#"><i class="icon icon-shopping-cart2"></i></a></li>
						</ul>
						<!-- Menu -->
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

		<!-- Main -->
		<main>

			<!-- Hero -->
			<div class="hero-order bg-img">
				<div class="content">
					<div class="container main-info">
						<div class="row">
							<div class="col-lg-9">
								<h1>FoodBoard.</h1>
								<p>Food order wizard with online payment</p>
								<div class="contact-info">
									<a href="#"><i class="fa fa-map-marker"></i>1234 Street Name, City Name, USA</a>
									<a href="#"> <i class="fa fa-phone"></i>+3630123456789</a>
									<a href="#"><i class="fa fa-envelope"></i> info@yourdomain.com</a>
								</div>
							</div>
							<div class="col-lg-3 review-wrap">
								<a href="https://www.trustpilot.com/" class="review-link" target="_blank">
									<div class="score">
										<span>Excellent<em>Based on 230 reviews</em></span>
										<strong>4.9</strong>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Hero End -->

			<!-- Sticky Nav -->
			<nav class="sticky-nav">
				<div class="container">
					<ul id="stickyNavItems">
						<li>
							<a href="#section1" class="list-group-item sticky-nice-scroll">Starters</a>
						</li>
						<li>
							<a href="#section2" class="list-group-item sticky-nice-scroll">Main Meals</a>
						</li>
						<li>
							<a href="#section3" class="list-group-item sticky-nice-scroll">Desserts</a>
						</li>
					</ul>
				</div>
				<span></span>
			</nav>
			<!-- Sticky Nav End -->

			<!-- Order -->
			<div class="order">
				<!-- Container -->
				<div class="container">
					<!-- Row -->
					<div class="row">
						<!-- Left Sidebar -->
						<div class="col-lg-8" id="mainContent">
							<section id="section1">
								<!-- Title -->
								<div class="main-title">
									<h2>Starters</h2>
								</div>
								<!-- Title End -->
								<!-- Grid -->
								<div class="row menu-gallery">
									<!-- Grid Item 01 -->
									<div id="gridItem13" class="col-xl-6 col-lg-6 col-md-6 col-sm-6 animated-element">
										<div class="item-body">
											<figure>
												<img src="../img/gallery/grid-items/13.jpg" class="img-fluid" alt="">
												<a href="../img/gallery/grid-items-large/13.jpg" class="item-body-link">
													<div class="item-title">
														<h3>Onion Soup</h3>
														<small>With Toasted Bread</small>
													</div>
												</a>
											</figure>
											<ul>
												<li>
													<span class="item-price format-price">4.50</span>
												</li>
												<li>
													<a href="javascript:;" class="add-item-to-cart"><i class="icon icon-shopping-cart"></i></a>
												</li>
											</ul>
										</div>
									</div>
									<!-- Grid Item 02 -->
									<div id="gridItem14" class="col-xl-6 col-lg-6 col-md-6 col-sm-6 animated-element">
										<div class="item-body">
											<figure>
												<img src="../img/gallery/grid-items/14.jpg" class="img-fluid" alt="">
												<a href="../img/gallery/grid-items-large/14.jpg" class="item-body-link">
													<div class="item-title">
														<h3>Pumpkin Soup</h3>
														<small>With Roasted Seads</small>
													</div>
												</a>
											</figure>
											<ul>
												<li>
													<span class="item-price format-price">5.50</span>
												</li>
												<li>
													<a href="javascript:;" class="add-item-to-cart"><i class="icon icon-shopping-cart"></i></a>
												</li>
											</ul>
										</div>
									</div>
									<!-- Grid Item 03 -->
									<div id="gridItem15" class="col-xl-6 col-lg-6 col-md-6 col-sm-6 animated-element">
										<div class="item-body">
											<figure>
												<img src="../img/gallery/grid-items/15.jpg" class="img-fluid" alt="">
												<a href="../img/gallery/grid-items-large/15.jpg" class="item-body-link">
													<div class="item-title">
														<h3>Bruschetta</h3>
														<small>Tomatoes, Parmesan</small>
													</div>
												</a>
											</figure>
											<ul>
												<li>
													<span class="item-price format-price">6.00</span>
												</li>
												<li>
													<a href="javascript:;" class="add-item-to-cart"><i class="icon icon-shopping-cart"></i></a>
												</li>
											</ul>
										</div>
									</div>
									<!-- Grid Item 04 -->
									<div id="gridItem16" class="col-xl-6 col-lg-6 col-md-6 col-sm-6 animated-element">
										<div class="item-body">
											<figure>
												<img src="../img/gallery/grid-items/16.jpg" class="img-fluid" alt="">
												<a href="../img/gallery/grid-items-large/16.jpg" class="item-body-link">
													<div class="item-title">
														<h3>Spaghetti</h3>
														<small>With Cheese</small>
													</div>
												</a>
											</figure>
											<ul>
												<li>
													<span class="item-price format-price">7.00</span>
												</li>
												<li>
													<a href="javascript:;" class="add-item-to-cart"><i class="icon icon-shopping-cart"></i></a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<!-- Grid End -->
							</section>
							<section id="section2">
								<!-- Title -->
								<div class="main-title">
									<h2>Main Meals</h2>
								</div>
								<!-- Title End -->
								<!-- Grid -->
								<div class="row menu-gallery">
									<!-- Grid Item 01 -->
									<div id="gridItem17" class="col-xl-6 col-lg-6 col-md-6 col-sm-6 animated-element">
										<div class="item-body">
											<figure>
												<img src="../img/gallery/grid-items/17.jpg" class="img-fluid" alt="">
												<a href="../img/gallery/grid-items-large/17.jpg" class="item-body-link">
													<div class="item-title">
														<h3>Pork Steak</h3>
														<small>With Potato and Sparrow Grass</small>
													</div>
												</a>
											</figure>
											<ul>
												<li>
													<span class="item-price format-price">11.00</span>
												</li>
												<li>
													<a href="javascript:;" class="add-item-to-cart"><i class="icon icon-shopping-cart"></i></a>
												</li>
											</ul>
										</div>
									</div>
									<!-- Grid Item 02 -->
									<div id="gridItem18" class="col-xl-6 col-lg-6 col-md-6 col-sm-6 animated-element">
										<div class="item-body">
											<figure>
												<img src="../img/gallery/grid-items/18.jpg" class="img-fluid" alt="">
												<a href="../img/gallery/grid-items-large/18.jpg" class="item-body-link">
													<div class="item-title">
														<h3>Hamburger</h3>
														<small>With French Frise</small>
													</div>
												</a>
											</figure>
											<ul>
												<li>
													<span class="item-price format-price">12.00</span>
												</li>
												<li>
													<a href="javascript:;" class="add-item-to-cart"><i class="icon icon-shopping-cart"></i></a>
												</li>
											</ul>
										</div>
									</div>
									<!-- Grid Item 03 -->
									<div id="gridItem19" class="col-xl-6 col-lg-6 col-md-6 col-sm-6 animated-element">
										<div class="item-body">
											<figure>
												<img src="../img/gallery/grid-items/19.jpg" class="img-fluid" alt="">
												<a href="../img/gallery/grid-items-large/19.jpg" class="item-body-link">
													<div class="item-title">
														<h3>Fried Chicken</h3>
														<small>With bed of Kale and Lemon Rice</small>
													</div>
												</a>
											</figure>
											<ul>
												<li>
													<span class="item-price format-price">13.00</span>
												</li>
												<li>
													<a href="javascript:;" class="add-item-to-cart"><i class="icon icon-shopping-cart"></i></a>
												</li>
											</ul>
										</div>
									</div>
									<!-- Grid Item 04 -->
									<div id="gridItem20" class="col-xl-6 col-lg-6 col-md-6 col-sm-6 animated-element">
										<div class="item-body">
											<figure>
												<img src="../img/gallery/grid-items/20.jpg" class="img-fluid" alt="">
												<a href="../img/gallery/grid-items-large/20.jpg" class="item-body-link">
													<div class="item-title">
														<h3>Salmon Steak</h3>
														<small>With Potato Puree and Parsley</small>
													</div>
												</a>
											</figure>
											<ul>
												<li>
													<span class="item-price format-price">13.50</span>
												</li>
												<li>
													<a href="javascript:;" class="add-item-to-cart"><i class="icon icon-shopping-cart"></i></a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<!-- Grid End -->
							</section>
							<section id="section3">
								<!-- Title -->
								<div class="main-title">
									<h2>Desserts</h2>
								</div>
								<!-- Title End -->
								<!-- Grid -->
								<div class="row menu-gallery">
									<!-- Grid Item 01 -->
									<div id="gridItem21" class="col-xl-6 col-lg-6 col-md-6 col-sm-6 animated-element">
										<div class="item-body">
											<figure>
												<img src="../img/gallery/grid-items/21.jpg" class="img-fluid" alt="">
												<a href="../img/gallery/grid-items-large/21.jpg" class="item-body-link">
													<div class="item-title">
														<h3>American Pancake</h3>
														<small>With Chocolate and Strawberry</small>
													</div>
												</a>
											</figure>
											<ul>
												<li>
													<span class="item-price format-price">5.00</span>
												</li>
												<li>
													<a href="javascript:;" class="add-item-to-cart"><i class="icon icon-shopping-cart"></i></a>
												</li>
											</ul>
										</div>
									</div>
									<!-- Grid Item 02 -->
									<div id="gridItem22" class="col-xl-6 col-lg-6 col-md-6 col-sm-6 animated-element">
										<div class="item-body">
											<figure>
												<img src="../img/gallery/grid-items/22.jpg" class="img-fluid" alt="">
												<a href="../img/gallery/grid-items-large/22.jpg" class="item-body-link">
													<div class="item-title">
														<h3>Chocolate Cake</h3>
														<small>With Raspberry</small>
													</div>
												</a>
											</figure>
											<ul>
												<li>
													<span class="item-price format-price">5.50</span>
												</li>
												<li>
													<a href="javascript:;" class="add-item-to-cart"><i class="icon icon-shopping-cart"></i></a>
												</li>
											</ul>
										</div>
									</div>
									<!-- Grid Item 03 -->
									<div id="gridItem23" class="col-xl-6 col-lg-6 col-md-6 col-sm-6 animated-element">
										<div class="item-body">
											<figure>
												<img src="../img/gallery/grid-items/23.jpg" class="img-fluid" alt="">
												<a href="../img/gallery/grid-items-large/23.jpg" class="item-body-link">
													<div class="item-title">
														<h3>Muffin</h3>
														<small>With Cream and Cherry</small>
													</div>
												</a>
											</figure>
											<ul>
												<li>
													<span class="item-price format-price">6.00</span>
												</li>
												<li>
													<a href="javascript:;" class="add-item-to-cart"><i class="icon icon-shopping-cart"></i></a>
												</li>
											</ul>
										</div>
									</div>
									<!-- Grid Item 04 -->
									<div id="gridItem24" class="col-xl-6 col-lg-6 col-md-6 col-sm-6 animated-element">
										<div class="item-body">
											<figure>
												<img src="../img/gallery/grid-items/24.jpg" class="img-fluid" alt="">
												<a href="../img/gallery/grid-items-large/24.jpg" class="item-body-link">
													<div class="item-title">
														<h3>Brownie</h3>
														<small>With Caramel</small>
													</div>
												</a>
											</figure>
											<ul>
												<li>
													<span class="item-price format-price">6.50</span>
												</li>
												<li>
													<a href="javascript:;" class="add-item-to-cart"><i class="icon icon-shopping-cart"></i></a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<!-- Grid End -->
							</section>
						</div>
						<!-- Left Sidebar End -->
						<!-- Right Sidebar -->
						<div class="col-lg-4" id="sidebar">
							<!-- Order Container -->
							<div id="orderContainer" class="theiaStickySidebar">
								<!-- Form -->
								<form method="POST" id="orderForm" name="orderForm" onsubmit="return confirmGuestOrder(event);">

									<!-- Step 1: Order Summary -->
									<div id="#orderSummaryStep" class="step">
										<div class="order-header">
											<h3>Order Summary 1/2</h3>
										</div>

										<div class="order-body">
											<!-- Cart Items -->
											<div class="row">
												<div class="col-md-12">
													<div class="order-list">
														<ul id="itemList">
															<!-- Cart Items / will be generated by js -->
														</ul>
													</div>
												</div>
											</div>
											<!-- Cart Items End -->
											<!-- Delivery Fee -->
											<div class="row">
												<div class="col-md-12 col-sm-12">
													<label class="cbx radio-wrapper no-edges">
														<input type="radio" value="delivery" name="transfer" checked> <span class="checkmark"></span>
														<span class="radio-caption">Delivery Fee</span><span class="option-price format-price transfer">10.00</span>
													</label>
												</div>
											</div>
											<!-- Delivery Fee -->
											<!-- Total -->
											<div class="row total-container">
												<div class="col-md-12 p-0">
													<span class="totalTitle">Total</span><span class="totalValue format-price float-right">0.00</span>
													<input type="hidden" id="totalOrderSummary" class="total format-price" name="total" value="" data-parsley-errors-container="#totalError" data-parsley-empty-order="" disabled />
												</div>
											</div>
											<div id="totalError"></div>
											<!-- Total End -->
											<!-- Forward Button -->
											<div class="row">
												<div class="col-md-12">
													<button type="button" name="forward" class="btn-form-func forward">
														<span class="btn-form-func-content">Continue Order</span>
														<span class="icon"><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
													</button>
												</div>
											</div>
											<!-- Forward Button End -->
										</div>
									</div>
									<!-- Step 1: Order Summary End -->

									<!-- Step 2: Checkout -->
									<div class="step">
										<div class="order-header">
											<h3>Order Summary 2/2</h3>
										</div>
										<div id="personalDetails" data-return-url='<?php echo Config::THANKYOU_URL; ?>' data-currency='<?php echo Config::CURRENCY; ?>'>
											<div class="order-body">
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label for="userNameCashPayment">Full Name</label>
															<input id="userNameCashPayment" class="form-control" name="username" type="text" data-parsley-pattern="^[a-zA-Z\s.]+$" required />
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label for="phoneCashPayment">Phone +12345</label>
															<input id="phoneCashPayment" class="form-control" name="phone" type="text" data-parsley-pattern="^\+{1}[0-9]+$" required />
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label for="emailCashPayment">Email</label>
															<input id="emailCashPayment" class="form-control" name="email" type="email" required />
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-12 col-sm-6">
														<div class="form-group">
															<label for="addressCashPayment">Delivery Address</label>
															<input id="addressCashPayment" class="form-control" name="address" type="text" data-parsley-pattern="^[,.a-zA-Z0-9\s.]+$" required />
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label for="messageCashPayment">Message</label>
															<input id="messageCashPayment" class="form-control" name="message" type="text" data-parsley-pattern="^[a-zA-Z0-9\s.:,!?']+$" />
														</div>
													</div>
												</div>
												<div class="row total-container">
													<div class="col-md-12 p-0">
														<span class="totalTitle">Total</span><span class="totalValue format-price float-right">0.00</span>
													</div>
												</div>
												<div class="row">
													<div class="col-6 pr-0">
														<!--<div class="form-group">
															<input type="checkbox" id="cbxCashPayment" class="inp-cbx" name="terms" value="yes" required />
															<label class="cbx terms" for="cbxCashPayment">
																<span>
																	<svg width="12px" height="10px" viewbox="0 0 12 10">
																		<polyline points="1.5 6 4.5 9 10.5 1"></polyline>
																	</svg>
																</span>
																<span>Accept<a href="../pdf/terms.pdf" class="terms-link" target="_blank">Terms</a>.</span>
															</label>
														</div> -->
													</div>
													<div class="col-6 pl-0">
														<a href="javascript:;" class="modify-order backward">Modify Order</a>
													</div>
												</div>
												<div class="row">
													<div class="col-md-12">
														<button type="submit" name="submit" id="submitOrder" class="btn-form-func">
															<span class="btn-form-func-content">Submit</span>
															<span class="icon"><i class="fa fa-check" aria-hidden="true"></i></span>
														</button>
													</div>
												</div>
												<div class="row">
													<div class="col-md-12">
														<button type="button" name="backward" class="btn-form-func btn-form-func-alt-color backward">
															<span class="btn-form-func-content">Back</span>
															<span class="icon"><i class="fa fa-chevron-left" aria-hidden="true"></i></span>
														</button>
													</div>
												</div>
												<div class="row footer">
													<div class="col-md-12 text-center">
														<small>Copyrigth FoodBoard 2021.</small>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- Step 2: Checkout End -->

								</form>
								<!-- Form End -->
							</div>
							<!-- Order Container End -->
						</div>
						<!-- Right Sidebar End -->
					</div>
					<!-- Row End -->
				</div>
				<!-- Container End -->
			</div>
			<!-- Order End -->

		</main>
		<!-- Main End -->

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

	<!-- Modal Warning Qty min. Limit -->
	<div id="modalWarningQtyMinLimit" class="modal-popup zoom-anim-dialog mfp-hide">
		<div class="small-dialog-header">
			<h3>Warning</h3>
		</div>
		<div class="content">
			<h6 class="mb-0">Quantity minimum limit is: 1 !</h6>
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
			<h3>Warning</h3>
		</div>
		<div class="content">
			<h6 class="mb-0">Quantity maximum limit is: 10 !</h6>
		</div>
		<div class="footer">
			<div class="row">
				<div class="col-4 pr-0">
					<button type="button" class="btn-modal-close">Got it</button>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal Warning Qty max. Limit End -->

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