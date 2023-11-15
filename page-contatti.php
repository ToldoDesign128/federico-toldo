<?php get_header(); ?>
<main class="contatti mb-12">
    <!-- Hero progetti -->
    <section class="w-full pt-48">
        <div class="w-full h-full container mx-auto flex flex-col justify-center px-6">
            <h1 class="lg:w-7/12 md:w-8/12 w-full lg:text-8xl md:text-7xl text-4xl text-gray-900 dark:text-gray-100">
                Iniziamo assieme un nuovo progetto
            </h1>
        </div>
    </section>
    <div class="container mx-auto lg:py-14 md:py-12 py-10 px-6">
        <section class="flex flex-wrap justify-between">
            <div class="lg:w-7/12 w-full lg:ml-[8.33333%] lg:order-1 order-2">
                <?php echo do_shortcode('[ninja_form id=3]'); ?>
            </div>
            <div class="lg:w-3/12 w-full lg:my-8 my-4 lg:order-2 order-1">
                <?php
                if (has_post_thumbnail()) {
                    echo get_the_post_thumbnail(null, 'full', ['class' => 'lg:block hidden w-2/5 aspect-square object-cover rounded-full']);
                } else {
                    echo '<img class="lg:block hidden w-2/5 aspect-square object-cover rounded-full" src="http://federico-toldo-new.local/wp-content/uploads/2023/10/Federico_Toldo.jpeg"/>';
                }; ?>
                <div class="lg:my-10 my-6">
                    <p class="my-2 text-sm text-gray-700 dark:text-gray-300 uppercase">Dettagli di contatto</p>
                    <?php
                    $mail_option_link = get_field('mail_option', 'option');
                    if ($mail_option_link) :
                        $mail_option_link_url = $mail_option_link['url'];
                        $mail_option_link_title = $mail_option_link['title'];
                        $mail_option_link_target = $mail_option_link['target'] ? $mail_option_link['target'] : '_self';
                    ?>
                        <a class="text-lg text-gray-900 dark:text-gray-100 lg:hover:text-gray-600 dark:lg:hover:text-gray-300 lg:hover:tracking-wide transition-all duration-300" href="<?php echo esc_url($mail_option_link_url); ?>" target="<?php echo esc_attr($mail_option_link_target); ?>">
                            <?php echo esc_html($mail_option_link_title); ?>
                        </a>
                    <?php endif; ?>
                </div>
                <ul class="lg:my-10 my-6">
                    <li class="my-2 text-sm text-gray-700 dark:text-gray-300 uppercase">Informazioni</li>
                    <li class="my-2 text-lg text-gray-900 dark:text-gray-100">P.IVA 123456789</li>
                    <li class="my-2 text-lg text-gray-900 dark:text-gray-100">Località: Italia</li>
                </ul>
                <ul class="lg:block hidden lg:my-10 my-6">
                    <li class="my-2 text-sm text-gray-700 dark:text-gray-300 uppercase">Social</li>
                    <li class="my-2 text-lg">
                        <?php
                        $linkedin_option_link = get_field('linkedin_option', 'option');
                        if ($linkedin_option_link) :
                            $linkedin_option_link_url = $linkedin_option_link['url'];
                            $linkedin_option_link_title = $linkedin_option_link['title'];
                            $linkedin_option_link_target = $linkedin_option_link['target'] ? $linkedin_option_link['target'] : '_self';
                        ?>
                            <a class="flex text-gray-900 dark:text-gray-100 lg:hover:text-gray-600 dark:lg:hover:text-gray-300 lg:hover:tracking-wide transition-all duration-300" href="<?php echo esc_url($linkedin_option_link_url); ?>" target="<?php echo esc_attr($linkedin_option_link_target); ?>">
                                <img class="mr-2 dark:hidden" src="<?php echo get_template_directory_uri() . '/img/icon/mdi_linkedin.svg'; ?>" alt="">
                                <img class="mr-2 hidden dark:flex" src="<?php echo get_template_directory_uri() . '/img/icon/mdi_linkedin_w.svg'; ?>" alt="">
                                <?php echo esc_html($linkedin_option_link_title); ?>
                            </a>
                        <?php endif; ?>
                    </li>
                    <li class="my-2 text-lg">
                        <?php
                        $github_option_link = get_field('github_option', 'option');
                        if ($github_option_link) :
                            $github_option_link_url = $github_option_link['url'];
                            $github_option_link_title = $github_option_link['title'];
                            $github_option_link_target = $github_option_link['target'] ? $github_option_link['target'] : '_self';
                        ?>
                            <a class="flex text-gray-900 dark:text-gray-100 lg:hover:text-gray-600 dark:lg:hover:text-gray-300 lg:hover:tracking-wide transition-all duration-300" href="<?php echo esc_url($github_option_link_url); ?>" target="<?php echo esc_attr($github_option_link_target); ?>">
                                <img class="mr-2 dark:hidden" src="<?php echo get_template_directory_uri() . '/img/icon/mdi_github.svg'; ?>" alt="">
                                <img class="mr-2 hidden dark:flex" src="<?php echo get_template_directory_uri() . '/img/icon/mdi_github_w.svg'; ?>" alt="">
                                <?php echo esc_html($github_option_link_title); ?>
                            </a>
                        <?php endif; ?>
                    </li>
                </ul>
            </div>
        </section>
    </div>
</main>
<?php get_footer(); ?>