<?php
/* 
Template Name: Sell page 
*/

get_header();
?>

<section id="sell-section">
	<!-- Center wrapper -->
	<div class="wrapper">
		<div class="flex-container">
			<div class="flex-item">
				<h2>Sell your old camera</h2>
				<?php if ( have_posts() ) {
						while ( have_posts() ) {
							the_post();
							the_content();
						} // end while
					} // end if
				?>
			</div>
			<div class="flex-item">
				<!-- Sell featured image -->
				<?php $img_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'side-img'); ?>
	 				<img src="<?php echo $img_url[0];?>" alt=""/>
			</div>
		</div><!-- End flex container -->
	</div><!-- End wrapper -->
</section>

<div class="full-width-bg">
	<div class="wrapper">
		<section id="sell-instruct">
			<?php if ( is_active_sidebar( 'sell_bottom_1' ) ) : ?>
	 			<?php dynamic_sidebar( 'sell_bottom_1' ); ?>
	 		<?php endif; ?>
		</section>
	</div><!-- End wrapper -->
</div><!-- End full width bg -->




<?php get_footer(); ?>