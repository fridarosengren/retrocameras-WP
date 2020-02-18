<?php 
/* 
Template Name: Info Page with image
*/

get_header(); ?>

<div class="wrapper">
	<div id="info-container">
		<div class="flex-container">
			<!-- Info text -->
			<div class="flex-item">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>

				<?php endwhile; ?>
			<?php endif; ?>
			</div><!-- End flex item -->

			<!-- Featured image -->
			<div class="flex-item">
				<?php $img_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'side-img'); ?>
	 			<img src="<?php echo $img_url[0];?>" alt=""/>
			</div><!-- End flex item -->

		</div><!-- End flex container -->
	</div><!-- End info container -->
</div><!-- End wrapper -->

<?php get_footer(); ?>