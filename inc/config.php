<?php

function bestheme_config() {
	register_nav_menus(
		array(
			'bestheme_main_menu'   => 'Bestheme Main Menu',
			'bestheme_footer_menu' => 'Bestheme Footer Menu',
		)
	);

	add_theme_support(
		'woocommerce',
		array(
			'thumbnail_image_width' => 255,
			'single_image_width'    => 255,
			'product_grid'          => array(
				'default_rows'    => 2,
				'min_rows'        => 2,
				'max_rows'        => 2,
				'default_columns' => 3,
				'min_columns'     => 3,
				'max_columns'     => 3,
			),
		)
	);
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'bestheme_config', 0 );