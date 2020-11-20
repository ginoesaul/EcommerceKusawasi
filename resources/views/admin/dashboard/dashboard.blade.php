@extends('layout.admin.index' )
@section('title')
   Administrador del Dashboard
@stop
@section('extra_css')
@stop
@section('content')
   <div class="row">
      <div class="col-sm-12">
         <div class="widget-box">
            <div class="widget-header widget-header-flat widget-header-small">
               <h5 class="widget-title">
                  <i class="ace-icon fa fa-signal"></i>
                  <b>Ordenes</b>
               </h5>
            </div>
            <div class="widget-body">
               <div class="space-10"></div>

               <div class="infobox-container">
                  <div class="infobox infobox-black">
                     <div class="infobox-icon">
                        <i class="ace-icon fa fa-shopping-basket"></i>
                     </div>

                     <div class="infobox-data">
                        <span class="infobox-data-number">{{ $menu_count['orders']  }}</span>
                        <div class="infobox-content">Todas las ordenes</div>
                     </div>

                     {{--                        <div class="stat stat-success"></div>--}}
                  </div>

                  <div class="infobox infobox-orange">
                     <div class="infobox-icon">
                        <i class="ace-icon fa fa-circle-o"></i>
                     </div>
                     <div class="infobox-data">
                        <span class="infobox-data-number">{{ $order_sent }}</span>
                        <div class="infobox-content">Enviar</div>
                     </div>
                     {{--                        <div class="badge badge-success">--}}

                     {{--                           <i class="ace-icon fa fa-arrow-up"></i>--}}
                     {{--                        </div>--}}
                  </div>


                  <div class="infobox infobox-red">
                     <div class="infobox-icon">
                        <i class="ace-icon fa fa-newspaper-o"></i>
                     </div>

                     <div class="infobox-data">
                        <span class="infobox-data-number">{{$order_news}}</span>
                        <div class="infobox-content">Nuevas Oredenes</div>
                     </div>
                  </div>

                  <div class="infobox infobox-purple2">
                     <div class="infobox-icon">
                        <i class="ace-icon fa fa-thumbs-o-down"></i>
                     </div>

                     <div class="infobox-data">
                        <span class="infobox-data-number">{{ $order_not_complete }}</span>
                        <div class="infobox-content">No completado </div>
                     </div>
                     {{--                        <div class="stat stat-important">4%</div>--}}
                  </div>

                  <div class="space-10"></div>
               </div>
            </div>
            <!-- /.widget-body -->
         </div>
      </div>
   </div>

   <div class="row">
      <!-- Payments -->
      <div class="col-sm-6">
         <div class="widget-box transparent">
            <div class="widget-header widget-header-flat">
               <h4 class="widget-title lighter">
                  <i class="ace-icon fa fa-credit-card orange"></i>
                  <b>Pagos:</b>
               </h4>

               <div class="widget-toolbar">
                  <a href="#" data-action="collapse">
                     <i class="ace-icon fa fa-chevron-up"></i>
                  </a>
               </div>
            </div>

            <div class="space-6"></div>

            <div class="widget-body" style="display: block;">
               <div class="widget-main no-padding">
                  <div class="infobox-container">

                     <div class="infobox infobox-blue">
                        <div class="infobox-icon">
                           <i class="ace-icon fa fa-money"></i>
                        </div>
                        <div class="infobox-data">
                           <span class="infobox-data-number">{{ $menu_count['payments'] }}</span>
                           <div class="infobox-content">Todo</div>
                        </div>
                        {{--  <div class="badge badge-success">
                             <i class="ace-icon fa fa-arrow-up"></i>
                        </div>--}}
                     </div>
                     <div class="infobox infobox-orange">
                        <div class="infobox-icon">
                           <i class="ace-icon fa fa-credit-card"></i>
                        </div>

                        <div class="infobox-data">
                           <span class="infobox-data-number">{{$payment_week}}</span>
                           <div class="infobox-content">Esta semana</div>
                        </div>

                        {{--                        <div class="stat stat-success"></div>--}}
                     </div>

                     <div class="infobox infobox-green">
                        <div class="infobox-icon">
                           <i class="ace-icon fa fa-paypal"></i>
                        </div>

                        <div class="infobox-data">
                           <span class="infobox-data-number">{{ $payment_success }}</span>
                           <div class="infobox-content">Pagos exitosos</div>
                        </div>
{{--                                                <div class="stat stat-important">4%</div>--}}
                     </div>

                     <div class="infobox infobox-red">
                        <div class="infobox-icon">
                           <i class="ace-icon fa fa-newspaper-o"></i>
                        </div>

                        <div class="infobox-data">
                           <span class="infobox-data-number">{{ $payment_failed }}</span>
                           <div class="infobox-content">Pagos invalidos</div>
                        </div>
                     </div>

                     <div class="space-6"></div>
                  </div>
               </div><!-- /.widget-main -->
            </div><!-- /.widget-body -->
         </div><!-- /.widget-box -->
      </div>

      <!-- USERS -->
      <div class="col-sm-6">
         <div class="widget-box transparent">
            <div class="widget-header widget-header-flat">
               <h4 class="widget-title lighter">
                  <i class="ace-icon fa fa-users orange"></i>
                  <b>Users:</b>
               </h4>

               <div class="widget-toolbar">
                  <a href="#" data-action="collapse">
                     <i class="ace-icon fa fa-chevron-up"></i>
                  </a>
               </div>
            </div>
            <div class="space-30"></div>
            <div class="widget-body" style="display: block;">
               <div class="widget-main no-padding">
                  <div class="clearfix">
                     <div class="grid3">
                        <span class="grey">
                           <i class="ace-icon fa fa-user fa-2x blue"></i>
                            Usuarios</span>
                        <h4 class="bigger pull-right">{{ $menu_count['users'] }}</h4>
                     </div>

                     <div class="grid3">
                        <span class="grey">
                           <i class="ace-icon fa fa-user-times fa-2x purple"></i>
                           Empelados
                        </span>
                        <h4 class="bigger pull-right">{{ $employees }}</h4>
                     </div>

                     <div class="grid3">
                        <span class="grey"><i class="ace-icon fa fa-user-plus fa-2x red"></i>
                           Nuevo usuarios
                        </span>
                        <h4 class="bigger pull-right">{{ $new_users }}</h4>
                     </div>
                  </div>
               </div><!-- /.widget-main -->
            </div><!-- /.widget-body -->
         </div><!-- /.widget-box -->
      </div><!-- /.col -->

   </div>
   <div class="space-10"></div>
   <div class="row">
      <div class="col-sm-6">
         <div class="widget-box transparent">
            <div class="widget-header widget-header-flat">
               <h4 class="widget-title lighter">
                  <i class="ace-icon fa fa-product-hunt"></i>
                  <b> Productos:</b>
               </h4>

               <div class="widget-toolbar">
                  <a href="#" data-action="collapse">
                     <i class="ace-icon fa fa-chevron-up"></i>
                  </a>
               </div>
            </div>
            <div class="space-6"></div>
            <div class="widget-body" style="display: block;">
               <div class="widget-main no-padding">
                  <div class="infobox-container">
                     <div class="infobox infobox-blue">
                        <div class="infobox-icon">
                           <i class="ace-icon fa fa-list "></i>
                        </div>

                        <div class="infobox-data">
                           <span class="infobox-data-number blue">{{ $menu_count['products'] }}</span>
                           <div class="infobox-content">Todos los productos</div>
                        </div>

                        {{--                        <div class="stat stat-success"></div>--}}
                     </div>

                     <div class="infobox infobox-blue">
                        <div class="infobox-icon">
                           <i class="ace-icon fa fa-thumbs-up"></i>
                        </div>
                        <div class="infobox-data">
                           <span class="infobox-data-number">{{ $available_products }}</span>
                           <div class="infobox-content">Productos disponibles</div>
                        </div>
                        {{--                        <div class="badge badge-success">--}}

                        {{--                           <i class="ace-icon fa fa-arrow-up"></i>--}}
                        {{--                        </div>--}}
                     </div>

                     <div class="infobox infobox-blue">
                        <div class="infobox-icon">
                           <i class="ace-icon fa fa-circle"></i>
                        </div>

                        <div class="infobox-data">
                           <span class="infobox-data-number">{{ $discounted_products }}</span>
                           <div class="infobox-content">Productos con descuento</div>
                        </div>
                        {{--                        <div class="stat stat-important">4%</div>--}}
                     </div>

                     <div class="infobox infobox-red">
                        <div class="infobox-icon">
                           <i class="ace-icon fa fa-newspaper-o"></i>
                        </div>

                        <div class="infobox-data">
                           <span class="infobox-data-number">{{ $product_news }}</span>
                           <div class="infobox-content">Productos de la semana pasada</div>
                        </div>
                     </div>

                     <div class="space-6"></div>

                  </div>
               </div><!-- /.widget-main -->
            </div><!-- /.widget-body -->
         </div><!-- /.widget-box -->

      </div>
      <div class="col-sm-6">
         <div class="widget-box transparent">
            <div class="widget-header widget-header-flat">
               <h4 class="widget-title lighter">
                  <i class="ace-icon fa fa-product-hunt"></i>
                  <b>Productos Populares:</b>
               </h4>

               <div class="widget-toolbar">
                  <a href="#" data-action="collapse">
                     <i class="ace-icon fa fa-chevron-up"></i>
                  </a>
               </div>
            </div>
            <div class="space-6"></div>
            <div class="widget-body" style="display: block;">
               <div class="widget-main no-padding">
                  <table class="table table-bordered table-striped">
                     <thead class="thin-border-bottom">
                     <tr>
                        <th>
                           <i class="ace-icon fa fa-caret-right blue"></i>nombre
                        </th>

                        <th>
                           <i class="ace-icon fa fa-caret-right blue"></i>precio
                        </th>

                        <th class="hidden-480">
                           <i class="ace-icon fa fa-caret-right blue"></i>estado
                        </th>
                     </tr>
                     </thead>

                     <tbody>
                     @forelse($popular_products as $product)
                        <tr>
                           <td>
                              <a href="{{ route('product.show',$product->product_id) }}">{{ $product->product_name }}</a>
                           </td>
                           <td>
                              @if($product->is_off == 1)
                                 <small>
                                    <s class="red">{{ $product->sale_price }}</s>
                                 </small>
                                 <b class="green">{{ $product->price }}</b>
                              @else
                                 <b class="gray">{{ $product->price }}</b>
                              @endif
                           </td>

                           <td class="hidden-480">
                              @if($product->status == 0 )
                                 <span class="label label-danger arrowed-right arrowed-in">¡Termino!</span>
                              @else
                                 <span class="label label-info arrowed-right arrowed-in">En venta</span>
                              @endif
                           </td>
                        </tr>
                     @empty
                        <tr>
                           <td colspan="3">No hay datos</td>
                        </tr>
                     @endforelse

                     </tbody>
                  </table>
               </div><!-- /.widget-main -->
            </div><!-- /.widget-body -->
         </div><!-- /.widget-box -->

      </div>
   </div>

@endsection