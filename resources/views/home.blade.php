@extends('shared.layout')

@section('title')
Home
@stop

@section('sub-header')
Home
@stop

@section('content')
<!-- Hero -->
<div class="hero-home bg-mockup hero-bottom-border">
    <div class="content">
        <h1 class="animated-element">E-cantina</h1>
        <p class="animated-element">Peça seu salgado diretamente do celular!</p>
        <a href="cardapio/" class="btn-1 medium animated-element">Faça seu pedido aqui!</a>
        <a href="#orderFood" class="mouse-frame nice-scroll">
            <div class="mouse"></div>
        </a>
    </div>
</div>
<!-- Hero End -->

<!-- Services -->
<div class="services">
    <div class="container">
        <div class="main-title">
            <span><em></em></span>
            <h2 id="orderFood">Métodos de pagamento</h2>
            <p>abaixo encontram-se os métodos de pagamento disponíveis.</p>
        </div>
        <div class="row">
            <div class="col-lg-12 animated-element">
                <a class="service-link">
                    <div class="box text-center">
                        <div class="icon d-flex align-items-center justify-content-center"><i class="fa-brands fa-pix"></i></div>
                        <h3 class="service-title">Pix</h3>
                        <p>O Pix realiza pagamentos instantâneos, facilitando a organização dos pagamentos e produtos. </p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Services End -->

<div class="banner animated-element">
    <div class="container">
        <div class="content">
            <div class="mask">
                <div class="textbox">
                    <small>Cardápio do dia</small>
                    <h2>Cardápio</h2>
                    <p>Reserve seu salgado direto do seu bolso.</p>
                    <a href="cardapio/" class="btn-1">Cardápio</a>
                </div>
            </div>
        </div>
    </div>
</div>



@stop
