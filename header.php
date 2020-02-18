<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Retro Cameras</title>

    <!-- Font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <?php wp_head(); ?>
</head>
<body>
 	<header>
 		<div id="top-header">
 			<!-- Center wrapper -->
 			<div class="wrapper">
	 			<div id="logo">
	 				<!-- Company logo -->
	 				<?php if ( function_exists( 'the_custom_logo' ) ) {
	 					the_custom_logo();
	 				} ?>
	 			</div>
 			</div><!-- End wrapper -->
 		</div>
 		<div id="bottom-header">
 			<!-- Center wrapper -->
 			<div class="wrapper">
	 			<nav id="main-nav">
	 				<?php wp_nav_menu(array('theme_location' => 'main-nav')); ?>	
	 			</nav>

			 	<!-- Burger menu for smaller screens, hidden on desktop -->
		        <label for="burger-show" id="burger-icon">
		        <i class="fas fa-bars"></i> 
		        </label>
		        <input type="checkbox" id="burger-show" />

		        <div id="burger-container">
		        <nav id="burger-nav">
		            <?php wp_nav_menu(array('theme_location' => 'main-nav')); ?>
		        </nav>
		        </div><!-- End burger-container -->

	 			<div id="cart-container">
	 				<a href="<?php bloginfo('template_url'); ?>/basket"> Cart (<div class="header-cart-count"><?php echo WC()->cart->get_cart_contents_count(); ?></div>)
	 				<i class="fas fa-shopping-cart"></i></a>
	 			</div>
 			</div><!-- End wrapper -->
 		</div>
 	</header>

 	<!-- Custom header -->
 	<div class="header-img">
 		<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
 	</div>


 	

 	