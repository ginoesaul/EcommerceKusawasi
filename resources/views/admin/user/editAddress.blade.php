@extends('layout.admin.index')
@section('title')
   Editar dirección
@endsection
@section('extra_css')
@endsection
@section('content')
   <form id="user_address" method="post" action="{{ route('admin.address.update',$user->user_id) }}">
      @csrf
      @method('put')
      <div class="setup-content" id="step-2">
         <div class="row">
            <div class="col-sm-6">
               <div class="form-group required">
                  <label for="name" class=" control-label">Primer nombre: <span>*</span></label>
                  <input type="text" value="{{  $address->name }}" name="name" class="form-control" id="name" required>
               </div>
               <div class="form-group required">
                  <label for="number" class="control-label">Cantidad: <span>*</span></label>
                  <input type="number" value="{{  $address->number  }}" name="number" class="form-control" id="number" required>
               </div>
               <div class="form-group required">
                  <label for="area" class=" control-label">Distrito: </label>
                  <input type="text" name="area"  value="{{$address->area }}" class="form-control" id="area">
               </div>
               <div class="form-group required">
                  <label for="city" class=" control-label">Ciudad: <span>*</span></label>
                  <input type="text" name="city" value="{{  $address->city  }}" class="form-control" id="city" required>
               </div>
               <div class="form-group required">
                  <label for="postal_code" class=" control-label">Código Postal: <span>*</span></label>
                  <input type="text" class="form-control" value="{{  $address->postal_code }}" name="postal_code" id="postal_code" required>
               </div>
            </div>
            <div class="col-sm-6">
               <div class="form-group required">
                  <label for="surname" class=" control-label">Apellido: <span>*</span></label>
                  <div class="">
                     <input type="text" name="surname" value="{{ $address->surname }}" class="form-control" id="surname" required>
                  </div>
               </div>
               <div class="form-group required">
                  <label for="street" class=" control-label">Calle: <span>*</span></label>
                  <input type="text" name="street" value="{{  $address->street  }}" class="form-control" id="street">
               </div>
               <div class="form-group required">
                  <label for="avenue" class=" control-label">Avenida:</label>
                  <input type="text" name="avenue" value="{{  $address->avenue  }}" class="form-control" id="avenue">
               </div>
               <div class="form-group required">
                  <label for="state" class=" control-label">Provincia: <span>*</span></label>
                  <input type="text" name="state" value="{{  $address->state  }}" class="form-control" id="state" required>
               </div>
               <div class="form-group required">
                  <label for="phone_number" class=" control-label">Celular: <span>*</span>
                     <small>Ejemplo +905534676564</small></label>
                  <input type="text" name="phone_number" value="{{  $address->phone_number  }}" class="form-control" id="phone_number" required>
               </div>


            </div>
            <div class="form-group">
               <div class="btn-group btn-group-justified">
                  <div class="btn-group">
                     <input type="submit" class="btn btn-info " value="GUARDAR">
                  </div>
                  <div class="btn-group">
                     <a class="btn btn-danger" onclick="history.back()">VOLVER</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </form>




@endsection
@section('extra_js')
@endsection