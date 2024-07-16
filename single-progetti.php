<?php get_header();

$page_id = get_queried_object_id();

while (have_posts()) : the_post();
    $bread_current = get_the_title();
    $bread_archive_link = get_post_type_archive_link('progetti');
    $bread_archive_label = 'Progetti';
?>
    <main id="singleContainer" class="overflow-x-clip">
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
                <!-- Flexible content -->
                <div class="content-articolo">
                    <?php
                    if (have_rows('contenuto_progetto')) :
                        // Loop through rows.
                        while (have_rows('contenuto_progetto')) : the_row();

                            if (get_row_layout() == 'titolo_h1') :
                                $h1 = get_sub_field('h1'); ?>

                                <!-- Blocco H1 -->

                                <h1 class="font-normal w-full lg:text-8xl md:text-7xl text-4xl text-gray-900 dark:text-gray-100"><?php echo esc_html($h1); ?></h1>

                            <?php
                            elseif (get_row_layout() == 'titolo_h2') :
                                $h2 = get_sub_field('h2'); ?>
                                <!-- Blocco H2 -->

                                <h2 class="font-normal w-full lg:text-7xl md:text-6xl text-3xl text-gray-900 dark:text-gray-100"><?php echo esc_html($h2); ?></h2>


                            <?php
                            elseif (get_row_layout() == 'titolo_h3') :
                                $h3 = get_sub_field('h3'); ?>

                                <!-- Blocco H3 -->
                                <h3 class="font-normal w-full lg:text-6xl md:text-5xl text-2xl text-gray-900 dark:text-gray-100"><?php echo esc_html($h3); ?></h3>


                            <?php
                            elseif (get_row_layout() == 'titolo_h4') :
                                $h4 = get_sub_field('h4'); ?>

                                <!-- Blocco H4 -->
                                <h4 class="font-normal w-full lg:text-5xl md:text-4xl text-xl text-gray-900 dark:text-gray-100"><?php echo esc_html($h4); ?></h4>


                            <?php
                            elseif (get_row_layout() == 'titolo_h5') :
                                $h4 = get_sub_field('h5'); ?>

                                <!-- Blocco H5 -->
                                <h5 class="font-normal w-full lg:text-3xl md:text-2xl text-lg text-gray-900 dark:text-gray-100"><?php echo esc_html($h4); ?></h5>


                            <?php
                            elseif (get_row_layout() == 'testo_paragrafo') :
                                $p = get_sub_field('paragrafo'); ?>
                                <!-- Blocco Paragrafo -->

                                <p class="w-full text-gray-800 dark:text-gray-300"><?php echo wp_kses_post($p) ?></p>


                            <?php
                            elseif (get_row_layout() == 'testo_doppio_paragrafo') : ?>

                                <!-- Blocco Doppio Paragrafo -->
                                <div class="flex flex-col flex-nowrap lg:flex-row gap-4">
                                    <div class="lg:w-2/5 w-full text-gray-700 dark:text-gray-300"><?php the_sub_field('paragrafo_doppio') ?></div>
                                    <div class="lg:w-2/5 w-full text-gray-700 dark:text-gray-300"><?php the_sub_field('paragrafo_doppio_2') ?></div>
                                </div>

                                <!-- Blocco Immagine -->

                            <?php
                            elseif (get_row_layout() == 'immagine') :
                                $immagine_singola = get_sub_field('immagine'); ?>

                                <img class="" src="<?php echo esc_url($immagine_singola['url']); ?>" alt="<?php echo esc_attr($immagine_singola['alt']); ?>" />

                                <!-- Blocco Immagine Doppia -->

                            <?php
                            elseif (get_row_layout() == 'immagine_doppia') :
                                $immagine_1 = get_sub_field('immagine_1');
                                $immagine_2 = get_sub_field('immagine_2'); ?>

                                <div class="max-w-full flex flex-col flex-nowrap justify-between lg:flex-row">
                                    <img class="lg:w-[49%] w-full h-full object-cover" src="<?php echo esc_url($immagine_1['url']); ?>" alt="<?php echo esc_attr($immagine_1['alt']); ?>" />
                                    <img class="lg:w-[49%] w-full h-full object-cover" src="<?php echo esc_url($immagine_2['url']); ?>" alt="<?php echo esc_attr($immagine_2['alt']); ?>" />
                                </div>
                                <?php
                                if (have_rows('scaricabili_field', $page_id)) : ?>
                                    <div class="">
                                        <?php
                                        while (have_rows('scaricabili_field', $page_id)) : the_row();

                                            $file = get_sub_field('scaricabili');
                                            if ($file) :
                                                $url = $file['url'];
                                                $title = $file['title'];
                                                $caption = $file['caption'];
                                                $icon = $file['icon'];
                                        ?>
                                                <a href="<?php echo esc_attr($url); ?>" title="<?php echo esc_attr($title); ?>">
                                                    <img src="<?php echo esc_attr($icon); ?>" />
                                                    <span><?php echo esc_html($title); ?></span>
                                                </a>
                                        <?php endif;
                                        endwhile; ?>
                                    </div>
                                <?php
                                endif; ?>

                    <?php
                            endif;
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>
        </section>
        <!-- Progetti Corelati -->
        <section class="container mx-auto py-6">
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
            var defaultHeight = jQuery(document).height() - 1200;

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