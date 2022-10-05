@extends('shared.layout')

@section('title')
Cardápio
@stop

@section('sub-header')
Cardápio
@stop

@section('content')
			<!-- Order -->
			<div class="order">
				<!-- Container -->
				<div class="container">
					<!-- Row -->
					<div class="row">
						<!-- Left Sidebar -->
						<div class="col-lg-8" id="mainContent">
							<!-- Filter Area -->
							<div class="row filter-box filters">
								<div class="filter-box-header">
									<h3>Filtros</h3>
									<span class="filter-box-link isotope-reset">remover Filtros</span>
								</div>
								<div class="col-md-6 col-sm-6">
									<select id="category" class="wide price-list" name="category">
										<option value="">Mostrar todos</option>
										<option value=".pizza">Salgados </option>
										<option value=".burger">Doces</option>
										<option value=".vegetarian">Bebidas</option>
									</select>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="search-wrap">
										<input id="search" type="text" class="form-control" placeholder="Search..." />
										<i class="icon icon-search"></i>
									</div>
								</div>
							</div>
							<!-- Filter Area End -->
							<!-- Grid -->
							<div class="row grid">
								<!-- Grid Item 05 -->

                                @foreach ($contents['products'] as $product)
                                    <div id="gridItem{{ $product->id }}" class="col-xl-6 col-lg-6 col-md-6 col-sm-6 isotope-item">
                                        <div class="item-body">
                                            <figure>
                                                <img src="../img/bg/lazy-placeholder.jpg" data-src="../img/gallery/grid-items/05.jpg" class="img-fluid lazy" alt="">
                                                <a href="#modalDetailsItem05" class="item-body-link modal-opener">
                                                    <div class="item-title">
                                                        <h3>{{ $product->name }}</h3>
                                                        <small>{{ implode(', ', $product->ingredients) }}</small>
                                                    </div>
                                                </a>
                                            </figure>
                                            <ul>
                                                <li>
                                                    <span class="item-price format-price">@format($product->price)</span>
                                                </li>
                                                <li>
                                                    <a href="javascript:;" productId="{{ $product->id }}" class="add-item-to-cart"><i class="icon icon-shopping-cart"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                @endforeach
								<!-- Grid Item 06 -->
								<div id="gridItem06" class="col-xl-6 col-lg-6 col-md-6 col-sm-6 isotope-item  vegetarian">
									<div class="item-body">
										<figure>
											<img src="../img/bg/lazy-placeholder.jpg" data-src="../img/gallery/grid-items/06.jpg" class="img-fluid lazy" alt="">
											<a href="#modalDetailsItem06" class="item-body-link modal-opener">
												<div class="item-title">
													<h3>Greek Salad</h3>
													<small>Tomato, Onion, Olives, Cocumber </small>
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
								<!-- Grid Item 07 -->
								<div id="gridItem07" class="col-xl-6 col-lg-6 col-md-6 col-sm-6 isotope-item  vegetarian">
									<div class="item-body">
										<figure>
											<img src="../img/bg/lazy-placeholder.jpg" data-src="../img/gallery/grid-items/07.jpg" class="img-fluid lazy" alt="">
											<a href="#modalDetailsItem07" class="item-body-link modal-opener">
												<div class="item-title">
													<h3>Grilled Salmon</h3>
													<small>With lime and pasta ...</small>
												</div>
											</a>
										</figure>
										<ul>
											<li>
												<span class="item-price format-price">9.00</span>
											</li>
											<li>
												<a href="javascript:;" class="add-item-to-cart"><i class="icon icon-shopping-cart"></i></a>
											</li>
										</ul>
									</div>
								</div>
								<!-- Grid Item 08 -->
								<div id="gridItem08" class="col-xl-6 col-lg-6 col-md-6 col-sm-6 isotope-item  vegetarian">
									<div class="item-body">
										<figure>
											<img src="../img/bg/lazy-placeholder.jpg" data-src="../img/gallery/grid-items/08.jpg" class="img-fluid lazy" alt="">
											<a href="#modalDetailsItem08" class="item-body-link modal-opener">
												<div class="item-title">
													<h3>Sushi</h3>
													<small>Rice, Soy Sauce ... </small>
												</div>
											</a>
										</figure>
										<ul>
											<li>
												<span class="item-price format-price">9.50</span>
											</li>
											<li>
												<a href="javascript:;" class="add-item-to-cart"><i class="icon icon-shopping-cart"></i></a>
											</li>
										</ul>
									</div>
								</div>
								<!-- Grid Item 09 -->
								<div id="gridItem09" class="col-xl-6 col-lg-6 col-md-6 col-sm-6 isotope-item burger">
									<div class="item-body">
										<figure>
											<img src="../img/bg/lazy-placeholder.jpg" data-src="../img/gallery/grid-items/09.jpg" class="img-fluid lazy" alt="">
											<a href="#modalDetailsItem09" class="item-body-link modal-opener">
												<div class="item-title">
													<h3>Beef Burger</h3>
													<small>Bacon, Cucumber, Cheese ...</small>
												</div>
											</a>
										</figure>
										<ul>
											<li>
												<span class="item-price format-price">9.20</span>
											</li>
											<li>
												<a href="javascript:;" class="add-item-to-cart"><i class="icon icon-shopping-cart"></i></a>
											</li>
										</ul>
									</div>
								</div>
								<!-- Grid Item 10 -->
								<div id="gridItem10" class="col-xl-6 col-lg-6 col-md-6 col-sm-6 isotope-item burger">
									<div class="item-body">
										<figure>
											<img src="../img/bg/lazy-placeholder.jpg" data-src="../img/gallery/grid-items/10.jpg" class="img-fluid lazy" alt="">
											<a href="#modalDetailsItem10" class="item-body-link modal-opener">
												<div class="item-title">
													<h3>Big Beef Burger</h3>
													<small>Double Meat, Bacon, Cheese ... </small>
												</div>
											</a>
										</figure>
										<ul>
											<li>
												<span class="item-price format-price">10.00</span>
											</li>
											<li>
												<a href="javascript:;" class="add-item-to-cart"><i class="icon icon-shopping-cart"></i></a>
											</li>
										</ul>
									</div>
								</div>
								<!-- Grid Item 11 -->
								<div id="gridItem11" class="col-xl-6 col-lg-6 col-md-6 col-sm-6 isotope-item burger">
									<div class="item-body">
										<figure>
											<img src="../img/bg/lazy-placeholder.jpg" data-src="../img/gallery/grid-items/11.jpg" class="img-fluid lazy" alt="">
											<a href="#modalDetailsItem11" class="item-body-link modal-opener">
												<div class="item-title">
													<h3>Chicken Burger</h3>
													<small>Double Cheese, Tomato ... </small>
												</div>
											</a>
										</figure>
										<ul>
											<li>
												<span class="item-price format-price">8.70</span>
											</li>
											<li>
												<a href="javascript:;" class="add-item-to-cart"><i class="icon icon-shopping-cart"></i></a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<!-- Grid End -->
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
											<h3>Resumo do pedido 1/2</h3>
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
														<span class="btn-form-func-content">Continuar pedido</span>
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
											<h3>Resumo do pedido 2/2</h3>
										</div>
										<div id="personalDetails">
											<div class="order-body">
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label for="userNameCashPayment">Nome completo</label>
															<input id="userNameCashPayment" class="form-control" name="username" type="text" data-parsley-pattern="^[a-zA-Z\s.]+$" required />
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label for="phoneCashPayment">Telefone</label>
															<input id="phoneCashPayment" class="form-control" name="phone" type="text" data-parsley-pattern="^[0-9]+$" required />
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
													<div class="col-md-12">
														<div class="form-group">
															<label for="messageCashPayment">Mensagem</label>
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
														<a href="javascript:;" class="modify-order backward">Modificar pedido</a>
													</div>
												</div>
												<div class="row">
													<div class="col-md-12">
														<button type="submit" name="submit" id="submitOrder" class="btn-form-func">
															<span class="btn-form-func-content">Confirmar</span>
															<span class="icon"><i class="fa fa-check" aria-hidden="true"></i></span>
														</button>
													</div>
												</div>
												<div class="row">
													<div class="col-md-12">
														<button type="button" name="backward" class="btn-form-func btn-form-func-alt-color backward">
															<span class="btn-form-func-content">Voltar</span>
															<span class="icon"><i class="fa fa-chevron-left" aria-hidden="true"></i></span>
														</button>
													</div>
												</div>
												<!--<div class="row footer">
													<div class="col-md-12 text-center">
														<small>Copyrigth FoodBoard 2021.</small>
													</div>
												</div>-->
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
@stop

