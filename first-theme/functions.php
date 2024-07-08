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
set_post_thumbnail_size(200, 200);
