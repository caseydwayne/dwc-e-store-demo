@props([ 'product', 'qty' ])

<!-- Product "list view" card for checkout page -->

<div class="bg-white shadow rounded-lg flex items-center gap-4 border-b p-2 pr-6 last:border-0" title="{{ $product->description }}">

    
    <div class="max-w-128">
        <img src="{{ asset('storage/dwc-logo-300-glow.png') }}" alt="Product Image" class="w-full h-48 object-cover rounded">
    </div>

    <div class="flex flex-col flex-1 justify-center text-right">

        <h4 class="text-xl font-semibold mt-4">{{ $product->name }}</h4>

        <p class="mt-2">Price per unit: ${{ number_format( $product->price, 2 ) }}</p>
        
        <p class="mt-2">Quantity: {{ $qty }}</p>    
    
        <form action="{{ route( 'cart.remove', $product->sku ) }}" method="POST">
            @csrf
            <button data-sku="{{ $product->sku }}" class="remove-from-cart mt-4 bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Remove</button>    
        </form>

    </div>

</div>