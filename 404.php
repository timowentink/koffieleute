<?php get_header(); ?>

	<?php
	$large_image_url = get_bloginfo('template_url'). "/images/default_header.jpg";
	?>
		

	<div id="header_image" style="background-image: url(<?php echo $large_image_url; ?>);" />
		<div class="wrapper_relative">
			<div class="header_image_overlay">
				
			</div>
		</div>
	</div>

	<div class="post_content_wrap">
	<div class="post_content">
				
			
				<div class="entry_content_wrap">
					<div class="post">          
						<h1 class="page_title">Error - 404</h1>
						<p>&nbsp;</p>
						
						<p>Deze pagina bestaat niet. <p>
						
						<p>
						Probeer eens een andere pagina of ga terug naar de <a href="<?php bloginfo('url'); ?>">homepage</a>.</p>
					</div>
				</div>
	
	</div><!-- /post_content -->
	</div><!-- /post_content_wrap -->

<?php get_footer(); ?>                                                            
