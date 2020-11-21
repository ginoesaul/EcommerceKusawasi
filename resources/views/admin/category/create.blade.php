@extends('layout.admin.index' )
@section('title')
   Crear categoría
@stop
@section('extra_css')
@stop
@section('content')
   <form id="category_form" action="{{ route('category.store') }}" method="post">
      {{ csrf_field() }}
      <div class="form-group {{ $errors->has('category_name') ? 'has-error' : '' }}">
         <label class="bolder bigger-110" for="title">Nombre de la categoría</label>
         <input type="text" name="category_name" maxlength="21" id="title" placeholder="Nombre de la categoría"
                value="{{old('category_name')}}" required
                class="form-control">
         <span class="text-danger">{{ $errors->first('category_name') }}</span>
      </div>
      <div class="form-group {{ $errors->has('category_slug') ? 'has-error' : '' }}">
         <label class="bolder bigger-110" for="category_slug">Slug de la categoria</label>
         <input type="text" name="category_slug" maxlength="21" id="category_slug" placeholder="Slug de la categoria"
                value="{{old('category_slug')}}" required
                class="form-control">
         <span class="text-danger">{{ $errors->first('category_slug') }}</span>
      </div>
      <div class="form-group {{ $errors->has('parent_id') ? 'has-error' : '' }}">
         <label class="bolder bigger-110" for="Category">Padre de la categoria </label>
         <select name="parent_id" id="Category" class="form-control">
            @if(count($allCategories) == 0)
               <option disabled="">No hay categorías.</option>
            @else
               <option value="">Padre de la categoria</option>
               @foreach($allCategories as $Category)
                  <option value="{{ old('category_id',$Category->category_id) }}">
                     {{ !$Category->parent_id ? '--'.$Category->category_name : $Category->category_name }}
                  </option>
               @endforeach
            @endif
         </select>
         <span class="text-danger">{{ $errors->first('parent_id') }}</span>
      </div>

      <div class="form-group">
         <div class="btn-group btn-group-justified">
            <div class="btn-group">
               <button type="submit" class="btn btn-info ">GUARDAR</button>
            </div>
            <div class="btn-group">
               <a class="btn btn-danger" onclick="window.history.back()">VOLVER</a>
            </div>
         </div>
      </div>
   </form>

@endsection
@section('extra_js')
   @if(env('APP_AJAX'))
      <script>
          $(document).ready(function () {
              $("#category_form").submit(function (e) {
                  e.preventDefault();
                  data = {
                      category_name: $("#title").val(),
                      category_slug: $("#category_slug").val(),
                      parent_id: $("#Category").val(),
                  };
                  var result = upload_ajax("{{ route('category.store') }}", data)
                  if (result) {
                      return window.location.reload();
                  }
              });
          });
      </script>
   @endif
@stop
