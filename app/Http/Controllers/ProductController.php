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
}


?>