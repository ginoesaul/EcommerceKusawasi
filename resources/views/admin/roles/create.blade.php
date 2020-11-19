@extends('layout.admin.index')
@section('title')
   Añadir un nuevo Rol
@endsection
@section('extra_css')
@endsection
@section('content')

   <div class="row">
      <div class="col-lg-12 margin-tb">
         <div class="pull-left">
            <h2>Crear un nuevo rol</h2>
         </div>
      </div>
   </div>

   <form id="role_create" action="{{ route('roles.store') }}" method="post">
      @csrf
      <div class="row">
         <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
               <label for="name"><strong>Nombre:</strong></label>
               <input type="text" value="{{ old('name') }}" id="name" name="name" placeholder="nombre"
                      class="form-control">
            </div>
         </div>
         <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
               <label for="description"><strong>Descripción:</strong></label>
               <input type="text" value="{{ old('description') }}" id="description" name="description"
                      placeholder="descripción" class="form-control">
            </div>
         </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
               <strong>Permisión:</strong>
               <br/>
               @foreach($permission as $value)
                  <label>
                     <input type="checkbox" class="checkbox" name="permission[]" value="{{$value->id}}">
                     {{ $value->name }}</label>
                  <br/>
               @endforeach
            </div>
         </div>
         <div class="form-group">
            <div class="btn-group btn-group-justified">
               <div class="btn-group">
                  <button type="submit" class="btn btn-info ">GUARDAR</button>
               </div>
               <div class="btn-group">
                  <a class="btn btn-danger" onclick="history.back()">VOLVER</a>
               </div>
            </div>
         </div>

      </div>
   </form>






@endsection
@section('extra_js')
   @if (env('APP_AJAX'))
      <script type="text/javascript">
          $(document).ready(function () {
              $('#role_create').submit(function (e) {
                  e.preventDefault();
                  var total = [],
                      obj = $(this);
                  $('.checkbox').each(function () {
                      if ($(this).prop("checked")) {
                          total.push($(this).val());
                      }
                  });
                  var data = {
                      name: $('#name').val(),
                      description: $('#description').val(),
                      permission: total,
                  };
                  if (upload_ajax("{{ route('roles.store')  }}", data, null, null, true)) {
                      obj[0].reset();
                  }
              });
          });
      </script>
   @endif
@endsection