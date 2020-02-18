<?php
/* 
Template Name: Home page 
*/

get_header();
?>

	<!-- What we offer section -->
 	<section id="services-container">
 		<!-- Center wrapper -->
 		<div class="wrapper">
 			<div id="we-offer-text">
 				<h2>What we offer</h2>

		 		<?php 
				if ( have_posts() ) {
					while ( have_posts() ) {
						the_post(); 
					
						the_content();
						//
					} // end while
				} // end if
				?>
 			</div><!-- End we offer text -->

	 		<div class="flex-container">
	 			<div class="flex-three-item">
	 				<a href="<?php echo get_term_link('digital-cameras', 'product_cat'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/cat-digital.jpg" alt="Camera with shop option Digital cameras"/></a>
	 			</div>
	 			<div class="flex-three-item">
	 				<a href="<?php echo get_term_link('film-cameras', 'product_cat'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/cat-film.jpg" alt="Camera with shop option Film cameras"/></a>
	 			</div>
	 			<div class="flex-three-item">
	 				<a href="<?php echo get_term_link('polaroids', 'product_cat'); ?>">
	 				<img src="<?php bloginfo('template_url'); ?>/images/cat-polaroid.jpg" alt="Camera with shop option polaroids"/></a>
	 			</div>
	 		</div>
 		</div><!-- End wrapper -->
 	</section>

 	<!-- full width img section -->
 	<section id="full-width-container">
 		<div id="over-img">
 			<?php if ( is_active_sidebar( 'home_mid_1' ) ) : ?>
	 			<?php dynamic_sidebar( 'home_mid_1' ); ?>
	 		<?php endif; ?>
 		</div>
 	</section>

 	<!-- News section -->
 	<section id="news-container">
 		<!-- Center wrapper -->
 		<div class="wrapper">
 			<h2>Latest news</h2>

 			<!-- Latest News posts -->
 			<?php $wp_query = new WP_Query(); $wp_query->query('category_name=News&posts_per_page=2');
 			while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
 			<article class="news-flex">
	 			<div class="flex-left">
	 				<?php $img_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'news-img'); ?>
	 				<img src="<?php echo $img_url[0];?>" alt=""/>
	 			</div>

 				<div class="flex-right">
 					<h3><?php the_title(); ?></h3>
 					<span class="posted-txt">Posted: <?php the_time( 'Y-m-d' ); ?> | Category: <?php the_category(', '); ?></span>

 					<?php the_excerpt(); ?>

 					<?php echo '<a class="read-more" href="' . get_permalink() . '">Read more <i class="fas fa-angle-right"></i></a>'; ?>
 				</div>
 			</article> <!-- End news-flex -->
 			<?php endwhile; ?>
 		</div><!-- End wrapper -->
 	</section>

<?php get_footer(); ?>



















