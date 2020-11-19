@extends('layout.admin.index' )
@section('title')
   Lista de las marcas
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
         <th class="center">Slug</th>
         <th class="center">Foto</th>
         <th class="center">Descripción</th>
         <th class="center">Operaciones</th>
      </tr>
      </thead>
      <tbody>
      @forelse($admin_brands as $key=> $brand)
         <tr>
            <td class="center">
               <label class="pos-rel">
                  {{ $key+1 }}
                  <input type="checkbox" class="ace">
                  <span class="lbl"></span>
               </label>
            </td>
            <td class="">{{ $brand->brand_name }}</td>
            <td class="">{{ $brand->brand_slug }}</td>
            <td class="center">
               <img src="{{ $brand->src }}" alt="imagen de marca" class="img-responsive img-thumbnail" >
            </td>
            <td class="">{{ $brand->brand_description }}</td>
            <td class="center">
               <div class="btn-group">
                  <form>
                     @can('product-delete')
                        <button class="btn btn-xs btn-danger delete_me" data-id="{{ $brand->brand_id }}">
                           <i class="ace-icon fa fa-trash-o bigger-120"></i>
                        </button>
                     @endcan
                     @can('product-edit')
                        <a class="btn btn-warning btn-xs click_me" title="Edit"
                           href="{{ route('brand.edit',$brand->brand_id) }}" data-id="{{ $brand->brand_id }}">
                           <i class="ace-icon fa fa-pencil bigger-120"></i>
                        </a>
                     @endcan
                  </form>
               </div>
            </td>
         </tr>
      @empty
         <tr>
            <td colspan="3">No hay datos</td>
         </tr>
      @endforelse
      </tbody>
   </table>
   {{ $admin_brands->links() }}

@endsection
@section('extra_js')
   <script>
       $(document).ready(function () {
          @can('product-delete')
           //DELETE ROW
           deleteAjax("/admin/brand/", "delete_me");
          @endcan
       });
   </script>
@stop