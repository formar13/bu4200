<?php
	//Add support for thumbnails
	add_theme_support('post-thumbnails');
	set_post_thumbnail_size(620, 250, true);

	//Add support to dynamic sidebars
	if ( function_exists('register_sidebar') )
    	register_sidebar();
    	
	//Add support for WordPress 3.0's custom menus
	add_action( 'init', 'register_my_menu' );
 
	//Register area for custom menu
	function register_my_menu() {
    	register_nav_menu( 'primary-menu', __( 'Primary Menu' ) );
	}

	//Sidebars
	register_sidebar(array( // Blog widget area
		'name'=>'sidebar-top',
		'description' => 'Widget area for the blog.',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<div class="title widgettitle">',
		'after_title' => '</div>',
	));
	register_sidebar(array( // Front Page widget area
		'name'=>'sidebar-bottom',
		'description' => 'Widget area for the Front Page.',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<div class="title">',
		'after_title' => '</div>',
	));

?>