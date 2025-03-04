<?php 

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller; 

class ProductController extends Controller {
  public function index(){
    $products = Product::paginate( 10 );
    return view( 'products.index', compact( 'products' ) );
  }

  public function show( Product $product ){
    return view( 'products.show', compact( 'product' ) );
  }

  public function getProductBySku($sku)
    {
        // Retrieve the product by SKU
        $product = Product::where('sku', $sku)->first();

        // Check if product was found
        if ($product) {
            return response()->json([
                'success' => true,
                'product' => $product
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Product not found'
            ], 404);
        }
    }
    
}


?>