<strong>Gracias {{ $data['name'] }}</strong>
<hr>
<div style="background-color: @if($data['status'] == 1) green @else red @endif ; text-align: center">
   <h2>@if($data['status'] == 1) Exito @else Error @endif</h2>
</div>
<h3>SU CÓDIGO DE SEGUIMIENTO DE PEDIDO ES: <span>{{ $data['track'] }}</span></h3>
<span><a href="{{route('home')}}">{{ env('APP_NAME') }}</a></span>
<p><img src="{{ $message->embed(asset('images/site_logo.png')) }}" alt="logo"></p>