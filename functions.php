<?php

function scripts() {

	wp_enqueue_style('main-style', get_template_directory_uri() . '/dist/css/app.css');

	wp_enqueue_script('sidr-scripts', '//cdn.jsdelivr.net/jquery.sidr/2.2.1/jquery.sidr.min.js', ['jquery'], 1.0, true);

	wp_enqueue_script('main-scripts', get_template_directory_uri() . '/dist/js/app.js', ['jquery'], filemtime(get_template_directory() . '/dist/js/app.js'), true);
}
add_action('wp_enqueue_scripts', 'scripts');