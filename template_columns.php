<?php
/*
Template Name: Columns
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

					<div class="col col-12 column_wrapper">
						<h1>Basic Columns</h1>
					</div>


					<div class="col_wrap bg_light">
							<div class="col col-1 bg_yellow">col 1</div>
					</div>
					<div class="col col-11 bg_red">col 11</div>

					<div class="col_wrap bg_light">
							<div class="col col-2 bg_green">col 2</div>
					</div>
					<div class="col col-10 bg_blue">col 10</div>

					<div class="col_wrap bg_light">
							<div class="col col-3 bg_yellow">col 3</div>
					</div>
					<div class="col col-9 bg_red">col 9</div>


					<div class="col col-12 column_wrapper">
							<div class="col_wrap bg_light">
									<div class="col col-4 bg_green">col 4</div>
							</div>
							<div class="col col-8 bg_blue">col 8</div>
					</div> <!-- / column_wrapper -->

					<div class="col_wrap bg_light">
							<div class="col col-5 bg_yellow">col 5</div>
					</div>
					<div class="col col-7 bg_red">col 7</div>

					<div class="col_wrap bg_light">
						<div class="col col-6 bg_green">col 6</div>
					</div>
					<div class="col col-6 bg_blue">col 6</div>

					<div class="col_wrap bg_light">
						<div class="col col-7 bg_yellow">col 7</div>
					</div>
					<div class="col col-5 bg_red">col 5</div>

					<div class="col_wrap bg_light">
						<div class="col col-8 bg_green">col 8</div>
					</div>
					<div class="col col-4 bg_blue">col 4</div>

					<div class="col_wrap bg_light">
						<div class="col col-9 bg_yellow">col 9</div>
					</div>
					<div class="col col-3 bg_red">col 3</div>

					<div class="col_wrap bg_light">
						<div class="col col-10 bg_green">col 10</div>
					</div>
					<div class="col col-2 bg_blue">col 2</div>

					<div class="col_wrap bg_light">
						<div class="col col-11 bg_yellow">col 11</div>
					</div>
					<div class="col col-1 bg_red">col 1</div>

					<div class="col col-12 bg_green">col 12</div>

					<div class="space">&nbsp;</div>



					<div class="col col-12">
						<div class="col col-3 ">Tekst links (3 columns)</div>
						<div class="col col-6">
							<div class="wrapper_relative">
									6 columns
								<div class="col_content">

									<?php the_content(); ?>
									<?php edit_post_link('Edit'); ?>
								</div> <!-- / col_content -->

							</div><!-- / wrapper_relative-->
						</div> <!--/col -->
						<div class="col col-3"> 3 columns </div>
				</div> <!--/col 12 -->

			</div> <!-- /container -->

	</section> <!--/ page_section -->

	<?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>
