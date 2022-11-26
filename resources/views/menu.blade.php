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
                    @foreach ($contents['products'] as $product)
                            <div image="{{ $product->image_url ?? 'placeholder.jpg' }}" id="gridItem{{ $product->id }}" class="col-xl-6 col-lg-6 col-md-6 col-sm-6 isotope-item">
                                <div class="item-body">
                                    <figure>
                                        <img src="/thumbnail/{{ $product->image_url ?? 'placeholder.jpg' }}" data-src="/thumbnail-large/{{ $product->image_url ?? 'placeholder.jpg' }}" class="img-fluid lazy" alt="">
                                        <a href="#modalDetailsItem{{ $product->id }}" class="item-body-link modal-opener">
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
                                                @guest
                                                    <a class="disabled" href="javascript:;" productId="{{ $product->id }}" class="add-item-to-cart"><i class="icon icon-shopping-cart"></i></a>
                                                @endguest
                                                @auth
                                                    <a href="javascript:;" productId="{{ $product->id }}" class="add-item-to-cart"><i class="icon icon-shopping-cart"></i></a>
                                                @endauth
                                            </li>
                                        </ul>
                                    </div>
                                </div>

								@section('modal')
									<div id="modalDetailsItem{{ $product->id }}" class="modal-popup zoom-anim-dialog mfp-hide">
										<div class="small-dialog-header">
											<h3>{{ $product->name }}</h3>
										</div>
										<div class="content pb-1">
											<figure><img src="/thumbnail-large/{{ $product->image_url ?? 'placeholder.jpg' }}" alt="" class="img-fluid"></figure>
											<h6 class="mb-1">Ingredientes</h6>
											<p>{{ implode(', ', $product->ingredients) }}</p>
										</div>
										<div class="footer">
											<div class="row">
												<div class="col-4 pr-0">
													<button type="button" class="btn-modal-close">Fechar</button>
												</div>
											</div>
										</div>
									</div>
								@append
                        @endforeach
                </div>
                <!-- Grid End -->
            </div>
            <!-- Left Sidebar End -->
            <!-- Right Sidebar -->
            <div class="col-lg-4 " id="sidebar">
                <!-- Order Container -->
                <div id="orderContainer" class="theiaStickySidebar">
                    <!-- Form -->
                    <form action="{{ route('payment.success') }}" method="POST" id="orderForm" name="orderForm" onsubmit="return confirmGuestOrder(event);">
                        @csrf
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
                                                @auth
                                                    <input name="name" value="{{ Auth::user()->name }}" id="userNameCashPayment" class="form-control" name="username" type="text" data-parsley-pattern="^[a-zA-Z\u00C0-\u017F]+$" required />
                                                @endauth

                                                @guest
                                                    <input name="name" id="userNameCashPayment" class="form-control" name="username" type="text" data-parsley-pattern="^[a-zA-Z\u00C0-\u017F]+$" required />
                                                @endguest
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="messageCashPayment">Nome do coletor</label>
                                                <input name="collector" id="messageCashPayment" class="form-control" name="message" type="text" data-parsley-pattern="^[a-zA-Z\u00C0-\u017F]+$" required/>
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