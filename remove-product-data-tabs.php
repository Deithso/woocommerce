<?php 
// /*! -- */
// /*! @Created by :
// * 	Mustapha EJJANOUI - ej.mustapha@gmail.com
// **/

/**
 * Remove product data tabs (additional_information)
 */
add_filter( 'woocommerce_product_tabs', 'mejjanoui_wc_remove_product_tab', 98 );

function littleio_wc_remove_product_tab( $tabs ) {
    
    unset( $tabs['additional_information'] );  	

    return $tabs;
}
