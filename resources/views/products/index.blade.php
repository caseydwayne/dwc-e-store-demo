@extends( 'layout.app' )
@section( 'content' )
  <h1>All Products</h1>
  <p>
    Since this is a <em>code</em> demo I went light UI/UX. 
    I would want much more and better for production.
  </p>
  <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6 mt-6">
    @foreach( $products as $product )
      <x-product-card-view :product="$product" />
    @endforeach
  </div>
  {{ $products->links() }}
@endsection