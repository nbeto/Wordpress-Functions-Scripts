<?php

//
// Force WooCommerce to use old way to get images and fixes LazyLoad (works with "a3 Lazy Load")
//

add_filter( 'woocommerce_product_get_image', 'nb_woocommerce_product_get_image', 10, 4 );
function nb_woocommerce_product_get_image( $image, $this_product, $size, $attr ){
	if ( $this_product->get_image_id() ) {
		$image = get_the_post_thumbnail( $this_product->get_id(), $size, $attr );
	}
	return $image;
}

?>
