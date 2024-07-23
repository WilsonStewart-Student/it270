<!-- --- The single.php is assigned to our posts. It is the layout for any single post page. -->

<?php get_header(); ?>

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
                    // >>> Post.
                    the_post();
                    echo '<article class="post">';

                    // >>> Post Title.
                    echo '<h2 class="title">';
                    the_title();
                    echo '</h2>';
                    ?>

                    <div class="meta">
                        <span>
                            <b> Posted by: </b> <?php the_author(); ?>
                        </span>
                        <span>
                            <b> Posted on: </b> <?php the_time('F j, Y g:i a'); ?>
                        </span>
                    </div> <!-- End "meta". -->

                    <div class="thumbnail-fullsize">
                        <?php 
                        if (has_post_thumbnail()) { ?>
                        <?php the_post_thumbnail(); } ?>
                    </div> <!-- End "thumbnail-fullszie". -->

                    <?php
                    // >>> Post Content.
                    the_content();

                    echo '</article>';
                }
            }

        // >>> Otherwise, tell the user no posts were found.
            else
            {
                echo '<h2>';
                echo wpautop('Sorry, no posts were found!');
                echo '</h2>';
            }

            comments_template();
        ?>

        <div class="next-previous">
        <?php (previous_post_link()) ? '%link' : ''; ?> &nbsp; &nbsp; <?php (next_post_link()) ? '%link' : ''; ?>
        </div>
        
        </main>

        <!-- This is our aside. -->
        <?php get_sidebar(); ?>

    </div> <!-- End "wrapper". -->

<?php get_footer(); ?>