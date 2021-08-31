<?php get_header(); ?>

<?php if (have_posts()) :  ?>
	<?php while (have_posts()) : the_post(); 
	//get id
	$the_page_id = $post->ID;
	//get featured image data
	$large_imagedata = wp_get_attachment_image_src( get_post_thumbnail_id($the_page_id), 'header-image' );
	$large_image_url = $large_imagedata['0'];
	
	if(empty($large_image_url)) { $large_image_url = get_bloginfo('template_url') . "/images/default_header.png"; }
	
	//Add custom fields
	if(function_exists('get_field')) {
		$header_title = get_field('page_title');
		$header_title_color = get_field('page_title_color');
	}
	
	?>
	
	<div id="header_image" class="transition" style="background-image: url(<?php echo $large_image_url; ?>);">
		<div class="wrapper_relative">
			<div class="container col-6">
				<?php
				if(!empty($header_title)) {
					echo "<h1 class=\"header_title $header_title_color \">" . $header_title . "</h1>";
				} ?>
				
				<?php include('subsubmenu.php'); ?>
					
			</div> <!-- /container -->
		</div> <!-- / wrapper_relative -->
	</div> <!-- /header_image -->
	
	
	<section class="page-section">
		<div class="section_spacing padding_top_l padding_bottom_l">
			<div class="container">	
				<div class="col col-2-3">
					<div class="wrapper_relative">
					
						<div class="col_content">
							<?php the_content(); ?>
							<?php edit_post_link('Edit'); ?>
						</div>
						
					</div><!-- / wrapper_relative-->	
				</div> <!--/col -->
			
			<?php get_sidebar(); ?>
			
			</div> <!-- /container -->				
		</div> <!-- / section_spacing -->
	</section> <!--/ page_section -->

	
	<?php endwhile; ?>
<?php endif; ?>

<?php 
	//include featured pages
	include('loops/loop-pages-related.php');
	
	//include featured case
	include('loops/loop-featured-case.php');
	
	//include newsletters
	include('loops/loop-newsletter.php');
?>


<?php get_footer(); ?>