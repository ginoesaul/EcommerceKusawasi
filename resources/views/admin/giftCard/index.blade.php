@extends('layout.admin.index' )
@section('title')
   Lista de Tarjeta de Regalo
@stop
@section('extra_css')
@stop
@section('content')

   <table id="simple-table" class="table  table-bordered table-hover">
      <thead>
      <tr>
         <th class="center">
            #
         </th>
         <th class="center">Nombre</th>
         <th class="center">Provincia</th>
         <th class="center">Cantidad</th>
         <th class="center">Código</th>
         <th class="center">Operaciones</th>
      </tr>
      </thead>
      <tbody>
      @forelse($gifts as $key=> $gift)
         <tr>
            <td class="center">
               <label class="pos-rel">
                  {{ $key+1 }}
                  <input type="checkbox" class="ace">
                  <span class="lbl"></span>
               </label>
            </td>
            <td class="">{{ $gift->gift_name }}</td>
            <td class="center">
               <div class="action-buttons">
                  @if($gift->status == 1)
                     <a href="#" class="green bigger-140 show-details-btn" title="Active" disabled="">
                        <i class="ace-icon fa fa-angle-double-up"></i>
                        <span class="sr-only">Activo</span>
                     </a>
                  @else
                     <a href="#" class="red bigger-140 show-details-btn" title="De Active" disabled="">
                        <i class="ace-icon fa fa-angle-double-down"></i>
                        <span class="sr-only">No activo/span>
                     </a>
                  @endif
               </div>
            </td>
            <td class="">{{ number_format($gift->gift_amount) }}</td>
            <td class="bolder">{{ $gift->gift_code }}</td>
            <td class="center">
               <div class="btn-group">
                  <form>
                     @can('gift-delete')
                        <button class="btn btn-xs btn-danger delete_me" data-id="{{ $gift->gift_id }}">
                           <i class="ace-icon fa fa-trash-o bigger-120"></i>
                        </button>
                     @endcan
                     @can('gift-edit')
                        <a class="btn btn-warning btn-xs click_me" title="Edit"
                           href="{{ route('giftCard.edit',$gift->gift_id) }}">
                           <i class="ace-icon fa fa-pencil bigger-120"></i>
                        </a>
                     @endcan
                  </form>
               </div>
            </td>
         </tr>
      @empty
         <tr>
            <td colspan="3">No hay datos.</td>
         </tr>
      @endforelse
      </tbody>
   </table>

   {{ $gifts->links() }}

@endsection
@section('extra_js')
   <script>
       $(document).ready(function () {
          @can('gift-delete')
          deleteAjax("/admin/giftCard/", "delete_me", "Gift Card");
          @endcan
       });
   </script>
@stop