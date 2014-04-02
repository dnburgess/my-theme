<?php 

// Call in the theme options
include_once 'acera-options/options-init.php';

// Register Navigation Menus
function custom_navigation_menus() {
	$locations = array(
		'main-menu' => __( 'Main Menu', 'text_domain' ),
	);
	register_nav_menus( $locations );
}
// Hook into the 'init' action
add_action( 'init', 'custom_navigation_menus' );

// Register Sidebar
function custom_sidebar() {
	$args = array(
		'id'            => 'sidebar',
		'name'          => __( 'Sidebar', 'text_domain' ),
		'description'   => __( 'Main Sidebar', 'text_domain' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>',
	);
	register_sidebar( $args );
}
// Hook into the 'widgets_init' action
add_action( 'widgets_init', 'custom_sidebar' );

// Set content width value based on the theme's design
if ( ! isset( $content_width ) )
	$content_width = 600;

// Register Theme Features
function custom_theme_features()  {
	global $wp_version;

	// Add theme support for Automatic Feed Links
	if ( version_compare( $wp_version, '3.0', '>=' ) ) :
		add_theme_support( 'automatic-feed-links' );
	else :
		automatic_feed_links();
	endif;

	// Add theme support for Featured Images
	add_theme_support( 'post-thumbnails' );	

	// Add theme support for Semantic Markup
	$markup = array( 'search-form', );
	add_theme_support( 'html5', $markup );	
}
// Hook into the 'after_setup_theme' action
add_action( 'after_setup_theme', 'custom_theme_features' );

// Register Script
function custom_scripts() {

	wp_deregister_script( 'jQuery' );
	wp_register_script( 'jQuery', '//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js', false, '1.10.2', true );
	wp_enqueue_script( 'jQuery' );

	wp_deregister_script( 'modernizr' );
	wp_register_script( 'modernizr', '//cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js', false, '2.6.2', false );
	wp_enqueue_script( 'modernizr' );

}
// Hook into the 'wp_enqueue_scripts' action
add_action( 'wp_enqueue_scripts', 'custom_scripts' );

// Register Style
function custom_styles() {
	wp_deregister_style( 'reset' );
	wp_register_style( 'reset', '//cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.css', false, '2.0' );
	wp_enqueue_style( 'reset' );

	wp_deregister_style( 'template' );
	wp_register_style( 'template', '/wp-content/themes/theme/assets/css/template.css', false, '2.0' );
	wp_enqueue_style( 'template' );
}
// Hook into the 'wp_enqueue_scripts' action
add_action( 'wp_enqueue_scripts', 'custom_styles' );

// Remove unnecessary header stuff
remove_action('wp_head', 'rsd_link'); // remove really simple discovery link
remove_action('wp_head', 'wp_generator'); // remove wordpress version

remove_action('wp_head', 'feed_links', 2); // remove rss feed links (make sure you add them in yourself if youre using feedblitz or an rss service)
remove_action('wp_head', 'feed_links_extra', 3); // removes all extra rss feed links

remove_action('wp_head', 'index_rel_link'); // remove link to index page
remove_action('wp_head', 'wlwmanifest_link'); // remove wlwmanifest.xml (needed to support windows live writer)

remove_action('wp_head', 'start_post_rel_link', 10, 0); // remove random post link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // remove parent post link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // remove the next and previous post links
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );

remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0 );
?>