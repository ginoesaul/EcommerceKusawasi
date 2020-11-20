@extends('layout.front.index')
@section('title')
   Mi lista de favoritos
@endsection
@section('extra_css')
@endsection
@section('content')
   <!-- Breadcrumb End-->
   <div class="row">
      <h2 class="text-center title">Mi lista de favoritos</h2>
      <!--Middle Part Start-->
      <div class="col-sm-12">
         <div class="table-responsive">
            <table class="table table-bordered table-hover">
               <thead>
               <tr>
                  <td class="text-center">Producto</td>
                  <td class="text-center">Nombre</td>
                  <td class="text-center">Estado</td>
                  <td class="text-center">Marca</td>
                  <td class="text-center">Precio</td>
                  <td class="text-center">Operaciones</td>
               </tr>
               </thead
               <tbody>
               @forelse ($myFavorites as $product)
                  <tr>
                     <td class="text-center">
                        <a href="{{ route('front.show',$product->product_slug) }}"
                           target="_blank">
                           <img src="{{ $product->thumbnail }}" alt="product image" width="120" height="160"/>
                        </a>
                     </td>
                     <td class="text-left">
                        <a href="{{ route('front.show',$product->product_slug) }}">{{ $product->product_name }}</a>
                     </td>

                     @if($product->status == 1)
                        <td class="text-right text-success">Disponible</td>
                     @else
                        <td class="text-right text-danger"> No disponible</td>
                     @endif
                     <td class="text-center">
                        <img src="{{ $product->brands->src }}" class="img-thumbnail" alt="brand logo">
                     </td>
                     <td class="text-right">
                        @if($product->is_off == 1)
                           <span class="old-price">{{ number_format($product->sale_price) }}</span>
                           <span class="new-price" id="p_price">{{ $product->price }}</span>
                        @else
                           <span class="price" id="p_price">{{ $product->price }}</span>
                        @endif
                     </td>
                     <td class="text-center">
                        <a class="btn btn-red dislike" id="" data-id="{{ $product->product_id }}">
                           <i class="fa fa-times"></i></a>
                     </td>

                  </tr>
               @empty
                  <tr>
                     <td colspan="6">
                        ¡Su lista de favoritos está vacía!
                     </td>
                  </tr>
               @endforelse
               </tbody>
            </table>
         </div>

@endsection
@section('extra_js')
   <script src="{{ asset('front-assets/js/checkOut.js') }}"></script>
            <script type="text/javascript">
                   //remove favorite
                   $('.dislike').click(function (e) {
                       e.preventDefault();
                       var data = {
                           id: jQuery(this).attr('data-id')
                       };
                       if (upload_ajax("{{ route('unfavorite') }}", data)) {
                           $(this).closest('tr').remove();
                       }
                   });

            </script>
@endsection