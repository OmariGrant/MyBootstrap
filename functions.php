<?php

// add bootstrap stylesheet
function addBootstrap() {

    /*Enqueue The Styles*/
   
    wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
 wp_enqueue_style( 'mainCSS', get_template_directory_uri() . '/assets/css/custom.css' );
     wp_enqueue_script( 'jQuery', get_template_directory_uri() . '/assets/js/jquery.min.js');
	wp_enqueue_script( 'bootstrapJS', get_template_directory_uri() . '/assets/js/bootstrap.min.js');
	//wp_enqueue_style( 'googleFont', 'https://fonts.googleapis.com/css?family=Aldrich');	    


}

add_action( 'wp_enqueue_scripts', 'addBootstrap' );


/**
 * Register our sidebars and widgetized areas.
 *
 */
function initWidgetsLeftSidebar() {

	register_sidebar( array(
		'name'          => 'Left sidebar',
		'id'            => 'static_left_sidebar',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'initWidgetsLeftSidebar' );


// add rss support

add_theme_support( 'automatic-feed-links' );

//register menus for sidebar
function registerSidebarMenu() {
  register_nav_menus(
    array(
      'sidebar-menu' => __( 'Sidebar Menu' )
     )
   );
 }
 add_action( 'init', 'registerSidebarMenu' );
 
 ?>