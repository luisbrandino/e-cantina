@extends('shared.admin-layout')

@section('title') Login @stop

@section('content')
<div class="LoginPadding">
    <form action="{{ route('admin.auth') }}" method="POST" id="loginForm" name="loginForm">

        <!-- Step 2: Checkout -->
        <div class="step step2">

            <div class="order-headerLogin">
            </div>

            <div id="personalData loginForm">
                <div class="order-body2">
                    <h3 class="order-headerLogin">Formulário de Login</h3>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="emailOnlinePayment">Email</label>
                                <input id="emailOnlinePayment" class="form-control" name="email" type="email" required />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="userNameOnlinePayment">Senha</label>
                                <input id="userNameOnlinePayment" class="form-control" name="password" type="password" data-parsley-pattern="^[a-zA-Z\s.]+$" required />
                            </div>
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" name="submit" id="submitPayment" class="btn-form-func">
                                <span class="btn-form-func-content">Conectar</span>
                                <span class="icon"><i class="fa fa-check" aria-hidden="true"></i></span>
                            </button>
                            <div class="spinner-icon">
                                <i class="fa fa fa-cog fa-spin"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Step 2: Checkout End -->

    </form>
</div>
@stop
