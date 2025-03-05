@extends( 'layout.app' )
@section( 'content' )
  <h1>All Products</h1>
  <p>
    This is a <em>code</em> demo. 
    In production, I would want better UI/UX along with <span class="line-through">images</span> and much more.
  </p>
  <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6 mt-6">
    @foreach( $products as $product )
      <x-product-card-view :product="$product" />
    @endforeach
  </div>
  {{ $products->links() }}
@endsection