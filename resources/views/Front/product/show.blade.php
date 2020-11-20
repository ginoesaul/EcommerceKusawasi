@extends('layout.front.index')
@section('title')
   {{ $product->product_name }}
@endsection
@section('extra_css')
   <link rel="stylesheet" href="{{ asset('front-assets/css/easyzoom.css') }}">
   <style type="text/css">
      /****** Style Star rating0 Widget *****/
      .rating0 {
         border: none;
         float: left;
      }

      .rating0 > input {
         display: none;
      }

      .rating0 > label:before {
         margin: 5px;
         font-size: 1.25em;
         font-family: FontAwesome;
         display: inline-block;
         content: "\f005";
      }

      .rating0 > .half:before {
         content: "\f089";
         position: absolute;
      }

      .rating0 > label {
         color: #ddd;
         float: right;
      }

      /**** CSS Magic to Highlight Stars on Hover *****/
      .rating0 > input:checked ~ label, /* show gold star when clicked */
      .rating0:not(:checked) > label:hover, /* hover current star */
      .rating0:not(:checked) > label:hover ~ label {
         color: #FFD700;
      }

      /* hover previous stars in list */
      .rating0 > input:checked + label:hover, /* hover current star when changing rating0 */
      .rating0 > input:checked ~ label:hover,
      .rating0 > label:hover ~ input:checked ~ label, /* lighten current selection */
      .rating0 > input:checked ~ label:hover ~ label {
         color: #FFED85;
      }
   </style>
