<?php
$related_query = new WP_Query(array(
    'post_type' => 'progetti',
    'category__in' => wp_get_post_categories(get_the_ID()),
    'post__not_in' => array(get_the_ID()),
    'posts_per_page' => 3,
    'orderby' => 'date',
));

if ($related_query->have_posts()) { ?>

    <div class="w-full">
        <h4 class="w-full font-medium lg:text-4xl md:text-3xl text-2xl text-gray-700 dark:text-gray-300 my-6 px-6">
            Progetti Corelati
        </h4>
        <div class="lg:w-9/12 w-full flex justify-between gap-2 px-6">
            <?php while ($related_query->have_posts()) { ?>
                <?php $related_query->the_post(); ?>
                <div class="w-[32%]">
                    <a href="<?php the_permalink(); ?>" class="group">
                    <div class="overflow-hidden rounded">
                        <?php
                        if (has_post_thumbnail()) {
                            echo get_the_post_thumbnail(null, 'large', ['class' => 'w-full aspect-video object-cover group-hover:scale-110 transition-transform']);
                        } else {
                            echo '<img class="w-full aspect-video object-cover rounded group-hover:scale-110 transition-transform" src="http://federico-toldo-new.local/wp-content/uploads/2023/10/Federico_Toldo.jpeg"/>';
                        }; ?>
                    </div>
                    </a>
                    <h5 class="my-4 font-normal text-gray-600 lg:group-hover:text-gray-900 dark:text-gray-400 dark:lg:group-hover:text-gray-100">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h5>
                </div>
            <?php } ?>
        </div>
    </div>

    <?php wp_reset_postdata(); ?>

<?php } ?>