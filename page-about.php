<?php
/* 
Template Name: About Page 
*/

get_header();
?>

<!-- Center wrapper -->
<div class="wrapper">
	<section id="about-us">
		<h2>About us</h2>

		<div class="flex-container">

			<!-- Main about content -->
			<div class="flex-item">

				<?php if ( have_posts() ) {
					while ( have_posts() ) {
						the_post();
						the_content();
					} // end while
				} // end if
				?>
			</div>

			<!-- Featured image -->
			<div class="flex-item">
				<?php $img_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'side-img'); ?>
	 				<img src="<?php echo $img_url[0];?>" alt=""/>
			</div>

		</div><!-- End flex container -->
	</section><!-- End about us -->
	</div><!-- End wrapper -->

	<div class="full-width-bg">
		<!-- Center wrapper -->
		<div class="wrapper">
			<!-- Company portraits -->
			<section id="company-portraits">
				<h2>Who we are</h2>
				<div class="flex-container">

					<div class="flex-item">
						<?php if ( is_active_sidebar( 'portrait_left_1' ) ) : ?>
	 					<?php dynamic_sidebar( 'portrait_left_1' ); ?>
	 					<?php endif; ?>
					</div>

					<div class="flex-item">
						<?php if ( is_active_sidebar( 'portrait_mid_1' ) ) : ?>
	 					<?php dynamic_sidebar( 'portrait_mid_1' ); ?>
	 					<?php endif; ?>
					</div>

					<div class="flex-item">
						<?php if ( is_active_sidebar( 'portrait_right_1' ) ) : ?>
	 					<?php dynamic_sidebar( 'portrait_right_1' ); ?>
	 					<?php endif; ?>
					</div>

				</div><!-- End flex container -->
			</section><!-- End company portraits -->
		</div><!-- End wrapper -->
	</div><!-- End full with bg -->

<?php get_footer(); ?>