@endsection
@section('content')
   <div class="row">
      <!-- IMAGE -->
      <div class="col-md-6 hidden-xs">
         <div class="col-sm-3">
            <div class="thumbnails ">
               @foreach($product->photos as $photo)
                  <a href="{{ $photo->src }}" data-standard="{{ $photo->src }}">
                     <img src="{{ ($photo->thumbnail ) }}" alt="product photo" class="img-thumbnail"/>
                  </a>
               @endforeach
            </div>
         </div>
         <div class="col-sm-9">
            <div class="easyzoom easyzoom--overlay easyzoom--with-thumbnails product-main-image-item">
               <a href="{{ ($product->cover) }}">
                  <img id="p_src" src="{{ $product->cover }}" alt="" width="330" height="490"/>
               </a>
            </div>
         </div>
         
      </div>
      <!-- /IMAGE -->
      <div class="col-md-6">
         <div class="visible-xs">
            <div class="clearfix"></div>
            <ul class="mobileGallery-product">
               @forelse($product->photos as $photo)
                  <li><img src="{{ $photo->src }}" alt="?" class="img-thumbnail"/></li>
               @empty
               @endforelse
            </ul>
            <!--  BRAND -->
            <div class="brand text-center">
               <img src="{{ $product->brands->src }}" alt="LOGO">
            </div>
            <div class="text">
               {{ $product->brands->brand_description }}
            </div>
            <br>
         </div>
         <div class="product-info product-info1">
            <div class="add-info">
               <div class="pull-left">
                  <div class="sku">
                     <span class="font-weight-medium color-defaulttext2">SKU:</span> {{ $product->sku }}
                  </div>
               </div>
               <div class="pull-left">
                  <div class="availability">
                     <span class="font-weight-medium color-defaulttext2">Disponibilidad:</span>
                     @if($product->status == 1)
                        <span class="color-base">En venta</span>
                     @else
                        <span class="color-red">Fuera de venta</span>
                        <span class="btn-info">Comenzamos:{{ $product->data_available }}</span>
                     @endif
                  </div>
               </div>
            </div>
            <h1 class="title" id="p_name">{{ $product->product_name }}</h1>
            <div class="price">
               @if($product->is_off == 1)
                  <span class="new-price" id="p_price">{{ $product->price }}</span>
                  <span class="old-price">{{ number_format($product->sale_price) }}</span>
               @else
                  <span class="price" id="p_price">{{ $product->price }}</span>
               @endif
            </div>
            <!-- RATING -->
            <div class="review">
               @for( $i = 0 ; $i < round($product->averageRating) ; $i++)
                  <span class="fa fa-stack" style="color: gold">
                        <i class="fa fa-star fa-stack-2x"></i>
                        <i class="fa fa-star-o fa-stack-2x"></i>
                     </span>
               @endfor
               @for( $i = 5 ; $i > round($product->averageRating) ; $i--)
                  <span class="fa fa-stack" style="color: gold">
                        <i class="fa fa-star-o fa-stack-2x"></i>
                     </span>
               @endfor
               <a href="#review1">{{ $product->comments->count() }} Comentarios</a>
               <a href="#review1">Añadir tus comentarios</a>
            </div>
            <!-- /RATING -->
            <div class="row">
               <form>
                  <div class="col-sm-6">
                     <!-- COLOR -->
                     @if ($product->colors->count())
                        <div class="wrapper">
                           <div class="title-options">
                              COLOR<span class="color-required">*</span>
                           </div>
                           <ul class="options-swatch-color">
                              @foreach($product->colors()->get(['color_code','color_name']) as $color)
                                 <li class="">
                                    <a class="p_color" href="#" data-id="{{ $color->color_name }}">
                                    <span class="swatch-label color-orange active"
                                          style="background: {{ $color->color_code }}">
                                    </span>
                                    </a>
                                 </li>
                              @endforeach
                              <span class="tab swatch-label color-orange"></span>
                           </ul>
                        </div>
                     @else
                        <input type="hidden" id="p_color" class="p_color" value="-">
                  @endif
                  <!-- SIZE -->
                  @if ($product->has_size)
                        <div class="wrapper">
                           <div class="title-options">TAMAÑO<span class="color-required">*</span></div>
                           <ul class="tags-list _size">
                              <li><a href="#" size="XS">XS</a></li>
                              <li><a href="#" size="S">S</a></li>
                              <li><a href="#" size="M">M</a></li>
                              <li><a href="#" size="L">L</a></li>
                           </ul>
                        </div>
                     @else
                        <input type="hidden" class="p_size" id="p_size" value="-">
                  @endif


                  </div>

                  <!-- ATTRIBUTES -->
                  <div class="col-sm-6">
                     @forelse($product->attributes as $attribute)
                        <div class="wrapper">
                           <label class="title-options" for="{{ $attribute->attr_name }}"><span
                                      class="color-required">*</span>{{ $attribute->attr_name }}:</label>
                           <select name="attr_name[]" class="form-control select-inline"
                                   id="{{ $attribute->attr_name }}" required>
                              @forelse($attribute->attributeValues as $value)
                                 <option value="{{$attribute->attr_name.':'.$value->value.'-' }}">{{ $value->value }}</option>
                              @empty
                              @endforelse
                           </select>
                        </div>
                     @empty
                        <input type="hidden" name="select-inline">

                     @endforelse
                  </div>
               </form>
            </div>
            <b id="p_error" style="display: none;color: red;">ddd</b>
            <div class="wrapper">
               <div class="pull-left"><label class="qty-label">Cantidad</label></div>
               <div class="pull-left">
                  <div class="style-2 input-counter">
                     <span class="minus-btn"></span>
                     <input type="text" value="1" size="10" id="p_qty"/>
                     <span class="plus-btn"></span>
                  </div>
                  <a href="#" id="add_to_cart" class="btn btn-lg btn-addtocart add_to_cart" style="">
                     <span class="icon icon-shopping_basket"></span>¡COMPRA AHORA!
                  </a>
               </div>


               <ul class="product_inside_info_link">
                  <li class="text-right">
                     @auth()
                        @if($product->favorited())
                           <a href="#" id="unfavorites" data-id="{{ $product->product_id }}">
                              <span id="dislike_span" class="fa fa-heart"></span>
                              <span class="text">Borrar de favoritos</span>
                           </a>
                        @else
                           <a href="#" id="favorite" data-id="{{ $product->product_id }}">
                              <span id="like_span" class="fa fa-heart-o"></span>
                              <span class="text">Añadir a favoritos</span>
                           </a>
                        @endif
                     @else
                        <hr>
                        <hr>
                        <i>para acceder a la lista de deseos por favor <a href="{{ route('login') }}">iniciar sesión</a></i>
                     @endauth
                  </li>
                  
               </ul>
            </div>
            <!-- SOCIALS -->
         {{--<ul class="social-icon-square">
            <li><a class="icon-01" href="#"></a></li>
            <li><a class="icon-02" href="#"></a></li>
            <li><a class="icon-03" href="#"></a></li>
            <li><a class="icon-04" href="#"></a></li>
            <li><a class="icon-05" href="#"></a></li>
         </ul>--}}
         <!-- /SOCIALS -->
         </div>
      </div>
   </div>
   <input type="hidden" id="p_color">
   <input type="hidden" id="p_size">
   <input type="hidden" id="p_slug" value="{{ $product->product_slug }}">
   <input type="hidden" id="p_id" value="{{ $product->product_id }}">
   <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}">
   <input type="hidden" id="_url" value="{{ route('cart.store')}}">
   
   <div class="divider"></div>


