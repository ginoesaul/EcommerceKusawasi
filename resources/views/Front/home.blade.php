@extends('layout.front.index')
@section('title')
   Inicio
@endsection
@section('extra_css')
@endsection
@section('content')

   <!-- CATEGORIES -->
   <div class="row indent-col-none">
      <div class="row">
         <div class="row indent-col-none">
            <div class="col-extra-400 col-xs-6 col-md-6">
               <a href="listing-left-column.html" class="promo-box zoom-in design-14">
                  <img src="{{asset('images/blc.jpg')}}" alt="imagen-categoria">
                  <div class="description point-left">
                     <div class="block-table">
                        <div class="block-table-cell">
                           <div class="title color-defaulttext2">BAÑO, COCINA Y LIMPIEZA</div>
                           <span class="btn btn-lg btn-underline color-base">¡COMPRAR AHORA!</span>
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="col-extra-400 col-xs-6 col-md-6">
               <a href="listing-left-column.html" class="promo-box zoom-in design-14">
                  <img src="{{asset('images/electrohogar.jpg')}}" alt="imagen-categoria">
                  <div class="description point-left">
                     <div class="block-table">
                        <div class="block-table-cell">
                           <div class="title color-defaulttext2">ELECTROHOGAR</div>
                           <span class="btn btn-lg btn-underline color-base">¡COMPRAR AHORA!</span>
                        </div>
                     </div>
                  </div>
               </a>
            </div>
         </div>
         <div class="row indent-col-none">
            <div class="col-extra-400 col-xs-6 col-md-6">
               <a href="listing-left-column.html" class="promo-box zoom-in design-14">
                  <img src="{{asset('images/decoracion.jpg')}}" alt="">
                  <div class="description point-left">
                     <div class="block-table">
                        <div class="block-table-cell">
                           <div class="title color-defaulttext2">DECORACIÓN E ILUMINACIÓN</div>
                           <span class="btn btn-lg btn-underline color-base">¡COMPRAR AHORA!</span>
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="col-extra-400 col-xs-6 col-md-6">
               <a href="listing-left-column.html" class="promo-box zoom-in design-14">
                  <img src="{{asset('images/muebles.jpg')}}" alt="">
                  <div class="description point-left">
                     <div class="block-table">
                        <div class="block-table-cell">
                           <div class="title color-defaulttext2">MUEBLES</div>
                           <span class="btn btn-lg btn-underline color-base">¡COMPRAR AHORA!</span>
                        </div>
                     </div>
                  </div>
               </a>
            </div>
         </div>
      </div>
      
   </div>
   <!-- /CATEGORIES -->
   <hr>
   <hr>
   
   <hr> 
<<<<<<< HEAD
   <--<div class="container" style="margin-top: -0.0rem">
=======
   <!-- PRODUCTS -->
   <div class="container" style="margin-top: -0.0rem">
>>>>>>> 24548bdb3dc80211f0b2122ead37afcec7142de8
      <div class="row">
         <div class="filter-isotop">
            <div class="grid" id="products_data">
               @include('Front._data')

            </div>
            <center><img alt="" src="{{ asset('admin-assets/5.gif') }}" class="center preview ajax-load"></center>
            <hr>
{{--            <center id="load" style="display: none">PROXIMAMENTE MÁS PRODUCTOS...</center>--}}
            <div class="divider"></div>
         </div>
      </div>
   </div> 

    <input type="hidden" id="lastPage" value="{{ $products->lastPage() }}">
@endsection
@section('extra_js')
   <script type="text/javascript">
       var page = 1;
       $(window).scroll(function () {
          // if ($(window).scrollTop() +
              // ($('#product_data').height() + $('#footer').height() + 900) >= $(document).height()) {
               //page++;
               //this will avoid send more request when all data has loaded
               //if (page > $("#lastPage").val()) {
                  // $('.ajax-load').hidden;
                  // $('#load').show();
                   //return;
              // }
               //avoid to show more than 3 page
               //if (page === 3){
                   //return;
               }//
               // console.log(page);
              // loadMoreData(page);
           //}
           /*function loadMoreData(page) {

               $.ajax(
                   {
                       url: '/?page=' + page,
                       type: "get",
                       beforeSend: function () {
                           $('.ajax-load').show();
                       }
                   })
                   .done(function (data) {
                       if (data.html == " ") {
                           $('.ajax-load').attr('src', '');
                           $('#load').show();
                           return;
                       }
                       $('.ajax-load').hide();
                      // $("#products_data").append(data.html);
                   })
                   .fail(function (jqXHR, ajaxOptions, thrownError) {
                       console.log(jqXHR);
                   });
           }*/
       });
   </script>
@endsection