@extends('layout.front.index')
@section('title')
   Tu sesión ha expirado
@endsection
@section('extra_css')
@endsection
@section('content')
   <div class="offset-80">
      <div class="on-duty-box">

         <h1 class="block-title large"> ¡Tu sesión ha expirado!</h1>
         <h1 class="text-danger">440</h1>
         <div class="description">
            Por favor, intente una de las siguientes páginas:
         </div>
         <a class="btn btn-border color-default" href="{{ route('front.checkout') }}">Compruébalo.</a>
      </div>
   </div>

@endsection
@section('extra_js')
@endsection