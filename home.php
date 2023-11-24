<?php get_header(); ?>
<main class="mb-12">
    <!-- Hero progetti -->
    <section class="w-full pt-48">
        <div class="w-full h-full container mx-auto flex flex-col justify-center px-6">
            <h1 class="lg:w-7/12 md:w-8/12 w-full lg:text-8xl md:text-7xl text-6xl text-gray-900 dark:text-gray-100" style="line-height: 1.2;">
                Parliamo di Design
            </h1>
            <p class="lg:w-6/12 md:w-7/12 w-full text-gray-800 dark:text-gray-200 my-12 lg:ml-[8.333%]">
                Esplora le ultime novità nel mondo del design, dello sviluppo web e della comunicazione nella nostra sezione News. Siamo qui per offrirti aggiornamenti rapidi e ispirazioni fresche. Scopri le tendenze emergenti, approfondimenti sullo sviluppo web e insight sulla comunicazione visiva. Resta aggiornato con il meglio della creatività digitale. Benvenuto nel cuore pulsante dell'innovazione!
            </p>
        </div>
    </section>
    <section class="w-full lg:pl-[8.333%]">
        <div class="container mx-auto px-6">
            <ul class="py-4 lg:flex hidden flex-row justify-between text-gray-500 border-b border-gray-300 dark:border-gray-700 ">
                <li class="w-4/12 text-sm uppercase">Titolo</li>
                <li class="w-auto text-sm uppercase">Categoria</li>
            </ul>
        </div>
        <?php 
        wp_reset_query();
        if (have_posts()) : ?>
            <section class="w-full lg:py-12 md:py-10 py-6">
                <div class="w-full container mx-auto flex flex-col px-6">
                    <?php while (have_posts()) : the_post(); 
                    $page_id = get_queried_object_id();                
                    ?>
    
                        <div class="w-full py-6 border-b border-gray-300 dark:border-gray-700">
                            <a class="text-gray-600 lg:hover:text-gray-900 dark:text-gray-400 dark:lg:hover:text-gray-100" href="<?php the_permalink(); ?>">
                                <?php
                                if (has_post_thumbnail()) {
                                    echo get_the_post_thumbnail(null, 'large', ['class' => 'lg:hidden block w-full aspect-video object-cover rounded md:mb-8 mb-4']);
                                } else {
                                    echo '<img class="lg:hidden block w-full aspect-video object-cover rounded md:mb-4 mb-2" src="http://federico-toldo-new.local/wp-content/uploads/2023/10/Federico_Toldo.jpeg"/>';
                                }; ?>
                                <div class="flex flex-row flex-wrap justify-between items-center ml-0 lg:hover:ml-4 transition-all">
                                    <p class="md:w-6/12 w-full lg:text-4xl md:text-3xl text-2xl md:order-1 order-3"><?php echo the_title(); ?></p>
                                    <p class="md:w-auto lg:text-2xl md:order-3 order-2"><?php foreach ((get_the_category()) as $category){$catname=$category->cat_name; echo $catname;}; ?></p>
                                </div>
                            </a>
                        </div>
    
                    <?php endwhile; ?>
                </div>
            </section>
        <?php endif; ?>
    </section>
</main>
<?php get_footer(); ?>