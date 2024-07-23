<!-- --- The page-tours.php is assigned to tours pages. -->

<?php get_header(); 
// Template Name: Tours Page ?>

<div id="hero">
    <img src="<?php echo get_template_directory_uri(); ?>/images/yellowstone-inner.jpg" alt="Yellowstone.">
</div> <!-- End "hero". -->

    <div id="wrapper">
        <main>
        <!-- >>> Post Thumbnail Image. -->
                <div class="thumbnail-fullsize">
                <?php 
                if (has_post_thumbnail()) { ?>
                <?php the_post_thumbnail(); } ?>
                </div> <!-- End "thumbnail". -->

        <?php
        // >>> If we have posts to display, display them!
            if (have_posts()) 
            {
                while (have_posts()) 
                {
                    the_post();
                    the_content();
                }
            }

        // >>> Otherwise, tell the user no posts were found.
            else
            {
                echo '<h2>';
                echo wpautop('Sorry, no posts were found!');
                echo '</h2>';
            }
        ?>
        </main>

        <!-- This is our aside. -->
        <aside id="secondary" class="widget-area">
            <?php dynamic_sidebar( 'sidebar-tours' ); ?>
            <?php dynamic_sidebar( 'sidebar-tours-specials' ); ?>
        </aside> <!-- End "secondary". -->

    </div> <!-- End "wrapper". -->

<?php dynamic_sidebar( 'sidebar-buy' ); ?>
<?php get_footer(); ?>