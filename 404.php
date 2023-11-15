<?php get_header();?>
<section class="w-full h-[80vh] flex items-center pt-24">
    <div class="container mx-auto px-6">
        <h1 class="lg:text-8xl text-6xl text-center text-gray-900 dark:text-gray-100">404<span class="text-[#eb0000]">*</span></h1>
        <p class="lg:text-xl text-lg text-center text-gray-800 dark:text-gray-200 my-4">Purtroppo la pagina non è stata trovata</p>
        <div class="w-full flex items-center justify-center mt-8">
            <a href="<?php echo home_url(); ?>" class="w-auto text-gray-900 lg:hover:text-gray-100 dark:text-gray-100 dark:lg:hover:text-gray-900 border bg-transparent lg:hover:bg-gray-900 dark:lg:hover:bg-gray-100 border-gray-900 dark:border-gray-100 rounded py-2 px-5">Torna alla Home</a>
        </div>
    </div>
</section>
<?php get_footer();?>