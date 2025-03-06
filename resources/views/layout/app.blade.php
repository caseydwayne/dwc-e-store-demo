<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield( 'title', "Dealers Warehouse | Consumer E-Store | Products" )</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    @vite( 'resources/css/app.css' )
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="storage/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">    
    <link rel="preload" href="storage/green-arrow-up.svg" as="image">
  </head>

  <body class="bg-gray-100 h-screen flex flex-col">

    <header class="bg-white shadow-md flex justify-between items-center">  
      <a href="{{ route( 'home.index' ) }}">
        <div class="flex items-center">
          <div class="w-32 mr-2">
            <img src="{{ asset('storage/dwc-logo-300-glow.png') }}" alt="logo" />
          </div>
          <h1 class="text-2xl font-bold" style="color: #d63f3f">E-Store</h1>
        </div>
      </a>
      <nav>
        <ul class="flex space-x-4">        
          <li><a href="{{ route( 'products.index' ) }}" class="text-gray-700 hover:text-red-500">Products</a></li>
          <li><a href="{{ route( 'cart.index' ) }}" class="text-gray-700 hover:text-red-500" class="view-cart">Cart (<span id="cart-count">0</span>)</a></li>        
        </ul>
      </nav>
    </header>
    
    <main class="container mx-auto py-10 flex flex-col flex-grow">
      @yield('content')
    </main>
    
    <footer class="bg-gray-800 text-white text-center p-4 mt-10">
      <p>DWC E-Store &copy; 2025. All Rights Reserved.</p>
    </footer>

    @vite( 'resources/js/app.js' )

  </body>

</html>
