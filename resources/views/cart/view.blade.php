@foreach( $cart as $item )
  <p>{{ $item['name'] }} - {{ $item['price'] }} x {{ $item['quantity'] }}</p>
@endforeach