<?php
/* 
Template Name: Contact Page
*/

get_header();
?>

<!-- Contact section -->
<section id="contact">
	<div class="wrapper">
		<div id="contact-form">
			<h2>Contact us</h2>
			<?php if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();
					the_content();
				} // end while
			} // end if
			?>
		</div><!-- End contact form -->
		<div id="contact-info">
			<!-- Contact info widget area -->
			<?php if ( is_active_sidebar( 'contact_right_1' ) ) : ?>
	 			<?php dynamic_sidebar( 'contact_right_1' ); ?>
	 		<?php endif; ?>
		</div>
	</div><!-- End wrapper -->
</section><!-- End contact section -->

<!-- Google maps plugin -->
<div id="map-div">
	<?php gmwd_map( 1, 1); ?>
</div>

<?php get_footer(); ?>