<?php get_header();

$page_id = get_queried_object_id();

while (have_posts()) : the_post();
    $bread_current = get_the_title();
    $bread_archive_link = get_post_type_archive_link('post');
    $bread_archive_label = 'News';
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
                <h1 class="font-normal lg:w-8/12 md:w-9/12 w-full lg:text-7xl md:text-6xl text-4xl text-gray-900 dark:text-gray-100">
                    <?php echo get_the_title(); ?>
                </h1>
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
                    <div class="w-full text-gray-900 dark:text-gray-100">
                        <!-- Flexible content -->
                <div class="content-articolo">
                    <?php
                    if (have_rows('contenuto_articolo')) :
                        // Loop through rows.
                        while (have_rows('contenuto_articolo')) : the_row();

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
                </div>
            </div>
        </section>
        <!-- Progetti Corelati -->
        <section class="container mx-auto py-6">
            <?php get_template_part('template-parts/related-news'); ?>
        </section>
    </main>
<?php endwhile;
get_footer(); ?>