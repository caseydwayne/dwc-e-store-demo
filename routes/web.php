<?php

use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ HomepageController::class, 'index' ] )->name( 'home' );

Route::get('/test', function () {
    return view( 'test' );
});


Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');


Route::get( '/cart', [ CartController::class, 'getCart' ] )->name( 'cart.index' );
Route::post( '/cart/add', [ CartController::class, 'addToCartSilent' ] )->name( 'cart.add' );
Route::post( '/cart/remove/{sku}', [ CartController::class, 'removeFromCart' ] )->name( 'cart.remove' );
Route::get( '/cart/view', [ CartController::class, 'getCart' ] )->name( 'cart.view' );
Route::get( '/cart/clear', [ CartController::class, 'clearCart' ] )->name( 'cart.clear' );
Route::get( '/cart/item-count', [ CartController::class, 'getCartItemCountSilent' ] )->name( 'cart.itemCount' );


Route::get('/checkout', function () {
    return view( 'checkout.index' );
})->name( 'checkout.index' );