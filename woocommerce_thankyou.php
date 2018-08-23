<?php

//
// Change booking confirmation request order status to "processing".
// Requered plugin "WooCommerce Bookings" (woocommerce.com/products/woocommerce-bookings).
//
add_action( 'woocommerce_thankyou', 'nb_woocommerce_auto_processing', 10, 1 );
function nb_woocommerce_auto_processing( $order_id ) {
  if ( ! $order_id ) return;
  $order = wc_get_order( $order_id );
  if ( 'wc-booking-gateway' == get_post_meta($order->id, '_payment_method', true) ){
  	$order->update_status( 'processing' );
  }
}

?>
