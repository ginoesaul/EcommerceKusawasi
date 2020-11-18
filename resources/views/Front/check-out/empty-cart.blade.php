@extends('layout.front.index')
@section('title')
   Cesta de la compra vacía
@endsection
@section('extra_css')
@endsection
@section('content')
   <div class="container offset-80">
      <div class="on-duty-box">
         <img src="{{ asset('front-assets/empty-shopping-cart-icon.png') }}" alt="">
         <h1 class="block-title large">La cesta de la compra está vacía</h1>
         <div class="description">
            No tienes artículos en tu carrito de compras.
         </div>
         <a class="btn btn-border color-default" href="{{ route('front.productsList') }}">SEGUIR COMPRANDO </a>
      </div>
   </div>
@endsection
@section('extra_js')
@endsection