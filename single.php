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
                        <?php echo get_the_content(); ?>
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