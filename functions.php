<?php

require_once get_template_directory() . '/inc/enqueue.php';
require_once get_template_directory() . '/inc/config.php';
require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
if ( class_exists( 'woocommerce' ) ) {
	require_once get_template_directory() . '/inc/woocommerce_mods.php';
}
