<!DOCTYPE html>

<!-- <html lang="en"> -->
<html <?php language_attributes(); ?> >

<head>
    <!-- <meta charset="UTF-8"> -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- <title> Title </title> -->
    <title><?php bloginfo('name'); ?></title>

    <!-- >>> This function will allow plugin information (i.e. stylesheets, javascript, etc.) to display before the closing head tag. -->
    <?php wp_head();?>

    <!-- <link type="text/css" rel="stylesheet" href="style.css"> -->
    <link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>?<?php echo rand() ?>"> 
    <!-- The "echo rand" is to make my CSS actually reload. Instead of. Not doing that at all! -->

</head>

<!-- <body> -->
<body <?php body_class(! is_front_page() ? "inner-page" : "" ); ?>>

    <header>
        <div id="top">
            <?php get_search_form(); ?>
        </div> <!-- End "top". -->

        <div id="inner-header">
            <a href="<?php echo get_home_url(); ?>">
                <img src="<?php echo get_template_directory_uri() ?>/images/logo.png" alt="Logo" id="logo">
            </a>


            <!-- Navigation using Astuteo's nav! -->
            <nav id="site-navigation" class="main-navigation">

                <button class="nav-button">Toggle Navigation</button>
                <?php $args_primary = array(
                    'theme_location' => 'primary',
                    'items_wrap' => '<ul class="primary-nav">%3$s</ul>'
                ); ?>

                <?php wp_nav_menu($args_primary); ?>

            </nav>
        </div> <!-- End "inner-header". -->
    </header>