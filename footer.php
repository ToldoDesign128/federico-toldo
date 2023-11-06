<section id="footerScrollText" class="relative w-full flex items-center h-32 overflow-hidden bg-gray-900 dark:bg-gray-600 mt-8">
    <div class="scrollText w-full flex">
        <p class="text-gray-200 lg:text-6xl md:text-5xl text-3xl whitespace-nowrap uppercase"> Federico Toldo <span> • Design e Sviluppo Web • </span> Federico Toldo <span> • Design e Sviluppo Web • </span>Federico Toldo <span> • Design e Sviluppo Web • </span> Federico Toldo <span> • Design e Sviluppo Web • </span></p>
        <p class="text-gray-200 lg:text-6xl md:text-5xl text-3xl whitespace-nowrap uppercase"> Federico Toldo <span> • Design e Sviluppo Web • </span> Federico Toldo <span> • Design e Sviluppo Web • </span>Federico Toldo <span> • Design e Sviluppo Web • </span> Federico Toldo <span> • Design e Sviluppo Web • </span></p>
        <p class="text-gray-200 lg:text-6xl md:text-5xl text-3xl whitespace-nowrap uppercase"> Federico Toldo <span> • Design e Sviluppo Web • </span> Federico Toldo <span> • Design e Sviluppo Web • </span>Federico Toldo <span> • Design e Sviluppo Web • </span> Federico Toldo <span> • Design e Sviluppo Web • </span></p>
    </div>
</section>

