<?php get_header();
while (have_posts()) : the_post();
?>
    <main>
        <!-- Hero progetti -->
        <section class="w-full pt-48">
            <div class="w-full h-full container mx-auto flex flex-col justify-center px-6">
                <h1 class="w-7/12 lg:text-8xl text-gray-900 dark:text-gray-100">
                    <?php echo get_the_title(); ?>
                </h1>
                <div class="flex md:flex-row flex-col py-12">
                    <div class="w-3/12">
                        <p class="text-sm text-gray-500 uppercase py-4  border-b border-gray-300 dark:border-gray-700">
                            Ruolo
                        </p>
                        <p class="text-xl text-gray-800 dark:text-gray-200 py-4"><?php echo esc_html(get_field('ruolo_hero_progetti')); ?></p>
                    </div>
                    <div class="w-3/12">
                        <p class="text-sm text-gray-500 uppercase py-4  border-b border-gray-300 dark:border-gray-700">
                            Crediti
                        </p>
                        <?php
                        $crediti_link = get_field('crediti_hero_progetti');
                        if ($crediti_link) :
                            $crediti_link_url = $crediti_link['url'];
                            $crediti_link_title = $crediti_link['title'];
                            $crediti_link_target = $crediti_link['target'] ? $crediti_link['target'] : '_self';
                        ?>
                            <a class="group flex text-xl text-gray-600 lg:hover:text-gray-900 dark:text-gray-400 dark:lg:hover:text-gray-100 py-4 ml-0 lg:hover:ml-2 transition-all" href="<?php echo esc_url($crediti_link_url); ?>" target="<?php echo esc_attr($crediti_link_target); ?>"><?php echo esc_html($crediti_link_title); ?><img class="ml-2 mt-1 opacity-50 lg:group-hover:opacity-100 transition-all" src="<?php echo get_template_directory_uri() . '/img/icon/mdi_arrow.svg'; ?>" alt="arrow"></a>
                        <?php endif; ?>
                    </div>
                    <div class="w-3/12">
                        <p class="text-sm text-gray-500 uppercase py-4  border-b border-gray-300 dark:border-gray-700">
                            Anno
                        </p>
                        <p class="text-xl text-gray-800 dark:text-gray-200 py-4"><?php echo esc_html(get_field('anno_hero_progetti')); ?></p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Content progetto -->
        <section class="w-full container mx-auto flex flex-col justify-center px-6">

        </section>
    </main>
<?php endwhile;
get_footer(); ?>