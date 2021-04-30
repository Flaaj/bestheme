<?php

require get_template_directory() . '/inc/enqueue.php';
require get_template_directory() . '/inc/config.php';
if ( class_exists( 'woocommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce_mods.php';
}
