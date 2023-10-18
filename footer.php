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
                        <a class="flex text-gray-900 dark:text-gray-100 lg:hover:text-gray-600 dark:lg:hover:text-gray-300 lg:hover:tracking-wide transition-all duration-300" href="mailto:info@federicotoldo.com" target="_blank">
                            <img class="mr-2 dark:hidden" src="<?php echo get_template_directory_uri() . '/img/icon/mdi_email.svg'; ?>" alt="">
                            <img class="mr-2 hidden dark:flex" src="<?php echo get_template_directory_uri() . '/img/icon/mdi_email_w.svg'; ?>" alt="">
                            info@federicotoldo.com
                        </a>
                    </li>
                    <li class="my-2">
                        <a class="flex text-gray-900 dark:text-gray-100 lg:hover:text-gray-600 dark:lg:hover:text-gray-300 lg:hover:tracking-wide transition-all duration-300" href="#" target="_blank">
                            <img class="mr-2 dark:hidden" src="<?php echo get_template_directory_uri() . '/img/icon/mdi_linkedin.svg'; ?>" alt="">
                            <img class="mr-2 hidden dark:flex" src="<?php echo get_template_directory_uri() . '/img/icon/mdi_linkedin_w.svg'; ?>" alt="">
                            Linkedin
                        </a>
                    </li>
                    <li class="my-2">
                        <a class="flex text-gray-900 dark:text-gray-100 lg:hover:text-gray-600 dark:lg:hover:text-gray-300 lg:hover:tracking-wide transition-all duration-300" href="#" target="_blank">
                            <img class="mr-2 dark:hidden" src="<?php echo get_template_directory_uri() . '/img/icon/mdi_github.svg'; ?>" alt="">
                            <img class="mr-2 hidden dark:flex" src="<?php echo get_template_directory_uri() . '/img/icon/mdi_github_w.svg'; ?>" alt="">
                            GitHub
                        </a>
                    </li>
                </ul>
            </div>
            <div class="w-full flex justify-between items-center">
                <a href="#" class="text-gray-900 dark:text-gray-100 lg:hover:text-gray-600 dark:lg:hover:text-gray-300 lg:hover:tracking-wide transition-all duration-300">Privacy Policy</a>
                <!-- Icona dark mode -->
                <div class="hidden dark:flex">
                    <p class="text-gray-100 mr-2">Go light</p>
                    <img class="sun cursor-pointer" src="<?php echo get_template_directory_uri() . '/img/icon/mdi_sun.svg'; ?>" alt="light_mod">
                </div>
                <div class="flex dark:hidden">
                    <p class="mr-2">Go dark</p>
                    <img class="moon cursor-pointer" src="<?php echo get_template_directory_uri() . '/img/icon/mdi_moon.svg'; ?>" alt="dark_mod">
                </div>
            </div>
        </div>
    </section>
</footer>
<?php wp_footer(); ?>
</body>
</html>