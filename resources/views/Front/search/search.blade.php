@extends('layout.front.index')
@section('title')
   Búsqueda
@endsection
@section('extra_css')
@endsection
@section('content')

   @if (count($products) > 0)
      @include('Front.listing._data')
   @else
      <div class=" offset-80">
         <div class="on-duty-box">
            <img src="{{ asset('front-assets/empty-search-icon.png')  }}" alt="">
            <h1 class="block-title large">Tu búsqueda<br>no tuvo resultados.</h1>
            <div class="description">
              Resultados de búsqueda de <span class="color-base">'{{ $query ?? '' }}'</span>
            </div>
         </div>
      </div>
   @endif

@endsection
@section('extra_js')
@endsection