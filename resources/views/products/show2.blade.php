@extends( 'layouts.app' )
@section( 'content' )
  <h1>{{ $product->name }}</h1>
  <p>{{ $product->description }}</p>
  <p>Price: ${{ $product->price }}</p>
  <p>Stock: {{ $product->stock }}</p>
  <img src="{{ asset( 'storage/' . $product->image ) }}" alt="{{ $product->name }}">
@endsection