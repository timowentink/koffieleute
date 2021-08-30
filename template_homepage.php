<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>

<?php if (have_posts()) :  ?>
	<?php while (have_posts()) : the_post();
	//get id
	$the_page_id = $post->ID;

	// include page header loop
	include('loops/loop-page-header.php');
	?>

	<section class="page_section">

			<div class="container">
				<div class="col col-12 padding_top_l">
					<div class="col col-3">&nbsp; </div>
					<div class="col col-6">
						<div class="wrapper_relative">

							<div class="col_content">
								<?php the_content(); ?>
							</div>

						</div><!-- / wrapper_relative-->
					</div> <!--/col -->
					<div class="col col-3">&nbsp;</div>
				</div> <!--/col 12 -->
			</div> <!-- /container -->
			<?php edit_post_link('Edit'); ?>
				
	</section> <!--/ page_section -->

	<?php endwhile; ?>
<?php endif; ?>

<?php

	//include featured projects
	include('loops/loop-featured-projects.php');

	//include page content
	include('loops/loop-page-content.php');

	//include featured pages
	include('loops/loop-pages-featured.php');

	//include newsletters
	include('loops/loop-newsletter.php');
?>


<?php get_footer(); ?>
