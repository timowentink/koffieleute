<?php get_header(); ?>

<?php if (have_posts()) :  ?>
	<?php while (have_posts()) : the_post();
	//get id
	$the_page_id = $post->ID;

	// include page header loop
	include('loops/loop-page-header.php');

	//get ACF field values
	if(function_exists('get_field')){
		//header title 
		$header_title = get_field('header_title');
	}

	?>

	<section class="page_section">

			<div class="container">

				<div class="col_wrap">
					<div class="col col-3">&nbsp;</div>
				</div>

				<div class="col col-6">
					<div class="wrapper_relative">

						<div class="col_content">

							<h1 class="header_title"><?php the_title(); ?></h1>

							<?php the_content(); ?>
							<?php edit_post_link('Edit'); ?>
						</div>

					</div><!-- / wrapper_relative-->
				</div> <!--/col -->

			<div class="col col-3">&nbsp;</div>

			</div> <!-- /container -->

	</section> <!--/ page_section -->

	<?php endwhile; ?>
<?php endif; ?>

<?php
	//include page content
	include('loops/loop-page-content.php');

	//include featured pages
	include('loops/loop-pages-featured.php');

	//include newsletters
	include('loops/loop-newsletter.php');
?>

<?php get_footer(); ?>
