<?php
/* Woocommerce content */

 get_header(); ?>

 	<!-- Center wrapper -->
	<div class="wrapper">
		<div id="left-content">
			<?php woocommerce_content(); ?>
		</div>
	
		<div id="right-sidebar">
			<!-- Sidebar widget area -->
	 			<!-- Search widget area -->
	 				<?php if ( is_active_sidebar( 'footer_news_1' ) ) : ?>
	 		<?php dynamic_sidebar( 'footer_news_1' ); ?>
	 	<?php endif; ?>
	 		
		</div>
	</div><!-- End wrapper -->

<?php get_footer(); ?>