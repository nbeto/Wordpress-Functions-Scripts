<?php

//
// Adds "Down Payment" discount fee (80%) to the Cart Totals and Checkout Totals.
//
add_action( 'woocommerce_cart_calculate_fees', 'nb_add_discount_line' );
function nb_add_discount_line( $cart ) {
  $discount = $cart->subtotal * 0.8;
  $cart->add_fee( __( 'Down Payment (80%)', 'bw-madroadtrip' ) , -$discount );
}

?>
