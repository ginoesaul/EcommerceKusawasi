@extends('layout.admin.index' )
@section('title')
   Lista de pedidos
@stop
@section('extra_css')
@stop
@section('content')


   <form method="post" action="{{ route('admin.search') }}" id="form-search"
   onsubmit="event.preventDefault()">
      @csrf
      <input type="hidden" value="orders" name="search_kind">
      <span class="input-icon">
         <input type="number" placeholder="Buscando ..." class="nav-search-input"
                autocomplete="off" name="search"/>
         <i class="ace-icon fa fa-search nav-search-icon"></i>
         <button type="submit" class="btn btn-sm">
            <span class="fa fa-search"></span>
         </button>
      </span>
      <span><i>Buscar por <b>CÓDIGO DE SEGUIMIENTO</b></i></span>
   </form>
   <div class="">
      <table id="simple-table" class="table table-bordered table-hover table-responsive">
         <thead>
         <tr class="info">
            <th class="center">
               ID
            </th>
            <th class="center">Estado de pedido</th>
            <th class="center">Código de seguimiento</th>
            <th class="center">Pagos</th>
            <th class="center">Dirección</th>
            <th class="center">Clientes</th>
            <th class="center">Nombre del cliente</th>
            <th class="center">Celular y correo electrónico del cliente</th>
            {{--         <th class="center">Nombre del empleado</th>--}}
            <th class="center">Precio total</th>
            <th class="center">Tarjeta de regalo</th>
            <th class="center">Fecha</th>
            <th class="center">Operaciones</th>
         </tr>
         </thead>
         <tbody class="table_data">
         @include('admin.orders._data')

         </tbody>
      </table>
   </div>


   {{ $orders->links() }}

@endsection
@section('extra_js')
   <script>
       $(document).ready(function () {
          @can('order-delete')
           <!-- DELETE -->
           deleteAjax("/admin/orders/", "delete_me", "Order");
          @endcan
           <!-- SENT -->
           $(".sent_me").click(function (e) {
               e.preventDefault();
               if (!confirm('¿QUIERES CAMBIAR EL ESTADO?')) {
                   return false
               }
               var obj = $(this); // first store $(this) in obj
               var status = $(this).data("status");
               var href = $(this).attr("href");
               $.ajaxSetup({
                   headers: {
                       'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                   }
               });
               $.ajax({
                   url: href,
                   method: "get",
                   success: function ($results) {
                       alert($results.message);
                       $(obj).closest("a").remove(); //delete icon
                       // var x = $(obj).parents('tr').load(location.href + obj); //delete icon

                       console.log($results);
                   },
                   error: function (xhr) {
                       alert(xhr.responseText.message);
                       console.log(xhr.responseText);
                   }
               });
           });
       });
   </script>
@stop