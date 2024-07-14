<!-- --- The index.php is assigned to the blog page. It shows all our posts. -->

<?php get_header(); ?>

    <div id="wrapper">
        <!-- Add "wrong page" image -->
        <main>
            <h2> 404: Page Not Found</h2>
            <p> If you're looking for something, try searching for it! </p>
            <?php get_search_form(); ?>
            <p> Otherwise, feel free to browse our pages! </p>
            <?php wp_list_pages(); ?>
        </main>

        <aside>
            <h2> This is my 404.php page. </h2>
        </aside>
    </div> <!-- End "wrapper". -->

<?php get_footer(); ?>