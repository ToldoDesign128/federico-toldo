<?php get_header();
$page_id = get_queried_object_id(); ?>
<main>
    <!-- Hero -->
    <section class="w-full relative bg-gray-300 dark:bg-gray-700 lg:mb-6 mb-4">
        <div class="absolute top-0 left-[50%] lg:h-screen h-[80vh] lg:w-auto w-full overflow-hidden translate-x-[-50%]">
            <img src="" alt="" class="h-full object-cover z-0">
        </div>
        <div class="lg:h-screen h-[80vh] w-full relative container flex flex-wrap lg:items-center items-end mx-auto px-6 z-[1]">
            <div class="w-full flex flex-wrap justify-between lg:mt-64">
                <div class="lg:w-4/12 lg:block hidden w-full">
                    <h1 class="text-4xl text-gray-800 dark:text-gray-200"><?php echo esc_html(get_field('hero_titolo_1', $page_id)); ?></h1>
                    <p class="text-xl py-6 text-gray-700 dark:text-gray-300">Stai cercando di migliorare la tua presenza online?<br>Hai trovato chi fa al caso tuo!</p>
                </div>
                <h2 class="lg:w-auto w-full lg:text-4xl text-3xl text-right font-semibold text-gray-800 dark:text-gray-200 lg:py-0 py-8">Freelance<br>Designer & Developer</h2>
            </div>
        </div>
    </section>
    <!-- First content -->
    <section class="container w-full flex flex-wrap justify-between mx-auto px-6 lg:py-12 py-8">
        <h3 class="lg:w-1/2 w-full lg:text-5xl md:text-4xl text-3xl text-gray-800 dark:text-gray-200" style="line-height: 1.2;"><?php echo esc_html(get_field('section_title_home', $page_id)); ?></h3>
        <div class="lg:w-3/12 w-full flex flex-wrap lg:py-0 py-6">
            <p class="text-xl text-gray-700 dark:text-gray-300"><?php echo esc_html(get_field('section_title_2_home', $page_id)); ?></p>
            <a href="about" class="group w-full flex text-4xl text-gray-600 lg:hover:text-gray-900 dark:text-gray-400 dark:lg:hover:text-gray-100 ml-0 lg:hover:ml-4 transition-all duration-300 py-6">Chi sono<img width="24px" height="24px" class="ml-2 mt-1 opacity-50 lg:group-hover:opacity-100 transition-all" src="<?php echo get_template_directory_uri() . '/img/icon/mdi_arrow.svg'; ?>" alt="arrow"></a>
        </div>
    </section>
    <!-- Sezione progetti -->
    <section class="container w-full mx-auto px-6 lg:py-12 py-8">
        <h4 class="uppercase text-gray-600 dark:text-gray-400">Alcuni lavori recenti</h4>
        <div class="w-full flex flex-wrap lg:py-8 py-4">
            <?php
            $loop = new WP_Query(array(
                'post_type'         => 'progetti',
                'post_status'       => 'publish',
                'orderby'           => 'date',
                'order'             => 'DESC',
                'posts_per_page'    => 3,
            ));

            while ($loop->have_posts()) : $loop->the_post(); ?>
                <a href="<?php the_permalink(); ?>" class="w-full group">
                    <article class="w-full flex flex-wrap justify-between text-gray-600 lg:hover:text-gray-900 dark:text-gray-400 dark:lg:hover:text-gray-100 py-8">
                        <div class="lg:w-8/12 w-full flex flex-wrap lg:ml-[8.333%]">
                            <p class="w-full lg:text-4xl md:text-3xl text-2xl lg:py-0 py-6 lg:group-hover:ml-4 transition-all duration-300"><?php echo the_title(); ?></p>
                            <p class="lg:w-8/12 w-full lg:text-xl md:text-lg lg:pb-0 pb-6 text-lg lg:group-hover:ml-4 transition-all duration-300">
                                <?php
                                $excerpt = get_the_excerpt();
                                $excerpt = substr($excerpt, 0, 200);
                                echo $excerpt;
                                ?>
                            </p>
                        </div>
                        <div class="lg:w-3/12 w-full overflow-hidden rounded">
                            <?php
                            if (has_post_thumbnail()) {
                                echo get_the_post_thumbnail(null, 'large', ['class' => 'w-full aspect-video object-cover lg:group-hover:scale-110 transition-transform']);
                            } else {
                                echo '<img class="w-full aspect-video object-cover rounded lg:group-hover:scale-110 transition-transform" src="http://federico-toldo-new.local/wp-content/uploads/2023/10/Federico_Toldo.jpeg"/>';
                            }; ?>
                        </div>
                    </article>
                    <div class="lg:pl-[8.333%]">
                        <span class="w-full block h-px bg-gray-300 dark:bg-gray-700"></span>
                    </div>
                </a>
            <?php endwhile; ?>

        </div>
        <a href="progetti" class="group w-full flex justify-end md:text-4xl text-3xl text-gray-600 lg:hover:text-gray-900 dark:text-gray-400 lg:pr-4 dark:lg:hover:text-gray-100 ml-0 lg:hover:ml-4 transition-all duration-300 py-6">Tutti i miei Progetti<img width="24px" height="24px" class="ml-2 mt-1 opacity-50 lg:group-hover:opacity-100 transition-all" src="<?php echo get_template_directory_uri() . '/img/icon/mdi_arrow.svg'; ?>" alt="arrow"></a>
    </section>
    <!-- Sezione CTA -->
</main>
<?php get_footer(); ?>