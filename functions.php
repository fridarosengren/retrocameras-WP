<?php

/* CSS, JS */
wp_enqueue_style( 'style', get_stylesheet_uri() );
wp_enqueue_script( 'script', get_template_directory_uri() . '/js/main.js');
/* Register menus */
function register_my_menus() {
	register_nav_menus(
		array(
			'main-nav' => __( 'Header Menu' )
		)
	);

	register_nav_menus(
		array(
			'footer-nav' => __( 'Footer Menu' )
		)
	);
}
add_action( 'init', 'register_my_menus' );

/* Custom logo support */
add_theme_support( 'custom-logo' ); 

/* Custom header support */
add_theme_support( 'custom-header' );

/* Change excerpt end */
function new_excerpt_more( $more ) {
	return ' &hellip;';
}
add_filter('excerpt_more', 'new_excerpt_more');

/* Previous and next links */
add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');

function posts_link_attributes(){
	return 'class="next-previous"';
}

/* Add widget areas */
function arphabet_widgets_init() {

	// Home page 
	register_sidebar( array(
		'name'          => 'Home over large image sidebar',
		'id'            => 'home_mid_1',
		'before_widget' => '',
		'after_widget'  => '',
	) );

	// Footer
	register_sidebar( array(
		'name'          => 'Footer newsletter sidebar',
		'id'            => 'footer_newsletter_1',
		'before_widget' => '',
		'after_widget'  => '',
	) );

	register_sidebar( array(
		'name'          => 'Footer social media sidebar',
		'id'            => 'footer_social_1',
		'before_widget' => '',
		'after_widget'  => '',
	) );

	register_sidebar( array(
		'name'          => 'Footer mid contact sidebar',
		'id'            => 'footer_contact_1',
		'before_widget' => '',
		'after_widget'  => '',
	) );

	// About company portraits 
	register_sidebar( array(
		'name'          => 'Portrait left sidebar',
		'id'            => 'portrait_left_1',
		'before_widget' => '',
		'after_widget'  => '',
	) );

	register_sidebar( array(
		'name'          => 'Portrait mid sidebar',
		'id'            => 'portrait_mid_1',
		'before_widget' => '',
		'after_widget'  => '',
	) );

	register_sidebar( array(
		'name'          => 'Portrait right sidebar',
		'id'            => 'portrait_right_1',
		'before_widget' => '',
		'after_widget'  => '',
	) );

	// Contact page widget areas
	register_sidebar( array(
		'name'          => 'Contact right sidebar',
		'id'            => 'contact_right_1',
		'before_widget' => '',
		'after_widget'  => '',
	) );

	// Post pages sidebar
	register_sidebar( array(
		'name'          => 'Posts right sidebar',
		'id'            => 'posts_right_1',
		'before_widget' => '',
		'after_widget'  => '',
	) );

	// Sell page
	register_sidebar( array(
		'name'          => 'Sell Instructions bottom sidebar',
		'id'            => 'sell_bottom_1',
		'before_widget' => '',
		'after_widget'  => '',
	) );

	// Shop page 
	register_sidebar( array(
		'name'          => 'Right Shop sidebar',
		'id'            => 'footer_news_1',
		'before_widget' => '',
		'after_widget'  => '',
	) );
}

add_action( 'widgets_init', 'arphabet_widgets_init' );

/* Search area */
add_filter('get_search_form', 'add_placeholder');
add_filter('get_search_form', 'button_replace');

function button_replace($text) {
	$text = str_replace('value="Search"', 'value=""', $text);
	return $text;
}

function add_placeholder($text) {
	$text = str_replace('type="text"', 'type="text" placeholder="Search &hellip;"', $text);
	return $text;
}

/*Add featured images */
add_theme_support( 'post-thumbnails' );

/* Additional image sizes */
add_image_size( 'news-img', 850, 450, true );
add_image_size( 'side-img', 500, 350, true );

/* 
* Woocommerce functions 
*/

function mytheme_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );


/* Show items in cart with ajax */
add_filter( 'woocommerce_add_to_cart_fragments', 'iconic_cart_count_fragments', 10, 1 );
 
function iconic_cart_count_fragments( $fragments ) {
    
    $fragments['div.header-cart-count'] = '<div class="header-cart-count">' . WC()->cart->get_cart_contents_count() . '</div>';
    
    return $fragments;
   
}

/* Show 3 products in a row */
add_filter('loop_shop_columns', 'loop_columns');
if (!function_exists('loop_columns')) {
	function loop_columns() {
		return 3; 
	}
}

/* Change number of products per page */
add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 6;' ), 20 );


/* Change sorting options */
function my_woocommerce_catalog_orderby( $orderby ) {
	unset($orderby['rating']);
	return $orderby;
}

add_filter( "woocommerce_catalog_orderby", "my_woocommerce_catalog_orderby", 20 );
	 				

/* Change add to basket text */
add_filter( 'add_to_cart_text', 'woo_custom_product_add_to_cart_text' );
add_filter( 'woocommerce_product_add_to_cart_text', 'woo_custom_product_add_to_cart_text' );  
  
function woo_custom_product_add_to_cart_text() {
    return __( 'Add To Cart', 'woocommerce' );
}

add_filter( 'add_to_cart_text', 'woo_custom_single_add_to_cart_text' );
add_filter( 'woocommerce_product_single_add_to_cart_text', 'woo_custom_single_add_to_cart_text' ); 
  
function woo_custom_single_add_to_cart_text() {
    return __( 'Add To Cart', 'woocommerce' ); 
}

// Add previous page button on single products 
add_action( 'woocommerce_after_single_product', 'previous_page_single' );

function previous_page_single () {
	$url = "../../shop";
	echo "<a href='$url' class='product-previous'><i class='fas fa-angle-left'></i> Back to shop</a>";
}

// Show how many in stock
add_action('woocommerce_before_add_to_cart_button','product_stock', 10);

function product_stock() {
	global $product;

	// Check if custom stock has been chosen
	if ( $product->stock ) {
		echo '<p>' . $product->stock . ' left in stock</p>';
	}
}


/* Shopping cart adjustments */

// Show cart total heading
add_action( 'woocommerce_before_cart_totals', 'heading_cart_total' );

function heading_cart_total() {
	echo '<h3>Cart total</h3>';
}

/* Change empty cart text */
add_filter( "wc_empty_cart_message", "change_cart_text", 10 );

function change_cart_text() {
	return __( 'Your cart is currently empty', 'woocommerce' );
}