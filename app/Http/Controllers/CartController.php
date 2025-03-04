<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller; 
use App\Models\Product;
use App\Http\Controllers\ProductController;

class CartController extends ProductController {

    public function index(){
        $cart = session()->get( 'cart', [] );
        return view( 'cart.index', compact( 'cart' ) );
    }

    // @DEVNOTE: "silent" methods are for AJAX requests - decided not to code for demo but would use to display cart contents in a modal and allow updating/removing items without page reload

    public function addToCartSilent( Request $request )
    {
        $sku = $request->input( 'sku' );
        $quantity = $request->input( 'quantity', 1 ); // Default to 1 if not provided

        // Get current cart from session
        $cart = session()->get( 'cart', [] );

        if( isset( $cart[ $sku ] ) ){
        // If item exists, update quantity
        $cart[ $sku ][ 'quantity' ] += $quantity;
        } else {
        // Otherwise, add new item
        $cart[ $sku ] = [
            'id' => $sku,
            'quantity' => $quantity
        ];
        }

        // Save back to session
        session()->put( 'cart', $cart );

        return response()->json([ 'message' => 'Item added to cart', 'cart' => $cart ]);
    }

    public function removeFromCartSilent( Request $request )
    {
        $sku = $request->input( 'sku' );

        $cart = session()->get( 'cart', [] );

        if( isset( $cart[ $sku ] ) ){
        unset( $cart[ $sku ] );
        session()->put( 'cart', $cart );
        }

        return response()->json([ 'message' => 'Item removed from cart', 'cart' => $cart ]);
    }
    
    public function getCartSilent()
    {
        return response()->json([ 'cart' => session()->get( 'cart', [] ) ]);
    }

    public function clearCartSilent()
    {
        session()->forget( 'cart' );
        return response()->json([ 'message' => 'Cart cleared' ]);
    }

    public function getCartItemCountSilent()
    {
        $cart = session()->get( 'cart', [] );

        // Sum up quantities
        $totalItems = array_sum( array_column( $cart, 'quantity' ) );

        return response()->json([ 'count' => $totalItems ]);
    }

    // start of regular/refresh/redirect methods

    public function getCart()
    {
        // Retrieve cart from session
        $cart = session()->get( 'cart', [] );

        // Extract SKUs (IDs) from cart
        $skus = array_column( $cart, 'id' );

        // Fetch products from database
        $products = Product::whereIn( 'sku', $skus )->get()->keyBy( 'sku' );

         // Calculate subtotal
        $subtotal = 0;
        foreach( $cart as $item ) {
            $product = $products[ $item['id'] ] ?? null;
            if( $product ) {
            $subtotal += $product->price * $item['quantity'];
            }
        }
        
        return view( 'cart.index', compact( 'cart', 'products', 'subtotal' ) );
    }


    public function removeFromCart( $sku ) {
        $cart = session()->get( 'cart', [] );
        $cart = array_filter( $cart, fn( $item ) => $item['id'] !== $sku );
        session([ 'cart' => array_values( $cart ) ]);  
        return redirect()->route( 'cart.index' )->with( 'success', 'Product removed from cart' );
    }

    public function clearCart() {
        session()->forget( 'cart' );
        return redirect()->route( 'cart.index' )->with( 'success', 'Cart cleared' );
    }

}
