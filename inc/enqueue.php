<?php

function bestheme_scripts()
{
	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/inc/bootstrap.min.js', array('jquery'), '4.4.1', true);
	wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/inc/bootstrap.min.css', array(), '4.4.1', 'all');
	wp_enqueue_style('bestheme-style', get_template_directory_uri() . '/static/main.css', array(), filemtime(get_template_directory() . '/static/main.css'), 'all');
	wp_enqueue_script('bestheme-style', get_template_directory_uri() . '/static/main.js', array(), filemtime(get_template_directory() . '/static/main.js'), 'all');
	wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap|https://fonts.googleapis.com/css2?family=Seaweed+Script&display=swap');
}
add_action('wp_enqueue_scripts', 'bestheme_scripts');
