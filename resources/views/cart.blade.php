@extends('shared.layout')

@section('sub-header')
    Carrinho de compras
@stop

@section('content')

@foreach ($contents as $row)

{{ 'Row Id: ' . $row->id . '<br>' }}
{{ 'Row Name: ' . $row->name . '<br>' }}
{{ 'Row Quantity: ' . $row->quantity . '<br>' }}
{{ 'Row Price: ' . $row->subtotal   . '<br>' }}

{{ 'Product Id' . $row->associatedModel->id . '<br>' }}
{{ 'Product Name' . $row->associatedModel->name }}

@endforeach

@stop