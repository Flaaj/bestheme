<?php

function bestheme_woocommerce_mods() {
	function bestheme_open_container_row() {
		if ( is_shop() ) {
			echo '<div class="container"><div class="row"><div class="col-lg-9 col-md-8 order-md-2">';
		} elseif ( is_product() ) {
				  echo '<div class="container"><div class="row"><div class="col">';
		}
	}
	add_action( 'woocommerce_before_main_content', 'bestheme_open_container_row', 5 );

	if ( is_shop() ) {
		function bestheme_before_sidebar() {
			echo '</div><div class="col-lg-3 col-md-4 order-md-1">';
		}
		add_action( 'woocommerce_sidebar', 'bestheme_before_sidebar', 5 );
	}

	function bestheme_after_sidebar() {
		 echo '</div></div></div>';
	}
	add_action( 'woocommerce_sidebar', 'bestheme_after_sidebar' );

	if ( is_product() ) {
		remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar' );
	}

	add_action( 'woocommerce_after_shop_loop_item_title', 'the_excerpt', 1 );
}

add_action( 'wp', 'bestheme_woocommerce_mods' );
