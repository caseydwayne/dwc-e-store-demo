@extends('layout.app')

@section('content')

<div class="landing-page">

    <!-- <h1>Precision Engineered Solutions</h1> -->

    <p>
        Welcome to the Dealers Warehouse Company consumer direct store. 
        <!-- Discover our range of high-quality products designed with precision and reliability.  -->
        <!-- We are committed to providing our customers with innovative solutions that meet the highest standards of performance. -->
    </p>

    <p>
        <!-- Explore our categories and find the perfect product for your needs. We are dedicated to excellence and customer satisfaction. -->
    </p>

    <h2 class="mt-6">Featured Products</h2>

    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6 my-6">
        @foreach( $featuredProducts as $product )                  
            <x-product-item :product="$product" />
        @endforeach
    </div>
    
    <a href="{{ route('products.index') }}">View All Products</a>

</div>

@endsection