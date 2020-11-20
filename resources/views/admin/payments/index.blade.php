@extends('layout.admin.index')
@section('title')
   Pagos
@endsection
@section('extra_css')
@endsection
@section('content')
   <table id="simple-table" class="table table-hover table-responsive table-bordered">
      <thead class="table-header">
      <tr class="info">
         <td class="center">ID</td>
         <td class="center">Usuario</td>
         <td class="center">Orden</td>
         <td class="center">Subtotal</td>
         <td class="center">Estado</td>
         <td class="center">Estado de pago</td>
         <td class="center">Fecha</td>
{{--         <td class="center">Operaciones</td>--}}
      </tr>
      </thead>
      <tbody>
      @forelse ($payments as $payment)

         <tr>
            <td class="center">{{ $payment->payment_id }}</td>
            <td class="center">
               @if ($payment->users)
                  <a href="{{ route('user.show',$payment->user_id) }}">{{ $payment->users->name }}</a>3
                  @else
                  <span class="label label-default">INVITADO</span>
               @endif
            </td>
            <td class="center">
               <a href="{{ route('order.show', $payment->order_id) }}">{{ $payment->order->track_code }}</a>
            </td>
            <td class="center">{{ $payment->sub_total }}</td>
            <td class="center">
               @if ($payment->status )
                  <span class="label label-success label-large">PAGADO</span>
               @else
                  <span class="label label-danger label-large">NO PAGADO</span>
               @endif

            </td>
            <td class="center">{{ $payment->payment_status }}</td>
            <td class="center">{{ $payment->created_at }}</td>

         </tr>


      @empty
         <tr>
            <td colspan="9">No hay datos.</td>
         </tr>
      @endforelse
      </tbody>

   </table>




@endsection
@section('extra_js')
@endsection