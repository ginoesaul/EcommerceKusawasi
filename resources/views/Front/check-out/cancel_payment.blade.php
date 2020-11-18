@extends('layout.front.index')
@section('title')
Cancelar
@endsection
@section('extra_css')
@endsection
@section('content')
<div class="offset-80">
   <div class="on-duty-box">
      <h1 class="block-title large">Su pedido fue cancelado </h1>
      <h3>track code : {{ $track_code }}</h3>
      <div class="description">
         Intenta una de las siguientes páginas:
      </div>
      <a class="btn btn-border color-default" href="{{ route('home') }}">PÁGINA DE INICIO</a>
   </div>
</div>



@endsection
@section('extra_js')
@endsection