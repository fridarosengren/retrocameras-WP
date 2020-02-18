<?php get_header(); ?>

<!-- News section -->
<div class="wrapper">
	<h2 class="news-page-heading">News</h2>

	<section id="news-content">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<article class="short-news">
			<?php $img_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'news-img'); ?>
 				<img src="<?php echo $img_url[0];?>" alt=""/>
 			<div class="article-text">
				<h3><?php the_title(); ?></h3>

				<!-- Post time and category -->
				<span class="posted-txt">Posted: <?php the_time( 'Y-m-d' ); ?> | Category: <?php the_category(', '); ?></span>

				<!-- Short post -->
				<?php the_excerpt(); ?>

				<!-- Read more link -->
				<?php echo '<a class="read-more" href="' . get_permalink() . '">Read more <i class="fas fa-angle-right"></i></a>'; ?>
			</div><!-- End article text -->

		</article>
		<?php endwhile; ?>
		<?php endif; ?>

		<!-- Link to next and previous page -->
		<?php posts_nav_link('&nbsp; | &nbsp;','Previous page','Next page'); ?>

	</section><!-- End news section -->
	
	<!-- Right news sidebar -->
	<div id="news-sidebar">
		<?php if ( is_active_sidebar( 'posts_right_1' ) ) : ?>
 			<?php dynamic_sidebar( 'posts_right_1' ); ?>
 		<?php endif; ?>
	</div><!-- End news sidebar -->
</div><!-- End wrapper -->


<?php get_footer(); ?>



