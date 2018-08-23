<?php

//
// Remove "Company" field from woocommerce checkout.
//
add_filter( 'woocommerce_checkout_fields' , 'nb_unset_company_checkout_field' );
function nb_unset_company_checkout_field( $fields ) {
    unset($fields['billing']['billing_company']);
    return $fields;
}

?>
