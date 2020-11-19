@extends('layout.admin.index')
@section('title')
   Mostrar Roles
@endsection
@section('extra_css')
@endsection
@section('content')
   <div class="row">
      <div class="col-lg-12 margin-tb">
         <div class="pull-left">
            <h2> Mostrar Roles</h2>
         </div>
      </div>
   </div>

   <div class="row">
      <div class="col-xs-6 col-sm-6 col-md-6">
            <span class="bolder">Nombre:</span>
            {{ $role->name }}
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6">
            <span class="bolder">Descripción:</span>
            {{ $role->description }}

      </div>


      <div class="col-xs-12 col-sm-12 col-md-12">
         <div class="form-group">
            <strong>Permisos:</strong>
            @if(!empty($rolePermissions))
               @foreach($rolePermissions as $v)
                  <label class="label label-success">{{ $v->name }},</label>
               @endforeach
            @endif
         </div>
      </div>
   </div>

@endsection
@section('extra_js')
@endsection