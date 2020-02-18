<?php 
/* 
Template Name: Info Page 
*/

get_header(); ?>

<div class="wrapper">

	<div class="page-page">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<h2><?php the_title(); ?></h2>

			<?php the_content(); ?>

			<?php endwhile; ?>
			<?php endif; ?>
			
	</div><!-- End page page -->
</div>

<?php get_footer(); ?>