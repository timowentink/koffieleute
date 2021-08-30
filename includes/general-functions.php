<?php
/* General PHP functions */


//add widget
if ( function_exists('register_sidebar') ) {
   	register_sidebar(array('name' => 'Sidebar','before_widget' => '<div class="sidebar_item_wrap"><div class="sidebar_item">', 'after_widget' => '</div></div>', 'before_title' => '<div class="sidebar_item_title">', 'after_title' => '</div>') );
   	register_sidebar(array('name' => 'Footer Left','before_widget' => '<div class="column_wrap col col-2 " id="%1$s">', 'after_widget' => '</div>', 'before_title' => '', 'after_title' => '') );
    register_sidebar(array('name' => 'Footer Right','before_widget' => '<div class="column_wrap col-2" id="%1$s">', 'after_widget' => '</div>', 'before_title' => '<h3>', 'after_title' => '</h3>') );
   	register_sidebar(array('name' => 'Footer Bottom','before_widget' => '<div class="footer_bottom column_wrap width_full" id="%1$s">', 'after_widget' => '</div>', 'before_title' => '', 'after_title' => '') );
}

//word limiter function
function word_limiter($str, $n = 20, $end_char = '&#8230;') {
	if (strlen($str) < $n) {
		return $str;
	}

	$words = explode(' ', preg_replace("/\s+/", ' ', preg_replace("/(\r\n|\r|\n)/", " ", $str)));

	if (count($words) <= $n) {
		return $str;
	}

	$str = '';
	for ($i = 0; $i < $n; $i++) {
		$str .= $words[$i].' ';
	}

	return trim($str).$end_char;
}


function scn_setup() {

	add_theme_support('post-thumbnails');

	update_option('thumbnail_size_w', 700);
	update_option('thumbnail_size_h', 700);
	update_option('medium_size_w', 1220);
	update_option('medium_size_h', 1700);
	update_option('large_size_w', 3040);
	update_option('large_size_h', 1700);

	//add images sizes
	if ( function_exists( 'add_image_size' ) ) {
		//add_image_size( 'header-image', 1520, 850, true ); //cropped
		add_image_size( 'preview-image-large', 3040, 1700, true ); //cropped
    add_image_size( 'medium-height', 1500, 3040, false ); //cropped
	}

}
add_action('init', 'scn_setup');

/*  Add responsive container to embeds
/* ------------------------------------ */
function alx_embed_html( $html ) {
    return '<div class="video-container">' . $html . '</div>';
}

add_filter( 'embed_oembed_html', 'alx_embed_html', 10, 3 );
add_filter( 'video_embed_html', 'alx_embed_html' ); // Jetpack


// get page id by slug
function get_id_by_slug($page_slug) {
	$page = get_page_by_path($page_slug);
	if ($page) {
		return $page->ID;
	} else {
		return null;
	}
}

//add page excerpt
add_post_type_support( 'page', 'excerpt' );

?>
