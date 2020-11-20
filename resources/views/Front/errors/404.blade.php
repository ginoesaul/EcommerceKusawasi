@extends('layout.front.index')
@section('title')
    Página no encontrada
@endsection
@section('extra_css')
@endsection
@section('content')
   <div class="offset-80">
      <div class="on-duty-box">
         <img src="{{ asset('front-assets/error_404.png') }}" alt="pagina no encontrada" height="100px">
         <h1 class="block-title large"> Lo sentimos, no podemos encontrar lo que está buscando. Por favor, inténtelo de nuevo.</h1>
         <div class="description">
         Por favor, intente una de las siguientes páginas:
         </div>
         <a class="btn btn-border color-default" href="{{ route('home') }}">Página de Inicio</a>
      </div>
   </div>
@endsection
@section('extra_js')
@endsection