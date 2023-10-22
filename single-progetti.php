<?php get_header();
while (have_posts()) : the_post();
    $bread_current = get_the_title();
    $bread_archive_link = get_post_type_archive_link('progetti');
    $bread_archive_label = 'Progetti';
?>
    <main id="singleContainer">
        <!-- Hero progetti -->
        <section class="w-full pt-48">
            <div class="w-full h-full container mx-auto flex flex-col justify-center px-6">
                <nav class="my-6">
                    <ul class="flex flex-row items-center gap-4">
                        <li class="w-auto">
                            <a href="<?php echo $bread_archive_link; ?>" class="font-bold text-gray-500 lg:hover:text-gray-700 dark:lg:hover:text-gray-300 uppercase transition-all">
                                <?php echo $bread_archive_label; ?>
                            </a>
                        </li>
                        <div class="w-auto d-none d-sm-block">
                            <svg width="6" height="9" viewBox="0 0 6 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 7.9425L3.435 4.5L0 1.0575L1.0575 0L5.5575 4.5L1.0575 9L0 7.9425Z" fill="#A19E9E" />
                            </svg>
                        </div>
                        <li class="">
                            <a title="pagina attuale" class="text-gray-500 uppercase">
                                <?php echo $bread_current; ?>
                            </a>
                        </li>
                    </ul>
                </nav>
                <h1 class="font-normal lg:w-7/12 md:w-8/12 w-full lg:text-8xl md:text-7xl text-4xl text-gray-900 dark:text-gray-100">
                    <?php echo get_the_title(); ?>
                </h1>
                <div class="flex md:flex-row flex-col py-12">
                    <div class="lg:w-3/12 md:w-4/12 w-full">
                        <p class="text-sm text-gray-500 uppercase py-4  border-b border-gray-300 dark:border-gray-700">
                            Ruolo
                        </p>
                        <p class="lg:text-xl text-lg text-gray-800 dark:text-gray-200 py-4"><?php echo esc_html(get_field('ruolo_hero_progetti')); ?></p>
                    </div>
                    <div class="lg:w-3/12 md:w-4/12 w-full">
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
                            <a class="group flex lg:text-xl text-lg text-gray-600 lg:hover:text-gray-900 dark:text-gray-400 dark:lg:hover:text-gray-100 py-4 ml-0 lg:hover:ml-2 transition-all" href="<?php echo esc_url($crediti_link_url); ?>" target="<?php echo esc_attr($crediti_link_target); ?>"><?php echo esc_html($crediti_link_title); ?><img class="ml-2 mt-1 opacity-50 lg:group-hover:opacity-100 transition-all" src="<?php echo get_template_directory_uri() . '/img/icon/mdi_arrow.svg'; ?>" alt="arrow"></a>
                        <?php endif; ?>
                    </div>
                    <div class="lg:w-3/12 md:w-4/12 w-full">
                        <p class="text-sm text-gray-500 uppercase py-4  border-b border-gray-300 dark:border-gray-700">
                            Anno
                        </p>
                        <p class="lg:text-xl text-lg text-gray-800 dark:text-gray-200 py-4"><?php echo esc_html(get_field('anno_hero_progetti')); ?></p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Content progetto -->
        <section class="container mx-auto ">
            <div class="lg:w-9/12 w-full flex flex-col px-6">
                <?php if (has_post_thumbnail()) {
                    echo get_the_post_thumbnail(null, 'full', ['class' => 'w-full lg:my-14 md:my-12 my-6 aspect-video object-cover rounded']);;
                } else {
                    echo '<img class="w-full lg:my-14 md:my-12 my-6 aspect-video object-cover rounded" src="http://federico-toldo-new.local/wp-content/uploads/2023/10/Federico_Toldo.jpeg"/>';
                }; ?>
                <!-- Testo Img -->
                <div class="lg:my-14 md:my-12 my-6">
                    <div class="flex flex-row flex-wrap justify-between">
                        <div class="lg:w-6/12 w-full text-gray-900 dark:text-gray-100">
                            <?php echo get_the_content(); ?>
                        </div>
                        <?php if (get_field('immagine_1_progetti')) : ?>
                            <img class="lg:w-5/12 w-full aspect-video lg:mt-0 md:mt-24 mt-12 object-cover rounded" src="<?php the_field('immagine_1_progetti'); ?>" />
                        <?php endif; ?>
                    </div>
                </div>
                <div class="lg:my-14 my-6">
                    <?php if (get_field('immagine_2_progetti')) : ?>
                        <img class="w-full aspect-video object-cover rounded" src="<?php the_field('immagine_2_progetti'); ?>" />
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <!-- Tecnologie applicate -->
        <section class="container mx-auto">

        </section>
        <!-- Progetti Corelati -->
        <section class="container mx-auto">
            <?php get_template_part('template-parts/related-post'); ?>
        </section>
        <!-- Link Website Button -->
        <?php
        $progetti_link = get_field('link_progetto');
        if ($progetti_link) :
            $progetti_link_url = $progetti_link['url'];
            $progetti_link_target = $progetti_link['target'] ? $progetti_link['target'] : '_self';
        ?>
            <a class="circle-button z-0" href="<?php echo esc_url($progetti_link_url); ?>" target="<?php echo esc_attr($progetti_link_target); ?>">
                <div class="main_circle_text text-gray-900 dark:text-gray-100">
                    <svg viewBox="0 0 100 100" style="border-radius: 50%; " width="130" height="130">
                        <defs>
                            <path id="circle" d="
                        M 50, 50
                        m -37, 0
                        a 37,37 0 1,1 74,0
                        a 37,37 0 1,1 -74,0" />
                        </defs>
                        <text>
                            <textPath xlink:href="#circle">VISITA IL SITO • VISITA IL SITO • </textPath>
                        </text>
                    </svg>
                </div>
                <div class="circle-text"><img src="<?php echo get_template_directory_uri() . '/img/icon/mdi_arrow.svg'; ?>" alt=""></div>
            </a>
        <?php endif; ?>
    </main>
    <script>
        jQuery(window).scroll(function() {
            var heightScrolled = jQuery(window).scrollTop();
            var defaultHeight = 1500;

            if (heightScrolled < defaultHeight) {
                jQuery('.circle-button').removeClass("returTop")
                jQuery('.circle-button').addClass("a")
            } else {
                jQuery('.circle-button').addClass("returTop")
            }

        });
    </script>
<?php endwhile;
get_footer(); ?>