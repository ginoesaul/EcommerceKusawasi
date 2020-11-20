@extends('layout.admin.index' )
@section('title')
   Detalles de pedidos
@stop
@section('extra_css')
@stop
@section('content')

   <div class="col-sm-10 col-sm-offset-1 col-xs-12">
      <div class="widget-box transparent">
         <div class="widget-header widget-header-large">
            <h3 class="widget-title grey lighter">
               <i class="ace-icon fa fa-leaf green"></i>
               Factura del cliente.
            </h3>
            <span>
               @if($order->user_id)
                  User :<a href="{{ route('user.show',$order->users->user_id)}}">{{ $order->users->name}}</a>
               @else
                  <span class="label label-default">INVITADO</span>
               @endif
            </span>

            <div class="widget-toolbar no-border invoice-info">
               <span class="invoice-info-label">Código de seguimiento:</span>
               <span class="red bolder">#{{ $order->track_code }}</span>

               <br/>
               <span class="invoice-info-label">Fecha:</span>
               <span class="blue">{{ $order->created_at }}</span>
            </div>

            {{--<div class="widget-toolbar hidden-480">
               <a href="#">
                  <i class="ace-icon fa fa-print"></i>
               </a>
            </div>--}}
         </div>

         <div class="widget-body">
            <div class="widget-main padding-24">
               <div class="row">
                  <div class="col-sm-6">
                     <div class="row">
                        <div class="col-xs-11 label label-lg label-info arrowed-in arrowed-right">
                           <b>Información del cliente</b>
                        </div>
                     </div>

                     <div>
                        <ul class="list-unstyled spaced">
                           <li>
                              <i class="ace-icon fa fa-caret-right blue"></i>Nombre:
                              <span> {{ $order->client_name }}</span>
                           </li>

                           <li>
                              <i class="ace-icon fa fa-caret-right blue"></i>
                              Celular:
                              <b class="red">{{ $order->client_phone }}</b>
                           </li>
                           <li>
                              <i class="ace-icon fa fa-caret-right blue"></i>
                              Correo:
                              <b class="red">{{ $order->client_email }}</b>
                           </li>

                           <li class="divider"></li>

                           <li>
                              <i class="ace-icon fa fa-caret-right blue"></i>
                              <b>Tarjeta de regalo:</b>
                              @if ($gift = $order->giftCard)
                                 <span>{{ $gift->gift_name }}</span>
                                 <ul class="list-unstyled">
                                    <li><i class="ace-icon fa fa-caret-right blue"></i><b>Precio de regalo:</b><i class="ace-icon fa fa-caret-right green"></i>{{ $gift->gift_amount }}</li>
                                    <li><i class="ace-icon fa fa-caret-right blue"></i><b>Código de regalo:</b><i class="ace-icon fa fa-caret-right green"></i>{{ $gift->gift_code }}</li>
                                 </ul>
                                 @else
                                 <span class="label label-yellow label-large">No hay tarjeta de regalo.</span>
                              @endif

                           </li>
                        </ul>
                     </div>
                  </div><!-- /.col -->

                  <div class="col-sm-6">
                     <div class="row">
                        <div class="col-xs-11 label label-lg label-success arrowed-in arrowed-right">
                           <b>Dirección de la factura</b>
                        </div>
                     </div>
                     @if ($address = $order->address)
                        <div class="row">
                           <div class="col-sm-6">
                              <ul class="list-unstyled">
                                 <li><i class="ace-icon fa fa-caret-right blue"></i>NOMBRE :</li>
                                 <li><i class="ace-icon fa fa-caret-right blue"></i>APELLIDO :</li>
                                 <li><i class="ace-icon fa fa-caret-right blue"></i>PROVINCIA :</li>
                                 <li><i class="ace-icon fa fa-caret-right blue"></i>CIUDAD :</li>
                                 <li><i class="ace-icon fa fa-caret-right blue"></i>ÁREA :</li>
                                 <li><i class="ace-icon fa fa-caret-right blue"></i>AVENIDA :</li>
                                 <li><i class="ace-icon fa fa-caret-right blue"></i>CALLE :</li>
                                 <li><i class="ace-icon fa fa-caret-right blue"></i>NUM :</li>
                                 <li><i class="ace-icon fa fa-caret-right blue"></i>CELULAR :</li>
                                 <li><i class="ace-icon fa fa-caret-right blue"></i>CÓDIGO POSTAL :</li>
                              </ul>
                           </div>
                           <div class="col-sm-6">
                              <ul>
                                 <li class="bolder">{{ $address->name }} </li>
                                 <li class="bolder">{{ $address->surname }} </li>
                                 <li class="bolder">{{ $address->state }} </li>
                                 <li class="bolder">{{ $address->city }} </li>
                                 <li class="bolder">{{ $address->area }} </li>
                                 <li class="bolder">{{ $address->avenue }} </li>
                                 <li class="bolder">{{ $address->street }} </li>
                                 <li class="bolder">{{ $address->number }} </li>
                                 <li class="bolder">{{ $address->phone_number }} </li>
                                 <li class="bolder">{{ $address->postal_code }} </li>
                              </ul>
                           </div>
                        </div>
                     @endif

                  </div><!-- /.col -->
               </div><!-- /.row -->
               <!-- payment -->
               <div class="space"></div>
               @if ($payment = $order->payment)
                  <div class="panel @if ($payment->status) panel-success @else panel-danger @endif ">
                     <div class="panel-heading">
                        <div class="panel-title">
                           <span class="h4">Información de pago:</span>
                              @if ($payment->status )
                                 <span class="label label-success label-large">PAGADO</span>
                              @else
                                 <span class="label label-danger label-large">INVÁLIDO</span>
                              @endif
                        </div>
                     </div>
                     <div class="panel-body">
                        <ul class="list-unstyled">
                           <li><i class="ace-icon fa fa-caret-right blue"></i>Estado : <b>{{ $payment->payment_status }}</b></li>
                           <li><i class="ace-icon fa fa-caret-right blue"></i>Subtotal :<b>{{ $payment->sub_total }}</b></li>
                           <li><i class="ace-icon fa fa-caret-right blue"></i>Fecha :<b>{{ $payment->created_at }}</b></li>
                        </ul>
                     </div>
                  </div>
               @else
                  <div class="panel  panel-warning">
                     <div class="panel-heading">
                        <div class="panel-title">
                           <span class="h4">Información de pago:</span>
                           <span class="label label-danger label-large">NO PAGADO</span>
                        </div>
                     </div>
                     <div class="panel-body">
                        <ul class="list-unstyled">
                           <li><i class="ace-icon fa fa-caret-right blue"></i>Estado : <b>NO PAGADO</b></li>
                           <li><i class="ace-icon fa fa-caret-right blue"></i>Subtotal :<b>0</b></li>
                           <li><i class="ace-icon fa fa-caret-right blue"></i>Fecha :<b>---</b></li>
                        </ul>
                     </div>
                  </div>
               @endif


               <div>
                  <table id="simple-table" class="table table-bordered table-hover table-responsive">
                     <thead>
                     <tr class="info">
                        <th class="center">
                           #
                        </th>
                        <th class="center">Nombre del producto</th>
                        <th class="center">Tamaño</th>
                        <th class="center">Color</th>
                        <th class="center">Atributos</th>
                        <th class="center">Precio del producto</th>
                        <th class="center">Cantidad</th>
                        <th class="center">Fecha de creación</th>
                        <th class="center">Operaciones</th>
                     </tr>
                     </thead>
                     <tbody>
                     @forelse($order->detailsOrder as $key=> $d_order)
                        <tr>
                           <td class="center">{{$key++}}</td>
                           <td class="center">
                              <a class="click_me" href="{{ route('product.show',$d_order->product_id) }}">
                                 {{$d_order->products ? ($d_order->products->product_name) :'-'}}</a>
                           </td>
                           <td class="center">{{$d_order->size}}</td>
                           <td class="center">{{$d_order->color}}</td>
                           <td class="center">{{$d_order->attributes ?: ''}}</td>
                           <td class="center">{{$d_order->product_price}}</td>
                           <td class="center">{{$d_order->quantity}}</td>
                           <td class="center">{{$d_order->created_at}}</td>
                           <td class="center">

                              @can('order-delete')
                                 <div class="hidden-md hidden-lg">
                                    <div class="inline pos-rel">
                                       <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown"
                                               data-position="auto">
                                          <i class="ace-icon fa fa-cog icon-only bigger-110"></i>
                                       </button>

                                       <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                          <li>
                                             <a class="btn btn-xs btn-danger delete_me"
                                                data-id="{{ $d_order->details_order_id }}">
                                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                             </a>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>

                                 <div class="hidden-sm hidden-xs btn-group">
                                    <a class="btn btn-xs btn-danger delete_me"
                                       data-id="{{ $d_order->details_order_id }}">
                                       <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                    </a>
                                 </div>
                              @endcan


                           </td>
                        </tr>
                     @empty
                        <tr>
                           <td colspan="11">No hay datos.</td>
                        </tr>
                     @endforelse
                     </tbody>
                  </table>
               </div>

               <div class="hr hr8 hr-double hr-dotted"></div>

               <div class="row">
                  <div class="col-sm-5 pull-right">
                     <h4 class="pull-right">
                        Monto Total :
                        <span class="red">{{ $order->total_price }}</span>
                     </h4>
                  </div>
                  <div class="col-sm-7 pull-left"><b>Información adicional:</b>
                     <p class="">
                        {{ $order->details }}
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>





@endsection
@section('extra_js')
   @can('order-delete')
      <script>
          $(document).ready(function () {
              deleteAjax("/admin/orders/orders-status/", "delete_me", "Order Details");
          });
      </script>
   @endcan
@stop