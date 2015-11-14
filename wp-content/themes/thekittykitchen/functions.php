<?php

/**
 *
 * @package thekittykitchen
 *
 */

// Custom Function to Include Favicon
function favicon_link() {
	echo '<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />' . "\n";
}
add_action( 'wp_head', 'favicon_link');
add_theme_support( 'menus' );

//navigation
function register_my_menu() {
	 array(
      'header-menu' => __( 'Header Menu' )
    );
}
add_action( 'init', 'register_my_menu' );


// This theme uses post thumbnails
add_theme_support( 'post-thumbnails', array( 'recipe', 'post' ) );
// Add it for posts

add_theme_support( 'post-formats', array( 'recipe', 'post' ) );

function add_post_formats() {
    add_theme_support( 'post-formats', array( 'gallery', 'quote', 'video', 'aside', 'image', 'link' ) );
}

add_action( 'after_setup_theme', 'add_post_formats', 20 );

function blog_widgets_init() {
	register_sidebar( array(
		'name'          => 'Blog',
		'id'            => 'blog',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'blog_widgets_init' );


function searchfilter($query) {

    if ($query->is_search && !is_admin() ) {
        $query->set('post_type',array('post','recipe'));
    }

return $query;
}

add_filter('pre_get_posts','searchfilter');