@endsection
@section('extra_js')
   <script src="{{ asset('front-assets/js/easyzoom.js') }}"></script>

   <script type="text/javascript">
       var $easyzoom = $('.easyzoom').easyZoom();
       // Setup thumbnails example
       var api1 = $easyzoom.filter('.easyzoom--with-thumbnails').data('easyZoom');
       $('.thumbnails').on('click', 'a', function (e) {
           var $this = $(this);

           e.preventDefault();

           // Use EasyZoom's `swap` method
           api1.swap($this.data('standard'), $this.attr('href'));
       });
   </script>
   <!-- to load uploadAjax function -->
   <script src="{{ asset('front-assets/js/checkOut.js') }}"></script>
   <!-- FOR CREATE COMMENT WITH AJAX  -->
   <script type="text/javascript">
       function getRatingVal(e) {
           $('#rating_value').val($(e).val());
       }

       $(document).ready(function () {
           //submit comment
           $('#comment_form').submit(function (e) {
               e.preventDefault();
               var data = {
                   commentable_type: $('#commentable_type').val(),
                   commentable_id: $('#commentable_id').val(),
                   rating: $("#rating_value").val(),
                   message: $('#comment_message').val(),
               };
               if (upload_ajax("{{ route('comment.store') }}", data)) {
                   $('#comment_answer').addClass('text-center badge-success').text('your comment has uploaded successfully');
                   $('#comment_form').remove();
               }
           });
           //add favorite
           jQuery('#favorite').click(function (e) {
               e.preventDefault();
               var data = {
                   id: jQuery('#favorite').attr('data-id')
               };
               if (upload_ajax("{{ route('favorite') }}", data)) {
                   $('#favorite').empty().append('<span class="fa fa-heart"></span><span class="text">Delete From WISHLIST</span>');
                   $(this).attr('id', 'unfavorites');
               }
           });

           //remove favorite
           jQuery('#unfavorites').click(function (e) {
               e.preventDefault();
               var data = {
                   id: jQuery('#unfavorites').attr('data-id')
               };
               if (upload_ajax("{{ route('unfavorite') }}", data)) {
                   $('#unfavorites').empty().append('<span class="fa fa-heart-o"></span><span class="text">ADD TO WISHLIST</span>');
               }
           });

           //add To Compare
           jQuery('.compare-link').click(function (e) {
               e.preventDefault();
               var data = {
                   id: jQuery(this).attr('data-id')
               };
               if (upload_ajax("{{ route('front.productsCompare') }}", data)) {
                   $('#compare_text').empty().text('added to Compare list');
               }
           });


       });
   </script>
@endsection
