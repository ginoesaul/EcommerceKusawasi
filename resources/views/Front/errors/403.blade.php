@extends('layout.front.index')
@section('title')
   Página no encontrada
@endsection
@section('extra_css')
@endsection
@section('content')
   <div class="offset-80">
      <div class="on-duty-box">
         <img src="{{ asset('front-assets/empty-404-icon.png') }}" alt="">
         <h1 class="block-title large">Por favor, inicie sesión o regístrese.</h1>
         <div class="description">
            Lo sentimos, esta página está restringida solo para usuarios autorizados.
         </div>
         <a class="btn btn-border color-default" href="{{ route('login') }}">Página de inicio de sesión</a>
      </div>
   </div>
@endsection
@section('extra_js')
@endsection