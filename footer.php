 	<!-- Subscribe to newsletter -->
 	<div id="top-footer">
 		<div id="newsletter-container">
	 		<div id="newsletter-text">
				Subscribe to our newsletter
			</div>
 		<?php if ( is_active_sidebar( 'footer_newsletter_1' ) ) : ?>
	 		<?php dynamic_sidebar( 'footer_newsletter_1' ); ?>
	 	<?php endif; ?>
	 	</div><!-- End newsletter container --><br />
 	</div>
 	<footer>
 		<!-- Center wrapper -->
 		<div class="wrapper">
 			<div class="flex-container">

 				<div class="footer-flex">
 					<h3>Useful links</h3>
 					<nav id="footer-nav">
	 					<?php wp_nav_menu(array('theme_location' => 'footer-nav')); ?>
	 				</nav>
 				</div>

 				<div class="footer-flex">
 					<h3>Contact us</h3>
 				
 					<?php if ( is_active_sidebar( 'footer_contact_1' ) ) : ?>
	 					<?php dynamic_sidebar( 'footer_contact_1' ); ?>
	 				<?php endif; ?>

 				</div>

 				<div class="footer-flex">
 					<h3>Follow us</h3>
 					<?php if ( is_active_sidebar( 'footer_social_1' ) ) : ?>
	 					<?php dynamic_sidebar( 'footer_social_1' ); ?>
	 				<?php endif; ?>
 				</div>
 			</div>
 		</div><!-- End wrapper -->

 		<!-- Copyright info -->
 		<div id="copyright">
 			<p>&copy; Copyright 2018 | Retro cameras | Site created by Frida Rosengren | Powered by WordPress</p>
 		</div>
 	</footer>

<?php wp_footer(); ?>
</body>
</html>