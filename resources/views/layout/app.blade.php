<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield( 'title', "Dealer's Warehouse Co. | Consumer eStore | Products" )</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
  @vite( 'resources/css/app.css' )
</head>
<body class="bg-gray-100">
  <header class="bg-white shadow-md flex justify-between items-center">  
    <a href="/">
      <div class="flex items-center">
        <div class="w-32 mr-2">
          <img src="{{ asset('storage/dwc-logo-300-glow.png') }}" alt="logo" />
        </div>
        <h1 class="text-2xl font-bold" style="color: #d63f3f">E-Store</h1>
      </div>
    </a>
    <nav>
      <ul class="flex space-x-4">        
        <li><a href="/products" class="text-gray-700 hover:text-red-500">Products</a></li>
        <li><a href="/cart" class="text-gray-700 hover:text-red-500">Cart</a></li>
      </ul>
    </nav>
  </header>
  
  <main class="container mx-auto py-10">
    @yield('content')
  </main>
  
  <footer class="bg-gray-800 text-white text-center p-4 mt-10">
    <p>&copy; 2025 DWC eStore. All Rights Reserved.</p>
  </footer>
</body>
</html>
