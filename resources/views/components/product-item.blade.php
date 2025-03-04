@props([ 'product' ])

<!-- Product Card -->
<div class="bg-white p-4 shadow rounded-lg flex flex-col">

    {{-- <img src="{{ dwc( 'Heritage Rustic Black4_256x285.jpg' ) }}" alt="Product Image" class="w-full h-48 object-cover rounded"> --}}
    {{-- <img src="{{ asset( 'storage/' . $product->image ) ?? asset('storage/dwc-logo-300-glow.png') }}" alt="{{ $product->name }}"> --}}

    <img src="{{ asset('storage/dwc-logo-300-glow.png') }}" alt="Product Image" class="w-full h-48 object-cover rounded">

    <h4 class="text-xl font-semibold mt-4">{{ $product->name }}</h4>

    <p class="text-gray-600 flex-grow">{{ $product->description }}</p>

    <!-- Obviously I would improve UI/UX for out of stock: change Add To Cart to Notify Me or something -->

    <div class="text-center py-2">
        @if( $product->stock === 0 )
            <span style="color: red; font-weight: bold;">Out of Stock</span>
        @elseif( $product->stock < 10 )
            <span style="color: orange; font-weight: bold;">Low Stock</span>
        @endif
    </div>

    <p class="text-red-600 font-bold mt-2">${{ $product->price }}</p>
    
    <button data-sku="{{ $product->sku }}" class="add-to-cart mt-4 bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 w-full">Add to Cart</button>    

</div>