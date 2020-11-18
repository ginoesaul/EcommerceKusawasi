@extends('layout.admin.index')
@section('title')
   LISTA DE USUARIOS
@endsection
@section('extra_css')
@endsection
@section('content')
   <table class="table table-bordered table-hover">
      <thead>
      <tr class="info">
         <th class="center">
            ID
         </th>
         <th class="center">Nombre</th>
         <th class="center">Correo</th>
         <th class="center">Rol</th>
         <th class="center">Fecha de creación</th>
         <th class="center">Operaciones</th>
      </tr>
      </thead>
      <tbody class="table_data">
         @include('admin.user._data')

      </tbody>
   </table>
{{ $users->links() }}



@endsection
@section('extra_js')
   <script type="text/javascript">
      $(document).ready(function () {
          deleteAjax('/admin/user/','delete_user','user')
      });
      @if(env('APP_AJAX'))
      jQuery(".edit_user").bind('click', function () {
          var route = $(this).attr('href');
          var pjax = new Pjax({
              selectors: ["title", "#extra_css", "#content-load", "#extra_js"]
          });
          pjax.loadUrl(route);
      });
      jQuery(".show_user").bind('click', function () {
          var route = $(this).attr('href');
          var pjax = new Pjax({
              selectors: ["title", "#extra_css", "#content-load", "#extra_js"]
          });
          pjax.loadUrl(route);
      });
      @endif

   </script>
@endsection