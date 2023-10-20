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
                <?php echo do_shortcode('[ninja_form id=1]'); ?>
            </div>
            <div class="lg:w-3/12 w-full lg:my-8 my-4 lg:order-2 order-1">
                <img class="lg:block hidden w-2/5 aspect-square object-cover rounded-full" src="http://federico-toldo-new.local/wp-content/uploads/2023/10/Federico_Toldo.jpeg" />
                <div class="lg:my-10 my-6">
                    <p class="my-2 text-sm text-gray-700 dark:text-gray-300 uppercase">Dettagli di contatto</p>
                    <a class="text-lg text-gray-900 dark:text-gray-100 lg:hover:text-gray-600 dark:lg:hover:text-gray-300 lg:hover:tracking-wide transition-all duration-300" href="mailto:info@federicotoldo.com" target="_blank">info@federicotoldo.com</a>
                </div>
                <ul class="lg:my-10 my-6">
                    <li class="my-2 text-sm text-gray-700 dark:text-gray-300 uppercase">Informazioni</li>
                    <li class="my-2 text-lg text-gray-900 dark:text-gray-100">P.IVA 123456789</li>
                    <li class="my-2 text-lg text-gray-900 dark:text-gray-100">Località: Italia</li>
                </ul>
                <ul class="lg:block hidden lg:my-10 my-6">
                    <li class="my-2 text-sm text-gray-700 dark:text-gray-300 uppercase">Social</li>
                    <li class="my-2 text-lg"><a class="flex text-gray-900 dark:text-gray-100 lg:hover:text-gray-600 dark:lg:hover:text-gray-300 lg:hover:tracking-wide transition-all duration-300" href="#" target="_blank">
                            <img class="mr-2 dark:hidden" src="<?php echo get_template_directory_uri() . '/img/icon/mdi_linkedin.svg'; ?>" alt="">
                            <img class="mr-2 hidden dark:flex" src="<?php echo get_template_directory_uri() . '/img/icon/mdi_linkedin_w.svg'; ?>" alt="">
                            Linkedin
                        </a>
                    </li>
                    <li class="my-2 text-lg"><a class="flex text-gray-900 dark:text-gray-100 lg:hover:text-gray-600 dark:lg:hover:text-gray-300 lg:hover:tracking-wide transition-all duration-300" href="#" target="_blank">
                            <img class="mr-2 dark:hidden" src="<?php echo get_template_directory_uri() . '/img/icon/mdi_github.svg'; ?>" alt="">
                            <img class="mr-2 hidden dark:flex" src="<?php echo get_template_directory_uri() . '/img/icon/mdi_github_w.svg'; ?>" alt="">
                            GitHub
                        </a>
                    </li>
                </ul>
            </div>
        </section>
    </div>
</main>
<?php get_footer(); ?>