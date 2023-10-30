<?php get_header(); ?>
<main class="archive-progetti mb-12">
    <!-- Hero progetti -->
    <section class="w-full pt-48">
        <div class="w-full h-full container mx-auto flex flex-col justify-center px-6">
            <h1 class="lg:w-7/12 md:w-8/12 w-full lg:text-8xl md:text-7xl text-4xl text-gray-900 dark:text-gray-100" style="line-height: 1.2;">
                Questi sono alcuni dei miei lavori
            </h1>
            <!--Filtro Progetti -->
            <div class="filter-chips w-full flex md:flex-row flex-wrap my-12 md:gap-4 md:justify-normal justify-between">
                <a id="all-filter" class="filter-chip md:w-auto w-[48.8%] text-center text-gray-900 lg:hover:text-gray-100 dark:text-gray-100 dark:lg:hover:text-gray-900 border bg-transparent lg:hover:bg-gray-900 dark:lg:hover:bg-gray-100 border-gray-900 dark:border-gray-100 rounded my-1 md:py-2 py-1 md:px-5 px-3" id="all-filter" href="<?php echo get_post_type_archive_link('progetti'); ?>"><?php _e('Tutte', 'federicotoldo'); ?></a>

                <?php
                $filter_cats = get_terms(array(
                    'taxonomy' => 'progetti_tax',
                    'parent' => 0, //only parent cat
                    'hide_empty' => true, //only parent cat with at least one post
                ));
                // var_dump($filter_cats);
                foreach ($filter_cats as $key => $filter_cat) {
                    $filter_name = $filter_cat->name;
                    $filter_slug = $filter_cat->slug;
                    $filter_taxonomy = $filter_cat->taxonomy;
                ?>
                    <a class="filter-chip md:w-auto w-[48.8%] text-center text-gray-900 lg:hover:text-gray-100 dark:text-gray-100 dark:lg:hover:text-gray-900 border bg-transparent lg:hover:bg-gray-900 dark:lg:hover:bg-gray-100 border-gray-900 dark:border-gray-100 rounded my-1 md:py-2 py-1 md:px-5 px-3" id="<?php echo $filter_slug; ?>" href="<?php echo get_post_type_archive_link('progetti') . '/?' . $filter_taxonomy . '=' . $filter_slug; ?>"><?php echo $filter_name; ?></a>
                <?php
                }
                ?>
            </div>
        </div>
    </section>
    <div class="container mx-auto px-6">
        <ul class="py-4 lg:flex hidden flex-row justify-between text-gray-500 border-b border-gray-300 dark:border-gray-700">
            <li class="w-5/12 text-sm uppercase">Cliente</li>
            <li class="w-auto text-sm uppercase">Ruolo/Servizio</li>
            <li class="w-auto text-sm uppercase">Anno</li>
        </ul>
    </div>
    <?php if (have_posts()) : ?>
        <section class="w-full lg:py-12 md:py-10 py-6">
            <div class="w-full container mx-auto flex flex-col px-6">
                <?php while (have_posts()) : the_post(); ?>

                    <div class="w-full py-6 border-b border-gray-300 dark:border-gray-700">
                        <a class="text-gray-600 lg:hover:text-gray-900 dark:text-gray-400 dark:lg:hover:text-gray-100" href="<?php the_permalink(); ?>">
                            <?php
                            if (has_post_thumbnail()) {
                                echo get_the_post_thumbnail(null, 'large', ['class' => 'lg:hidden block w-full aspect-video object-cover rounded md:mb-8 mb-4']);
                            } else {
                                echo '<img class="lg:hidden block w-full aspect-video object-cover rounded md:mb-4 mb-2" src="http://federico-toldo-new.local/wp-content/uploads/2023/10/Federico_Toldo.jpeg"/>';
                            }; ?>
                            <div class="flex flex-row flex-wrap justify-between items-center ml-0 lg:hover:ml-4 transition-all">
                                <p class="md:w-5/12 w-full lg:text-4xl md:text-3xl text-2xl md:order-1 order-3"><?php echo the_title(); ?></p>
                                <p class="md:w-auto lg:text-2xl md:order-2 order-1">Design e Sviluppo</p>
                                <p class="md:w-auto lg:text-2xl md:order-3 order-2">2023</p>
                            </div>
                        </a>
                    </div>

                <?php endwhile; ?>
            </div>
        </section>
    <?php endif; ?>
</main>
<script>
    jQuery(document).ready(function() {
        jQuery(function() {
            var loc = window.location.href; // returns the full URL
            var para = loc.split("?progetti_tax=");

            if (para[1]) {
                console.log(para[1]);
                jQuery(".filter-chip#" + para[1]).addClass("current-filter-chip");
            } else {
                jQuery(".filter-chip#all-filter").addClass("current-filter-chip");
            }
        });
    });
</script>
<?php get_footer(); ?>