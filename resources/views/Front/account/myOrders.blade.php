@extends('layout.front.index')
@section('title')
   Mis pedidos
@endsection
@section('extra_css')
@endsection
@section('content')
   <center><h2>{{ isset($track) ? "Seguimiento del pedido" : 'Historial de pedidos ' }}</h2></center>
   <table class="table-order-history">
      <thead>
      <tr>
         <th>Código de seguimiento</th>
         <th>Fecha</th>
         <th>Estado de pago</th>
         <th>Estado de cumplimiento</th>
         <th>Tarjeta de regalo</th>
         <th>Precio total</th>
         <th>Mostrar órdenes</th>
      </tr>
      </thead>
      <tbody>
      @forelse($orders as $order)

         <tr>
            <td>
               <a href="#" data-cls="{{ "_details$order->order_id" }}"
                  onclick="event.preventDefault();show_order_details(this)">{{ $order->track_code }}</a>
            </td>
            <td>
               <div class="th-title visible-xs">Fecha</div>
               {{ $order->created_at }}
            </td>
            <td>
               <div class="th-title visible-xs">Estado de Pago</div>
               @if ($payment = $order->payment)
                  @if ($payment->status )
                     <span class="label label-success label-large">PAGADO</span>
                  @else
                     <span class="label label-danger label-large">NO PAGADO</span>
                  @endif

               @else
                  <span class="label badge-normal badge-danger">NO HAY PAGOS</span>
               @endif
            </td>
            <td class="status_">
               <div class="th-title visible-xs">Estado de cumplimiento</div>
               @switch($order->order_status)
                  @case(0)
                  <span class="label badge-normal ">INCOMPLETO</span>
                  @break
                  @case(1)
                  <span class="label label-default arrowed bolder ">Todavía no se ha enviado.</span>
                  @break
                  @case(2)
                  <span class="label label-warning bolder ">Ha sido enviado.</span>
                  @break
                  @case(3)
                  <span class="label label-success bolder ">Entregado</span>
                  @break
                  @case(5)
                  <span class="label bg-brown">Cancelado</span>
                  @break
               @endswitch
            </td>
            <td>
               @if($order->giftCard)
                  <a href="#gift{{$order->order_id}}" class="bolder" data-toggle="modal">
                     {{ $order->giftCard->gift_name }}
                  </a>
               @else
                  <span class="label badge-primary">NO HAY TARJETA DE REGALO</span>
               @endif
            </td>
            <td>
               <div class="th-title visible-xs">Total</div>
               <b>{{ number_format($order->total_price) }}</b>
            </td>
            <td>
               <!-- show order details -->
               <a href="{{ route('front.myOrders.show',$order->order_id) }}" class="btn btn-info btn-xs">
                  <i class="icon icon-open_in_browser"></i>
               </a>
               @auth()
                  @if ($order->order_status == 0)
                     <div class="_operations">
                        <a class="btn btn-xs bg-orange" title="edit address"
                           href="{{ route('front.order.address.edit',$order->order_id) }}">
                           <i class="icon icon-edit"></i>
                        </a>

                        <a class="btn btn-xs btn-red cancel_order" data-id="{{$order->order_id}}" title="Cancel Order"
                           onclick="return confirm('Are you sure to cancel this order?')"
                           href="{{ route('front.cancel.order') }}">
                           <i class="icon icon-delete"></i>
                        </a>
                     </div>
                  @endif
               @endauth

            </td>
         </tr>
         <tr>
            @auth()
               @if ($order->giftCard)
                  <div class="modal fade" id="{{ "gift$order->order_id" }}" tabindex="-1" role="dialog"
                       aria-label="myModalLabel" aria-hidden="true" style="display: none;">
                     <div class="modal-dialog modal-lg">
                        <div class="modal-content ">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span
                                         class="icon icon-clear"></span></button>
                           </div>
                           <form>
                              <div class="modal-body">
                                 <!--modal-quick-view-->
                                 <div class="modal-quick-view">
                                    <div class="row">
                                       <ul>
                                          <li><b>Gift Price :</b><span
                                                     class="red">{{ $order->giftCard->gift_amount }}</span></li>
                                          <li><b>Gift Code :</b><span
                                                     class="orange">{{ $order->giftCard->gift_code }}</span></li>
                                       </ul>
                                    </div>
                                 </div>
                                 <!--/modal-quick-view-->
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               @endif
            @endauth
         </tr>
      @empty
         <tr class="text-center">
            <td colspan="6" class="text-center center "><span class="font-weight-bolder">No se encontró nada.</span></td>
         </tr>
      @endforelse
      </tbody>
   </table>
   <hr id="here">
   <div id="show_details"></div>


@endsection
@section('extra_js')
   <script src="{{ asset('front-assets/js/checkOut.js') }}"></script>
   <script type="text/javascript">
       //show order details
       function show_order_details(e) {
           var cls = $(e).data('cls');
           var details = $('.' + cls).html();
           $('#show_details').empty().append(details);
           $('html, body').animate({
               scrollTop: $("#here").offset().top
           }, 1000);
       }

       //cancel order
       $(document).ready(function () {
           $('.cancel_order').on('click', function (e) {
               e.preventDefault();
               var data = {
                   _method: 'put',
                   order_id: $(this).data('id')
               };
               if (upload_ajax("{{ route('front.cancel.order') }}", data)) {
                   alert('your order has been canceled');
                   $(this).closest("tr").find('.status_').empty().append('<span class="label bg-brown">Cancelado</span>');
                   $(this).closest('div').remove();

               }
           })
       });
   </script>
@endsection