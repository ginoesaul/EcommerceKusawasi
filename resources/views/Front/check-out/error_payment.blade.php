@extends('layout.front.index')
@section('title')
   Exitoso
@endsection
@section('extra_css')
@endsection
@section('content')
   <div class="offset-80">
      <div class="on-duty-box">
         <h3>Código : {{ $track_code }}</h3>
         <h1 class="block-title large text-danger"> ¡Error en el pago!</h1>
         <div class="description">
            Intente una de las siguientes páginas:
         </div>
         <a class="btn btn-border color-default" href="{{ route('home') }}">PÁGINA DE INICIO</a>
      </div>
   </div>

@endsection
@section('extra_js')
@endsection