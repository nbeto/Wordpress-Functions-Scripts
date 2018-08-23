<?php

/*
 * Change the "Free" price notice to "Price On Request".
 */
add_filter( 'woocommerce_get_price_html', 'nb_wc_get_price_html', 10, 2 );
function nb_wc_get_price_html( $price, $product ) {
	if ( $product->get_price() == 0 ) {
		if ( $product->is_on_sale() && $product->get_regular_price() ) {
			$regular_price = wc_get_price_to_display( $product, array( 'qty' => 1, 'price' => $product->get_regular_price() ) );
			$price = wc_format_price_range( $regular_price, __( 'Price On Request', 'woocommerce' ) );
		} else {
			$price = '<span class="amount">' . __( 'Price On Request', 'woocommerce' ) . '</span>';
		}
	}
	return $price;
}
