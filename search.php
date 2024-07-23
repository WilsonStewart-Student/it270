<!-- --- The index.php is assigned to the blog page. It shows all our posts. -->

<?php get_header(); ?>

    <div id="wrapper">
        <main>
        <?php
        // >>> If we have posts to display, display them!
            if (have_posts()) 
            {
                // >>> If the user gets search results, we will add a happy picture!
                ?>
                <h2> Search Results For: <?php echo get_search_query(); ?> </h2>

                <p>Our findings for
                <?php /* Search Count */
                $allsearch = new WP_Query("s=$s&showposts=-1"); $key = esc_html($s, 1); $count = $allsearch->post_count; _e(''); _e('<span class="search-terms">'); echo $key; _e('</span>'); _e(' &mdash; '); echo $count . ' '; _e('articles/pages'); wp_reset_query(); ?></p>

                <?php
                
                while (have_posts()) 
                {
                    // >>> Post.
                    the_post();
                    echo '<article class="post">';

                    // >>> Post Title.
                    echo '<h2 class="title">';
                    ?>
                    <a href="<?php the_permalink(); ?>">
                    <?php
                    the_title();
                    echo '</a> </h2>';
                    ?>

                    <!-- >>> Post Meta. -->
                    <div class="meta">
                        <span>
                            <b> Posted by: </b> <?php the_author(); ?>
                        </span>
                        <span>
                            <b> Posted on: </b> <?php the_time('F j, Y g:i a'); ?>
                        </span>
                    </div> <!-- End "meta". -->

                    <!-- >>> Post Thumbnail Image. -->
                    <div class="thumbnail">
                        <?php 
                        if (has_post_thumbnail()) { ?>
                            <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail(); } ?>
                            </a>
                    </div> <!-- End "thumbnail". -->

                    <?php
                    // >>> Post Excerpt.
                    the_excerpt();
                    // >>> And Readmore.
                    echo '<span class="block">';
                    ?>
                    <a href="<?php the_permalink(); ?>"> Read more about <?php the_title(); ?>
                    <?php
                    echo '</a> </span>';

                    echo '</article>';
                }
            }

        // >>> Otherwise, tell the user no posts were found.
            else
            {
                ?>
                <h2> No Content For: <?php echo get_search_query(); ?> </h2>
                <?php
                echo '<p>';
                echo 'Sorry, we could not find anything resembling your search terms. Would you like to search again using different keywords?';
                get_search_form();
                echo '</p>';
            }
        ?>
        </main>

        <!-- This is our aside. -->
        <?php get_sidebar(); ?>
        
    </div> <!-- End "wrapper". -->

<?php get_footer(); ?>