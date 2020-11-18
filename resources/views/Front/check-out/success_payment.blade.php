@extends('layout.front.index')
@section('title')
      Exitoso
@endsection
@section('extra_css')
@endsection
@section('content')


<div class="offset-80">
   <div class="on-duty-box">
      <h3>track code : {{ $track_code }}</h3>
      <h1 class="block-title large text-success">¡Su pago fue exitoso!</h1>
      <a class="btn btn-border color-default" href="{{ route('home') }}">PÁGINA DE iNICIO</a>
   </div>
</div>


@endsection
@section('extra_js')
@endsection