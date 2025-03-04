<?php

if( !function_exists( 'dwc' ) ){
  function dwc( $imageName ): string {
    return asset( 'https://www.dwc-k.com/images/stories/virtuemart/product/resized/' . $imageName );
  }
}
