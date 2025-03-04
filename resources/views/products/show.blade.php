@section( 'content' )
  <h1>{{ $product->name }}</h1>
  <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
  <!-- Sample Product Card -->
  <div class="bg-white p-4 shadow rounded-lg">
    {{-- <img src="{{ dwc( 'Heritage Rustic Black4_256x285.jpg' ) }}" alt="Product Image" class="w-full h-48 object-cover rounded"> --}}
    {{-- <img src="{{ asset( 'storage/' . $product->image ) ?? asset('storage/dwc-logo-300-glow.png') }}" alt="{{ $product->name }}"> --}}
    <img src="{{ asset('storage/dwc-logo-300-glow.png') }}" alt="Product Image" class="w-full h-48 object-cover rounded">
    <h3 class="text-xl font-semibold mt-4">Product Name</h3>
    <p class="text-gray-600">{{ $product->description }}</p>
    <p class="text-red-600 font-bold mt-2">${{ $product->price }}</p>
    <button class="mt-4 bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 w-full">Add to Cart</button>
    {{ $product->stock }}
  </div>
  <!-- Repeat for more products -->
</div>

  
@endsection