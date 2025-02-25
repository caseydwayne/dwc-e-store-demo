@extends('layout.app')

@section('content')
<div class="landing-page">
    <h1>Precision Engineered Solutions</h1>
    <p>Welcome to the official DWC-K online store. Discover our range of high-quality products, designed with precision and reliability in mind. We are committed to providing our customers with innovative solutions that meet the highest standards of performance.</p>
    <p>Explore our categories and find the perfect product for your needs. We are dedicated to excellence and customer satisfaction.</p>
    <a href="{{ route('products.index') }}">View Products</a>
</div>
@endsection