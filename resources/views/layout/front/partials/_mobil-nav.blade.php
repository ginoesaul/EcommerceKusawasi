<nav class="panel-menu mm-right">
   <ul>
      <li><a href="{{ route('home') }}" class="load_page">INICIO</a></li>
      <li>
         <a href="{{ route('front.productsList') }}" class="load_page">PRODUCTOS</a>
         <ul>
            @forelse($categories as $category)
               <li><a href="{{ route('front.lists',['list' => 'categories','slug' => "$category->category_slug", ]) }}"
                      class="load_page">{{ $category->category_name }}</a>
                  @if ($category->children->count() > 0)
                     @include('layout.front.partials.categoryPartials._child', ['children' => $category->children])
                  @endif
               </li>
            @empty
            No existe ningún producto por el momento.
            @endforelse
         </ul>
      </li>
      <li>
         <a>OFERTAS ESPECIALES</a>
         <ul>
            @forelse($special_offers as $product)
               <li><a href="{{ route('front.show',$product->product_slug) }}">{{ $product->product_name }}</a></li>
            @empty
            No hay ofertas especiales por el momento.
            @endforelse

         </ul>
      </li>
      <li>
         <a>MÁS VENDIDOS</a>
         <ul>
            @forelse($popular_products as $product)
               <li><a href="{{ route('front.show',$product->product_slug) }}">{{ $product->product_name }}</a></li>
            @empty
            No hay productos populares por el momento.
            @endforelse
         </ul>


      <li>
         <a>MARCAS</a>
         <ul>
            @forelse($brands as $brand)
               <li><a href="{{ route('front.lists', ['list' => 'brands' , 'slug' => $brand->brand_slug ]) }}"
                      class="load_page">{{ $brand->brand_name }}</a></li>
            @empty
            No existe ninguna marca por el momento.
            @endforelse
         </ul>
      </li>
   </ul>
   <div class="mm-navbtn-names" style="display:none">
      <div class="mm-closebtn">CERRAR</div>
      <div class="mm-backbtn">VOLVER</div>
   </div>
</nav>

