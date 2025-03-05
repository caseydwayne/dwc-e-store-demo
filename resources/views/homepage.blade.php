@extends('layout.app')

@section('content')

<div class="landing-page">

    <p>
        Welcome to Dealers Warehouse Company's consumer direct store. 
    </p>

    <h2 class="mt-6">Featured Products</h2>

    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6 my-6">
        @foreach( $featuredProducts as $product )                  
            <x-product-card-view :product="$product" />
        @endforeach
    </div>
    
    <a href="{{ route('products.index') }}">View All Products</a>

</div>

@endsection