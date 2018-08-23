<?php

//
// Remove "Company" field from woocommerce checkout.
//
add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );
function custom_override_checkout_fields( $fields ) {
    unset($fields['billing']['billing_company']);
    unset($fields['billing']['billing_company']);
    return $fields;
}

?>
