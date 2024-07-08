<!-- --- The index.php is assigned to the blog page. It shows all our posts. -->

<?php get_header(); ?>

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
                echo '<h2>';
                echo wpautop('Sorry, no posts were found!');
                echo '</h2>';
            }
        ?>
        </main>

        <aside>
        </aside>
    </div> <!-- End "wrapper". -->

<?php get_footer(); ?>