@section('title', "Dealer's Warehouse Co. | Consumer eStore | Product: [product_name] }}")

@endsection
@section('content')

@endsection

<h2 class="text-3xl font-semibold text-center mb-8">Our Products</h2>
<div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
  <!-- Sample Product Card -->
  <div class="bg-white p-4 shadow rounded-lg">
    <img src="{{ dwc( 'Heritage Rustic Black4_256x285.jpg' ) }}" alt="Product Image" class="w-full h-48 object-cover rounded">
    <!-- <img src="{{ asset('storage/dwc-logo-300-glow.png') }}" alt="Product Image" class="w-full h-48 object-cover rounded"> -->
    <h3 class="text-xl font-semibold mt-4">Product Name</h3>
    <p class="text-gray-600">Short product description goes here.</p>
    <p class="text-red-600 font-bold mt-2">$99.99</p>
    <button class="mt-4 bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 w-full">Add to Cart</button>
  </div>
  <!-- Repeat for more products -->
</div>