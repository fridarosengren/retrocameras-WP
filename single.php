<?php get_header(); ?>

<!-- News section -->
<div class="wrapper">
	<h2 class="news-page-heading">News</h2>

	<section id="news-content">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<article class="short-news">
			<?php $img_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'normal-news'); ?>
 				<img src="<?php echo $img_url[0];?>" alt=""/>
 			<div class="article-text">
				<h3><?php the_title(); ?></h3>

				<!-- Post time and category -->
				<span class="posted-txt">Posted: <?php the_time( 'Y-m-d' ); ?> | Category: <?php the_category(', '); ?></span>

				<!-- Short post -->
				<?php the_content(); ?>

				<!-- Back to news button -->
				<a href="../../../../category/news" class="post-previous"><i class='fas fa-angle-left'></i> Back to news</a>
			</div><!-- End article text -->
		</article>
		<?php endwhile; ?>
		<?php endif; ?>
	</section><!-- End news section -->
	
	<!-- Right news sidebar -->
	<div id="news-sidebar">
		<?php if ( is_active_sidebar( 'posts_right_1' ) ) : ?>
 			<?php dynamic_sidebar( 'posts_right_1' ); ?>
 		<?php endif; ?>
	</div><!-- End news sidebar -->
</div><!-- End wrapper -->


<?php get_footer(); ?>