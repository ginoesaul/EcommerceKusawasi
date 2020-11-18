<div class="slide-column-close">
   <a href="#"><span class="icon icon-close"></span>CERRAR</a>
</div>
<div class="col-md-3 col-lg-2 col-xl-2 aside leftColumn">
   <div class="collapse-block open collapse-block-mobile">
      <h3 class="collapse-block_title hidden">Filtro:</h3>
      <div class="collapse-block_content">
         <div class="filters-mobile">

         </div>
      </div>
   </div>
   <form id="order_form"
         action="{{ (\Request::route()->getName()) == 'front.productsList' ? route('front.productsList') : route('front.lists',[ 'list' => \Request::route('list'), 'slug' => \Request::route('slug') ])}}"
         method="post">
      <div class="collapse-block open">
         <h3 class=" ">ORDENAR</h3>
         <div class="collapse-block_content">
            @csrf
            <div class="filters-row_select ">
               <label for="sort">Ordenar por:</label>
               <select name="sort" id="sort" class="form-control sort-position">
                  <option value="created_at">Nuevos productos</option>
                  <option value="sale_price">Precio</option>
               </select>
            </div>
            <button type="submit" class="btn">FILTRAR</button>
         </div>
      </div>
      <div class="collapse-block open">
         <h3 class="collapse-block_title ">PRECIO</h3>
         <div class="collapse-block_content">
            {{--         <div class="price-slider">--}}
            {{--            <div class="priceSlider"></div>--}}
            {{--         </div>--}}
            <div class="price-input form-group">
               <label>De</label>
               <input type="number" class="form-control" id="" min="0" value="0" name="priceMin"/>
            </div>
            <div class="price-input form-group">
               <label>a</label>
               <input type="number" class="form-control" id="" min="0" max="9999999" name="priceMax"/>
            </div>
            <div class="price-input">
               <button type="submit" class="btn">FILTRAR</button>
            </div>
         </div>
      </div>
   </form>
   <div class="collapse-block open">
      <h3 class="collapse-block_title">PRODUCTOS:</h3>
      <div class="collapse-block_content">
         <ul class="list-simple">
            @forelse($categories as $category)
               <li>
                  <a href="{{ route('front.lists',['list' => 'categories','slug' => "$category->category_slug", ]) }}">{{ $category->category_name }}</a>
               </li>
            @empty
               <li>Nada aún</li>
            @endforelse
         </ul>
      </div>
   </div>
</div>