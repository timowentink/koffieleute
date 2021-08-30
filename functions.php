<?php

// general-functions.php handles all sitewide general functions
require_once('includes/general-functions.php');

// custom-post-types.php handles all custom post types and taxonomy functions
require_once('includes/custom-post-types.php');

//load scripts
function load_scripts() {

	/*main template URL */
	$template_url = get_bloginfo('template_url');

	/* set locations */
	$jquery_location = $template_url . "/js/jquery-3.5.1.min.js";
	$jquery_easing_location = $template_url . "/js/jquery.easing.js";
	$jquery_slickslider_location = $template_url . "/js/slick/slick.min.js";
	$froogaloop_location = $template_url . "/js/froogaloop2.min.js";
	$functions_location = $template_url . "/js/functions.js";

	/* deregister standard jQuery library */
	wp_dequeue_script('jquery');
	wp_deregister_script('jquery');

	/* register JS */
	wp_register_script('jquery', $jquery_location , false,  '3.5.1'); // extra jquery library
	wp_register_script('jquery_easing', $jquery_easing_location , false); //jquery easing
	wp_register_script('jquery_slickslider', $jquery_slickslider_location, false, '1.8.0'); //slickslider plugin
	wp_register_script('froogaloop', $froogaloop_location, false); //froogaloop
	wp_register_script('extra_functions', $functions_location , false); // extra functions

	/* enqueue items */
	wp_enqueue_script('jquery');
	wp_enqueue_script('jquery_easing');
	wp_enqueue_script('jquery_slickslider');
	wp_enqueue_script('froogaloop');
	wp_enqueue_script('extra_functions');

}

add_action('wp_enqueue_scripts','load_scripts');


@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

?>
