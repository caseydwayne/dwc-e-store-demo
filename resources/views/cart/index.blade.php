@extends( 'layout.app' )
@section( 'content' )

@php $isEmpty = count( $cart ) == 0; @endphp

<h1>
  Your Cart
  @if( $isEmpty ) Is Empty @endif
</h1>

@if( $isEmpty )

  <p>Add items from the store to load your cart.</p>
  <button class="mt-6 bg-gray-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
      <a href="{{ route( 'products.index' ) }}" class="text-white">Continue Shopping</a>
  </button>

@else
  
  
  <p>Please review your order to ensure accuracy.</p>

  @foreach( $cart as $item )

    @php $product = $products[ $item['id'] ] ?? null; @endphp
    
    {{-- @php echo "Product: " . ( $product ?? 'None' ); @endphp --}}

    @if( $product )
      <div class="my-4">
        <x-product-list-view :product="$product" :qty="$item['quantity']" />
      </div>
    @else
      <p>Product with SKU {{ $item['id'] }} not found.</p>
    @endif
  @endforeach

  <p class="text-right"><b>Subtotal:</b> ${{ number_format( $subtotal, 2 ) }}</p>

  <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6 mt-6">

    <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
      <a href="{{ route( 'cart.clear' ) }}" class="text-white">Clear Cart</a>
    </button>

    <button class="bg-gray-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
      <a href="{{ route( 'products.index' ) }}" class="text-white">Continue Shopping</a>
    </button>

    <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
      <a href="/checkout" class="text-white">Checkout</a>      
    </button>

  </div>

@endif


@endsection