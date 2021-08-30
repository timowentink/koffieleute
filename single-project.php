<?php get_header(); ?>

<?php if (have_posts()) :  ?>
	<?php while (have_posts()) : the_post();
	//get id
	$the_page_id = $post->ID;

	// include page header loop
	include('loops/loop-page-header.php');

	//get ACF field values
	if(function_exists('get_field')){
		//header title and text
		$header_text = get_field('header_text');
		$header_title = get_field('header_title');

	}

	?>

	<section class="page_section">

			<div class="container">

				<div class="col col-12">
					<div class="col col-2">&nbsp;</div>
					<div class="col col-7">
						<div class="col_content_inside">
							<div class="entry">
									<div class="col col-1">&nbsp;</div><div class="header_text"><?php if(!empty($header_text)) { echo $header_text; } ?></div>
								<h1 class="header_title"><?php if(!empty($header_title)) { echo $header_title; } else { the_title(); } ?></h1>
							</div>
						</div>
					</div> <!--/col -->
					<div class="col col-3">&nbsp;</div>
			</div> <!-- / col-12 -->

				<div class="col col-3">&nbsp; <?php edit_post_link('Edit'); ?> </div>
				<div class="col col-6">
					<div class="col_content_inside">
						<div class="entry">
						<?php the_content(); ?>

						</div>
					</div>
				</div> <!--/col -->

				<div class="col col-3">&nbsp;</div>


			</div> <!-- /container -->

	</section> <!--/ page_section -->

	<?php endwhile; ?>



<?php

	//include page content
	include('loops/loop-page-content.php');

	//include featured pages
	include('loops/loop-pages-related.php');

?>

<section class="page_section">

		<div class="container">
				<div class="space">&nbsp;</div>

			<div class="col col-12">
							<div class="col col-3">&nbsp;</div>
							<div class="col col-6">
								<?php
								/*
									$prev_post = get_previous_post();
								if($prev_post) {
								   $prev_title = strip_tags(str_replace('"', '', $prev_post->post_title));
								   echo "\t" . '<a rel="prev" href="' . get_permalink($prev_post->ID) . '" title="' . $prev_title. '" class="alignleft">&laquo; Previous post<br /><strong>'. $prev_title . '</strong></a>' . "\n";
								}

								$next_post = get_next_post();
								if($next_post) {
								   $next_title = strip_tags(str_replace('"', '', $next_post->post_title));
								   echo "\t" . '<a rel="next" href="' . get_permalink($next_post->ID) . '" title="' . $next_title. '" class="alignright">Next post &raquo;<br /><strong>'. $next_title . '</strong></a>' . "\n";
								}
								*/
								?>


<?php
								/**
 *  Infinite next and previous post looping in WordPress
 */
if( get_adjacent_post(false, '', true) ) {
	previous_post_link('%link', '&larr; vorige &nbsp;');
} else {
    $first = new WP_Query('post_type=project&posts_per_page=1&order=DESC'); $first->the_post();
    	echo '<a href="' . get_permalink() . '">&larr; vorige &nbsp;</a>';
  	wp_reset_query();
};

if( get_adjacent_post(false, '', false) ) {
	next_post_link('%link', '&nbsp; volgende &rarr;');
} else {
	$last = new WP_Query('post_type=project&posts_per_page=1&order=ASC'); $last->the_post();
    	echo '&nbsp; <a href="' . get_permalink() . '">&nbsp; volgende &rarr;</a>';
    wp_reset_query();
};

?>
							</div>
							<div class="col col-3">&nbsp;</div>
			</div> <!--/col -->
			<div class="space">&nbsp;</div>


		</div> <!-- /container -->
</section> <!--/ page_section -->




<?php endif; ?>

<?php
	//include newsletters
	include('loops/loop-newsletter.php');
	?>

<?php get_footer(); ?>
