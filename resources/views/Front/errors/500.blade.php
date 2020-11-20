@extends('layout.front.index')
@section('title')
   Página no encontrada
@endsection
@section('extra_css')
@endsection
@section('content')
   <div class="offset-80">
      <div class="on-duty-box">
         <h1 class="green font-weight-bold">500</h1>
         <h1 class="block-title large">¡El servicio no está disponible!</h1>
         <div class="description">
            {{ $exception->getMessage() }}
            <p>Lo sentimos, se produjo un error en el servidor.</p> Por favor, compruébelo más tarde.
         </div>
         <a class="btn btn-border color-default" href="{{ route('home') }}">PÁGINA DE INICIO</a>
      </div>
   </div>
@endsection
@section('extra_js')
@endsection