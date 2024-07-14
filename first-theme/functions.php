<?php

// --- My functions page!

// >>> We want our excerpts to be 25 words max, so we will specify that here,
function my_excerpt_length()
{
    return 25;
}
// >>> then add it as a filter to excerpt_length.
add_filter('excerpt_length','my_excerpt_length');

// 
// 
// 

// >>> Add support for thumbnails to our theme.
add_theme_support('post-thumbnails');

// >>> And set the thumbnail size to 200 sq px.
// set_post_thumbnail_size(200, 200);

// 
// 
// 

// >>> Register our navigation!
register_nav_menus(array(
    'primary' => 'Primary Menu',
    'footer' => 'Footer Menu'
));

//
//
//

// >>> Tell WordPress to use the jQuery library we uploaded.
function my_theme_scripts() 
{
    wp_enqueue_script( 'astuteo', get_template_directory_uri() . '/js/astuteo.js', '1.0.0', false );
}

add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );
