@php
   //VARIABLE TO TAKE PRODUCTS IN LAST WEEK FOR DISPLAYING -NEW- LABEL
      $data = \Carbon\Carbon::today()->subDays(7)
@endphp
@forelse($products as $product)
   <div class="col-xs-6 col-sm-4 col-md-4 col-lg-one-three">
      <div class="product">
         <div class="product_inside">
            <div class="image-box">
               <a href="{{ route('front.show',$product->product_slug) }}" class="load_page">
                  <img src="{{ $product->thumbnail }}" alt="product image" class="img-thumbnail">
                  @if($product->is_off == 1)
                     <div class="label-sale ">En venta<br>{{ $product->off }} % de descuento</div>
                  @endif
                  @if($product->created_at > $data)
                     <div class="label-new">Nuevo</div>
                  @endif
                  @if($product->status != 1)
                     <div class="label-sale">¡Próximamente!</div>
                  @endif
               </a>
            </div>
            
            <div class="price">
               @if($product->is_off == 1)
                  <span class="new-price">{{ $product->price }}</span>
                  <span class="old-price">{{ number_format($product->sale_price) }}</span>
               @else
                  <span class="price view">{{ $product->price }}</span>
               @endif
            </div>
            <div class="description">
               {{ $product->description }}
            </div>
            <div class="product_inside_hover">
               <div class="product_inside_info">
                  <div class="rating">
                     @for( $i = 0 ; $i < round($product->averageRating) ; $i++)
                        <span class="icon-star"></span>
                     @endfor
                     @for( $i = 5 ; $i > round($product->averageRating) ; $i--)
                        <span class="icon-star empty-star"></span>
                     @endfor
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
@empty
   <center>
      <div class="offset-80">
         <div class="on-duty-box">
            <img src="{{ asset('front-assets/empty-category-icon.png') }}" alt="">
            <h1 class="block-title large">Categoría vacía</h1>
            <div class="description">
               No hay productos que coincidan con la selección.
            </div>
         </div>
      </div>
   </center>
@endforelse
<div class="container">
   <div class="pagination">

      {{ $products->links() }}
   </div>
</div>

