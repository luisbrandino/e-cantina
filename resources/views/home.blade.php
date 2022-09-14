@extends('shared.layout')

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
                        <span class="filter-box-link isotope-reset">Resetar Filtros</span>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <select id="category" class="wide price-list" name="category">
                            <option value="">Mostrar tudo</option>
                            <option value=".salgado">Salgado</option>
                            <option value=".bebida">Bebida</option>
                            <option value=".doce">Doce</option>
                        </select>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="search-wrap">
                            <input id="search" type="text" class="form-control" placeholder="Procurar..." />
                            <i class="icon icon-search"></i>
                        </div>
                    </div>
                </div>
                <!-- Filter Area End -->
                <!-- Grid -->


                <div class="row grid">
                    @foreach ($contents['products'] as $index => $product)
                    <!-- Grid Item 01 -->
                    <div id="gridItem0<?= $index + 1 ?>" class="col-xl-6 col-lg-6 col-md-6 col-sm-6 isotope-item pizza">
                        <div class="item-body">
                            <figure>
                                <img src="../img/bg/lazy-placeholder.jpg" data-src="<?= $product->image_url ?? '../img/gallery/grid-items/01.jpg' ?>" class="img-fluid lazy" alt="">
                                <a href="#modalDetailsItem0<?= $index + 1 ?>" class="item-body-link modal-opener">
                                    <div class="item-title">
                                        <h3>{{ $product->name }}</h3>
                                        <small>{{ implode(', ', $product->ingredients) }}</small>
                                    </div>
                                </a>
                            </figure>
                            <ul>
                                <li>
                                    <span class="item-price">R$ @format($product->price)</span>
                                </li>
                                <li>
                                    <a href="javascript:;" class="add-options-item-to-cart"><i class="icon icon-shopping-cart"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                <!-- Grid End -->

                <!-- Modal Options for Item 01 -->
                <div id="modalOptionsItem0<?= $index + 1 ?>" class="modal-popup zoom-anim-dialog mfp-hide">
                    <div class="small-dialog-header">
                        <h3>Coxinha</h3>
                        <div class="addedToCartMsgInModal">Adicionado ao carrinho</div>
                        <div class="alreadyInCartMsgInModal">Já no carrinho</div>
                    </div>
                    <!-- Content End -->
                    <div class="footer">
                        <div class="row">
                            <div class="col-4 pr-0">
                                <button type="button" class="btn-modal-close">Fechar</button>
                            </div>
                            <div class="col-8">
                                <button type="button" class="btn-modal add-options-item-to-cart">Adicionar ao Carrinho</button>
                            </div>
                        </div>
                    </div>
                    <!-- Footer End -->
                </div>
                    <!-- Modal Options for Item 01 End -->

                    <!-- Modal Details for Item 01 -->
                <div id="modalDetailsItem0<?= $index + 1 ?>" class="modal-popup zoom-anim-dialog mfp-hide">
                    <div class="small-dialog-header">
                        <h3>{{ $product->name }}</h3>
                    </div>
                    <div class="content pb-1">
                        <figure><img src="../img/gallery/grid-items-large/01.jpg" alt="" class="img-fluid"></figure>
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
                @endforeach
                </div>


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
                                            <span class="radio-caption">Delivery</span><span class="option-price format-price transfer">10.00</span>
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
                            <div id="personalData">
                                <div class="order-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="userNameOnlinePayment">Full Name</label>
                                                <input id="userNameOnlinePayment" class="form-control" name="username" type="text" data-parsley-pattern="^[a-zA-Z\s.]+$" required />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="phoneOnlinePayment">Phone +12345</label>
                                                <input id="phoneOnlinePayment" class="form-control" name="phone" type="text" data-parsley-pattern="^\+{1}[0-9]+$" required />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="emailOnlinePayment">Email</label>
                                                <input id="emailOnlinePayment" class="form-control" name="email" type="email" required />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-6">
                                            <div class="form-group">
                                                <label for="addressOnlinePayment">Delivery Address</label>
                                                <input id="addressOnlinePayment" class="form-control" name="address" type="text" data-parsley-pattern="^[,.a-zA-Z0-9\s.]+$" required />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="messageOnlinePayment">Message</label>
                                                <input id="messageOnlinePayment" class="form-control" name="message" type="text" data-parsley-pattern="^[a-zA-Z0-9\s.:,!?']+$" />
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
                                            <div class="form-group">
                                                <input type="checkbox" id="cbxOnlinePayment" class="inp-cbx" name="terms" value="yes" required />
                                                <label class="cbx terms" for="cbxOnlinePayment">
                                                    <span>
                                                        <svg width="12px" height="10px" viewbox="0 0 12 10">
                                                            <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                                        </svg>
                                                    </span>
                                                    <span>Accept<a href="../pdf/terms.pdf" class="terms-link" target="_blank">Terms</a>.</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-6 pl-0">
                                            <a href="javascript:;" class="modify-order backward">Modify Order</a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <button type="submit" name="submit" id="submitPayment" class="btn-form-func">
                                                <span class="btn-form-func-content">Enviar</span>
                                                <span class="icon"><i class="fa fa-check" aria-hidden="true"></i></span>
                                            </button>
                                            <div class="spinner-icon">
                                                <i class="fa fa fa-cog fa-spin"></i>
                                            </div>
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
                                            <small>Copyrigth 2022.</small>
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


<!-- Modal Details for Item 1 End -->
@stop
