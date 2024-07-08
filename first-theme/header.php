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
<body <?php body_class(); ?>>

    <header>
        <div id="top">
        </div> <!-- End "top". -->

        <div id="inner-header">
        </div> <!-- End "inner-header". -->

        <div id="hero">
        </div> <!-- End "hero". -->
    </header>