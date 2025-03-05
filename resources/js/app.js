import './bootstrap';

// cart functionality 

function updateCartCount(){
  fetch( '/cart/item-count' )
    .then( response => response.json() )
    .then( data => {
      document.querySelector( '#cart-count' ).textContent = data.count;
    });
}

// Call it on page load
updateCartCount();

function addToCart( productSku ){
  fetch( '/cart/add', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
      'X-CSRF-TOKEN': document.querySelector( 'meta[name="csrf-token"]' ).content
    },
    body: JSON.stringify({ sku: productSku, quantity: 1 })
  })
  .then( response => response.json() )
  .then( data => console.log( data ) )  
  .then ( updateCartCount );
}

document.addEventListener( 'DOMContentLoaded', function(){  
  document.querySelectorAll( '.add-to-cart' ).forEach( button => {
    button.addEventListener( 'click', function( e ){
      let productId = this.getAttribute( 'data-sku' );
      addToCart( productId );
      greenArrowAnimation( e.target );
    });
  });
});


function clearCart(){
  fetch( '/cart/clear', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
      'X-CSRF-TOKEN': document.querySelector( 'meta[name="csrf-token"]' ).content
    },
    body: JSON.stringify({ sku: productSku, quantity: 1 })
  })
  .then( response => response.json() )
  .then( data => console.log( data ) )
  .then ( updateCartCount );
}

document.addEventListener( 'DOMContentLoaded', function(){  
  document.querySelectorAll( '.clear-cart' ).forEach( button => {
    button.addEventListener( 'click', clearCart );
  });
});


// pizzazz 

function greenArrowAnimation( addToCartButton ){

  const i = document.createElement('img');

  const a = addToCartButton.nextElementSibling; // targeting invisible anchor to prevent animation quirk
  
  if( !a ) return;

  i.src = '/storage/green-arrow-up.svg';
  a.style.position = 'relative';
  //i.style.transform = 'translateX( calc( 50% - 16px ) )';
  i.classList = 'absolute w-32 bottom-0 rise-and-fade';
  
  a.appendChild( i );

}

//greenArrowAnimation( document.querySelector( '.product' ) );