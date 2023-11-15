<?php get_header(); ?>
<main class="w-full py-12">
    <section class="container mx-auto py-12 px-6">
        <?php
        wp_reset_query(); // necessary to reset query
        while (have_posts()) : the_post(); ?>
            <h1 class="lg:text-7xl md:text-6xl text-5xl text-gray-900 dark:text-gray-100 lg:my-8 my-4"><?php echo the_title(); ?></h1>
            <div class="text-gray-800 dark:text-gray-200 my-4 lg:ml-[8.333%] ml-0">

            <?php
            the_content();
        endwhile; // End of the loop.
            ?>
            </div>
    </section>
</main>
<?php get_footer(); ?>