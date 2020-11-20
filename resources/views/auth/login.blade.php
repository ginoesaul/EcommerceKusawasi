@extends('layout.front.index')
@section('title')
   Iniciar Sesión
@endsection
@section('extra_css')
@endsection
@section('content')
   <div class="row" style="margin-top: -3rem">
      <div class="col-sm-12 col-md-6 col-lg-6" style="margin-top: -3.5rem">
         <div class="login-form-box">
            <h2>REGISTRAR</h2>
            <div class="extra-indent-bottom">
               <p>Al crear una cuenta en nuestra tienda, podrá realizar el proceso de pago más rápido, 
               almacenar múltiples direcciones de envío, ver y rastrear sus pedidos en su cuenta y más.</p>
            </div>
            <div class="">
               <a href="{{ route('register') }}" class="btn btn-border color-default">CREAR UNA CUENTA</a>
            </div>
         </div>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-6" style="margin-top: -3.5rem">
         <div class="login-form-box">
            <h2>INICIAR SESIÓN</h2>
            <p>
               Si tiene una cuenta con nosotros, inicie sesión.
            </p>
            <form method="POST" action="{{ route('login') }}">
               @csrf
               <!-- SET THIS EMPTY INPUT FORM MORE SECURITY  -->
                  <input type="hidden" name="input" value="">
               <div class="form-group ">
                  <div class="input-group @error('email') has-error @enderror">
                     <span class="input-group-addon">
                        <span class="icon icon-person_outline"></span>
                     </span>
                     <input id="email" type="email" class="form-control " name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Correo" autofocus>
                     @error('email')
                     <span class="form-control-hint" role="alert">
                        <strong>{{ $message }}</strong</span>
                     @enderror
                  </div>
               </div>
               <div class="form-group @error('password') is-invalid @enderror">
                  <div class="input-group">
                     <span class="input-group-addon">
                        <span class="icon icon-lock_outline"></span>
                     </span>

                        <input id="password" type="password" class="form-control " name="password" placeholder="Contraseña" required autocomplete="current-password">

                        @error('password')
                        <span class="form-control-hint" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror

                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12 col-lg-3">
                     <button type="submit" class="btn" onclick="document.getElementById('form-returning').submit();">
                        INGRESAR
                     </button>
                     <div class="checkbox-group pull-right">
                        <input type="checkbox" name="remember" id="checkBox2" {{ old('remember') ? 'checked' : '' }}>
                     </div>
                  </div>
                  <div class="col-md-12 col-lg-9">
                     <ul class="additional-links">
                        <li>
                           @if (Route::has('password.request'))
                              <a class="btn btn-link" href="{{ route('password.request') }}">
                                 {{ __('¿Olvidó su contraseña?') }}
                              </a>
                           @endif
                        </li>

                     </ul>

                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
@endsection
@section('extra_js')
@endsection