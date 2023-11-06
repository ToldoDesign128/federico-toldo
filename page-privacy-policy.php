<?php get_header();?>
<main class="w-full py-12">
    <section class="container mx-auto p-6">
        <h1 class="lg:text-7xl md:text-6xl text-5xl text-gray-900 dark:text-gray-100 my-4"><?php echo the_title();?></h1>
        <?php echo the_content();?>    
    </section>
</main>
<?php get_footer();?>