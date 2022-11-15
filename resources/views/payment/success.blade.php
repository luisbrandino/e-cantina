@extends('shared.layout')

@section('title')
    Pedido #{{ $order->id }}
@stop 

@section('sub-header')
    Pedido #{{ $order->id }}
@stop

@section('content')
<!-- Pedido -->
<div class="container">
    <table class="tbl-cart col-10" cellpadding="10" cellspacing="0">
                        <thead>
                            <tr>
                                <th class="text-left">Itens</th>
                                <th class="table-th">Preço unitário (R$)</th>
                                <th class="table-th">Quantidade</th>
                                <th class="table-th">Preço total (R$)</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($order->products as $product)
                                <tr class="product-title-resp">
                                    <td class="text-left"><span class="inline-block title-width text-center">{{ $product->name }}</span></td>
                                    <td data-label="Price" class="table-td">@format($product->price)</td>
                                    <td data-label="Quantity" class="table-td">{{ $product->pivot->quantity }}</td>
                                    <td data-label="Total" class="table-td">@format($product->price * $product->pivot->quantity)</td>
                                </tr>
                            @endforeach

                            <tr class="sub_total">
                                <td class="grand-resp" align="right" colspan="2"><strong>Preço final
                                        (R$)</strong></td>
                                <td data-label="Grand Total" align="right" colspan="3"><strong>@format($order->total)</strong>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <h3>Pix para pagamento:</h3>
                    
                    <div class="row">
                        <img src="../img/QR.png" alt="4530943-43" class="PixPage">
                        <h5 class="Cnpj"> CNPJ: <button> <span id="pix">4530943-43</span> </h5>
                    </div>

                    <h3 class="OrderDetails">Detalhes do pedido:</h3>
                    <div>
                        <strong>Nome: </strong><span class="Username">{{ $order->name }}</span> <br>
                        <strong>Nome do coletor: </strong><span class="Colector">{{ $order->collector }}</span> <br>
                    </div>

                    
                    <p class="mb-0 distanciarFooter"><a href="../" class="btn-2 col-10 text-center">Voltar para a
                            Home</a></p>
        </div>
            <!-- Row End -->
    </div>
        <!-- Container End -->
</div>
<!-- Fim Pedido -->
</div>

@stop