<?php 

// >>> Enable child theme functionality.
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() 
{
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

// >>> Unregister the sidebar used by the "Blank Slate" theme.

// >>> This add_action has a priority of 11. This is because the child theme's functions.php
// >>> is normally called BEFORE the parent's functions.php, but we need this function to run after.
add_action( 'widgets_init', 'remove_my_widgets', 11 );

function remove_my_widgets()
{
   unregister_sidebar( 'primary-widget-area' );
}

// >>> Register my sidebars.
add_action( 'widgets_init', 'new_blankslate_widgets_init' );

function new_blankslate_widgets_init() 
{
   register_sidebar(array(
   'name' => esc_html__( 'Sidebar Blog', 'blankslate' ),
   'id' => 'sidebar-blog',
   'before_widget' => '<div class="inner-widget">',
   'after_widget' => '</div>',
   'before_title' => '<h3>',
   'after_title' => '</h3>'
   ));

   register_sidebar(array(
   'name' => esc_html__( 'Sidebar Seattle', 'blankslate' ),
   'id' => 'sidebar-seattle',
   'before_widget' => '<div class="inner-widget">',
   'after_widget' => '</div>',
   'before_title' => '<h3>',
   'after_title' => '</h3>'
   ));

   register_sidebar(array(
   'name' => esc_html__( 'Sidebar Denver', 'blankslate' ),
   'id' => 'sidebar-denver',
   'before_widget' => '<div class="inner-widget">',
   'after_widget' => '</div>',
   'before_title' => '<h3>',
   'after_title' => '</h3>'
   ));
}

// >>> Add custom body class based on which website we are on. (Company ABC National has a class of website-1, Company ABC Seattle has a class of website-2, etc.)
function customBodyClass( $classes ) 
{
   global $current_blog;
   $classes[] = 'website-'.$current_blog->blog_id;
   return $classes;
}

add_filter( 'body_class', 'customBodyClass' );

   