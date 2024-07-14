<!-- --- The page-tours.php is assigned to tours pages. -->

<?php get_header(); 
// Template Name: Tours Page ?>

<div id="hero">
    <img src="<?php echo get_template_directory_uri(); ?>/images/yellowstone-inner.jpg" alt="Yellowstone.">
</div> <!-- End "hero". -->

    <div id="wrapper">
        <main>
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

        <aside>
            <h2> This is my page-tours.php page. </h2>
        </aside>
    </div> <!-- End "wrapper". -->

<?php get_footer(); ?>