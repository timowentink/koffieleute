</div><!-- / wrap -->


<section class="page-section color_white">

<div class="width_full alignleft bg_dark">
	<div class="container">

			<div class="footer_wrap col-12">


					<div class="col_wrap">
						<div class="col col-3 footer_content_left">
								<div class="footer_content width_full">
								<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Left')) { } ?>
								</div>
						</div>
					</div>

					<div class="col col-9 footer_content_right">
							<div class="footer_content width_full">
							<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Right')) { } ?>
						  </div>
					</div>

			</div> <!-- / footer_wrap -->

			<div class="footer_bottom col-12 padding_top padding_bottom">
					<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Bottom')) { } ?>
					&copy; <?php echo date('Y'); ?> All rights reserved. Design & development by <a href="http://www.copilots.nl" target="_blank">Copilots</a>.
					<div class="space">&nbsp;</div>
			</div> <!-- / footer_bottom -->

	</div> <!-- /container -->
</div> <!-- width_full -->
</section>

</div> <!-- /main_wrap -->

<?php wp_footer(); ?>

</body>
</html>