<footer class="w-full bg-gray-200 dark:bg-gray-800 border-t border-gray-300 dark:border-gray-900 md:py-16 py-8 z-10">
    <section class="flex md:flex-row flex-wrap container w-full max-h-fit mx-auto px-6 justify-between">
        <!-- Section contatti -->
        <div class="lg:w-4/12 w-full lg:my-0 my-6">
            <nav class="">
                <?php
                wp_nav_menu(array(
                    'theme_location'    => 'secondary',
                    'container'         =>  false,
                    'menu_class'        => 'lg:text-4xl md:text-3xl text-2xl text-gray-900 dark:text-gray-100',
                    'orderby'           => 'menu_order'
                )); ?>
            </nav>
        </div>
        <!-- Section contatti     -->
        <div class="flex flex-col justify-between lg:w-4/12 w-full lg:my-0 my-6">
            <div class="flex md:flex-row flex-col justify-between mb-12">
                <ul class="md:w-1/2 w-full">
                    <li class="my-2 text-gray-900 dark:text-gray-100">federicotoldo.com</li>
                    <li class="my-2 text-gray-900 dark:text-gray-100">P.IVA 123456789</li>
                    <li class="my-2 text-gray-900 dark:text-gray-100">©2023 Federico Toldo</li>
                </ul>
                <ul class="lg:w-1/2 md:w-5/12 w-full md:ml-8">
                    <li class="my-2">
                        <?php
                        $mail_option_link = get_field('mail_option', 'option');
                        if ($mail_option_link) :
                            $mail_option_link_url = $mail_option_link['url'];
                            $mail_option_link_title = $mail_option_link['title'];
                            $mail_option_link_target = $mail_option_link['target'] ? $mail_option_link['target'] : '_self';
                        ?>
                            <a class="flex text-gray-900 dark:text-gray-100 lg:hover:text-gray-600 dark:lg:hover:text-gray-300 lg:hover:tracking-wide transition-all duration-300" href="<?php echo esc_url($mail_option_link_url); ?>" target="<?php echo esc_attr($mail_option_link_target); ?>">
                                <img width="24px" height="24px" class="mr-2 dark:hidden" src="<?php echo get_template_directory_uri() . '/img/icon/mdi_email.svg'; ?>" alt="mail">
                                <img width="24px" height="24px" class="mr-2 hidden dark:flex" src="<?php echo get_template_directory_uri() . '/img/icon/mdi_email_w.svg'; ?>" alt="mail-dark">
                                <?php echo esc_html($mail_option_link_title); ?>
                            </a>
                        <?php endif; ?>
                    </li>
                    <li class="my-2">
                        <?php
                        $linkedin_option_link = get_field('linkedin_option', 'option');
                        if ($linkedin_option_link) :
                            $linkedin_option_link_url = $linkedin_option_link['url'];
                            $linkedin_option_link_title = $linkedin_option_link['title'];
                            $linkedin_option_link_target = $linkedin_option_link['target'] ? $linkedin_option_link['target'] : '_self';
                        ?>
                            <a class="flex text-gray-900 dark:text-gray-100 lg:hover:text-gray-600 dark:lg:hover:text-gray-300 lg:hover:tracking-wide transition-all duration-300" href="<?php echo esc_url($linkedin_option_link_url); ?>" target="<?php echo esc_attr($linkedin_option_link_target); ?>">
                                <img width="24px" height="24px" class="mr-2 dark:hidden" src="<?php echo get_template_directory_uri() . '/img/icon/mdi_linkedin.svg'; ?>" alt="">
                                <img width="24px" height="24px" class="mr-2 hidden dark:flex" src="<?php echo get_template_directory_uri() . '/img/icon/mdi_linkedin_w.svg'; ?>" alt="">
                                <?php echo esc_html($linkedin_option_link_title); ?>
                            </a>
                        <?php endif; ?>
                    </li>
                    <li class="my-2">
                        <?php
                        $github_option_link = get_field('github_option', 'option');
                        if ($github_option_link) :
                            $github_option_link_url = $github_option_link['url'];
                            $github_option_link_title = $github_option_link['title'];
                            $github_option_link_target = $github_option_link['target'] ? $github_option_link['target'] : '_self';
                        ?>
                            <a class="flex text-gray-900 dark:text-gray-100 lg:hover:text-gray-600 dark:lg:hover:text-gray-300 lg:hover:tracking-wide transition-all duration-300" href="<?php echo esc_url($github_option_link_url); ?>" target="<?php echo esc_attr($github_option_link_target); ?>">
                                <img width="24px" height="24px" class="mr-2 dark:hidden" src="<?php echo get_template_directory_uri() . '/img/icon/mdi_github.svg'; ?>" alt="">
                                <img width="24px" height="24px" class="mr-2 hidden dark:flex" src="<?php echo get_template_directory_uri() . '/img/icon/mdi_github_w.svg'; ?>" alt="">
                                <?php echo esc_html($github_option_link_title); ?>
                            </a>
                        <?php endif; ?>
                    </li>
                </ul>
            </div>
            <div class="w-full flex justify-between items-center">
                <a href="privacy-policy" class="text-gray-900 dark:text-gray-100 lg:hover:text-gray-600 dark:lg:hover:text-gray-300 lg:hover:tracking-wide transition-all duration-300">Privacy Policy</a>
                <!-- Icona dark mode -->
                <div>
                    <a id="theme-switcher" class="hidden dark:block w-full whitespace-nowrap bg-transparent px-3 py-2 text-sm font-normal text-gray-700 disabled:pointer-events-none disabled:bg-transparent disabled:text-gray-400 dark:text-gray-100" href="#" data-theme="light">
                        <div class="pointer-events-none">
                            <div class="inline-block w-[24px] text-center mr-4" data-theme-icon="light">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="inline-block h-6 w-6">
                                    <path d="M12 2.25a.75.75 0 01.75.75v2.25a.75.75 0 01-1.5 0V3a.75.75 0 01.75-.75zM7.5 12a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM18.894 6.166a.75.75 0 00-1.06-1.06l-1.591 1.59a.75.75 0 101.06 1.061l1.591-1.59zM21.75 12a.75.75 0 01-.75.75h-2.25a.75.75 0 010-1.5H21a.75.75 0 01.75.75zM17.834 18.894a.75.75 0 001.06-1.06l-1.59-1.591a.75.75 0 10-1.061 1.06l1.59 1.591zM12 18a.75.75 0 01.75.75V21a.75.75 0 01-1.5 0v-2.25A.75.75 0 0112 18zM7.758 17.303a.75.75 0 00-1.061-1.06l-1.591 1.59a.75.75 0 001.06 1.061l1.591-1.59zM6 12a.75.75 0 01-.75.75H3a.75.75 0 010-1.5h2.25A.75.75 0 016 12zM6.697 7.757a.75.75 0 001.06-1.06l-1.59-1.591a.75.75 0 00-1.061 1.06l1.59 1.591z" />
                                </svg>
                            </div>
                            <span data-theme-name="light">Light</span>
                        </div>
                    </a>
                    <a id="theme-switcher" class="block dark:hidden w-full whitespace-nowrap bg-transparent px-3 py-2 text-sm font-normal text-gray-700 disabled:pointer-events-none disabled:bg-transparent disabled:text-gray-400 dark:text-gray-100" href="#" data-theme="dark" data-te-dropdown-item-ref>
                        <div class="pointer-events-none">
                            <div class="inline-block w-[24px] text-center mr-4" data-theme-icon="dark">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="inline-block h-6 w-6">
                                    <path fill-rule="evenodd" d="M9.528 1.718a.75.75 0 01.162.819A8.97 8.97 0 009 6a9 9 0 009 9 8.97 8.97 0 003.463-.69.75.75 0 01.981.98 10.503 10.503 0 01-9.694 6.46c-5.799 0-10.5-4.701-10.5-10.5 0-4.368 2.667-8.112 6.46-9.694a.75.75 0 01.818.162z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <span data-theme-name="dark">Dark</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
</footer>
<?php wp_footer(); ?>
</body>

</html>