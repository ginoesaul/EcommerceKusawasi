<h4>Código de seguimiento : {{ $order['code']  }}</h4>
<p>Tus ordenes han sido <b>{{ $order['status'] }}</b> a tu dirección</p>

<strong>Gracias</strong>
<span><a href="{{route('home')}}">{{ env('APP_NAME') }}</a></span>
<p><img src="{{ $message->embed(asset('images/site_logo.png')) }}" alt="logo"></p>