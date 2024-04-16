<?php

/**
 * Hide WooCommerce products which have no image
 */
function woocommerce_product_query( $q ) {
	 
	 if (! is_admin()  && in_array ( $q->get('post_type'), array('product'))) {
   		 $q->set( 'meta_key', '_thumbnail_id' );
	 }
}
add_action( 'woocommerce_product_query', 'woocommerce_product_query' );
add_action( 'pre_get_posts', 'woocommerce_product_query' );
