<?php 

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller; 


class HomepageController extends Controller {
  public function index(){
    $featuredProducts = Product::where( 'featured', true )->take( 5 )->get();
    return view( 'home', compact( 'featuredProducts' ) );
  }
}
