<?php get_header();
$page_id = get_queried_object_id();
?>
<main>
    <!-- hero     -->
    <section class="w-full">
        <div class="md:h-[70dvh] overflow-hidden">
            <img width="1536px" height="2048px" class="w-full lg:aspect-video aspect-auto object-cover" src="http://sergiom143.sg-host.com/wp-content/uploads/2023/11/Federico_Toldo.jpeg"/>            
        </div>
        <div class="container flex flex-wrap mx-auto px-6 lg:py-8 py-4">
            <h1 class="md:w-8/12 w-full lg:text-7xl md:text-6xl text-5xl text-gray-900 dark:text-gray-100 my-4" style="line-height: 1.2;">
                <?php echo esc_html(get_field('titolo_about', $page_id)); ?>
            </h1>
            <h2 class="md:w-6/12 w-full lg:text-2xl text-xl text-gray-700 dark:text-gray-300" style="line-height: 1.2;">
                <?php echo esc_html(get_field('testo_hero_about', $page_id)); ?>
            </h2>
        </div>
    </section>

    <!-- Blocco testo img -->
    <section class="w-full lg:py-12 py-8">
        <div class="container mx-auto flex flex-row flex-wrap justify-between px-6">
            <!-- Immagine -->
            <div class="lg:w-5/12 w-full lg:pb-0 pb-8">
                <?php if (get_field('immagine_sezione_about', $page_id)) : ?>
                    <img src="<?php the_field('immagine_sezione_about', $page_id); ?>" class="object-cover aspect-square rounded" alt="Una mia foto" />
                <?php endif; ?>
            </div>
            <!-- Sezione testo -->
            <div class="lg:w-6/12 w-full flex flex-col justify-between">
                <!-- Testo intro -->
                <div class="w-full text-gray-800 dark:text-gray-200">
                    <?php the_field('testo_sezione_about', $page_id); ?>
                </div>
                <!-- Sezione di cosa mi occupo -->
                <div class="w-full lg:pt-0 pt-10">
                    <h3 class="lg:text-5xl text-4xl text-gray-800 dark:text-gray-200 py-6">Di cosa mi occupo</h3>
                    <ul class="flex flex-row flex-wrap justify-between">
                        <?php
                        if (have_rows('servizi_repeater_about', $page_id)) :

                            while (have_rows('servizi_repeater_about', $page_id)) : the_row();

                                $repeater_servizi = get_sub_field('tipo_di_servizio_about', $page_id); ?>
                                <li class="flex lg:w-[28%] md:w-[48%] w-full py-4">
                                    <span class="text-xl mr-2" style="color:red;">⁕</span>
                                    <p class="text-xl text-gray-700 dark:text-gray-300"><?php echo $repeater_servizi; ?></p>
                                </li>
                        <?php
                            endwhile;
                        endif;
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Sezione Servizi -->
    <section class="w-full lg:py-12 py-8">
        <div class="container mx-auto px-6">
            <h4 class="md:w-6/12 w-full lg:text-5xl text-4xl text-gray-800 dark:text-gray-200">
                <?php echo esc_html(get_field('titolo_help_about', $page_id)); ?>
            </h4>
            <div class="w-full lg:pl-[8.333%]">
                <ul class="w-full flex flex-row flex-wrap py-8 justify-between">
                    <li class="lg:w-[30%] w-full">
                        <p class="text-gray-700 dark:text-gray-300 border-b border-gray-400 dark:border-gray-600 py-2">01</p>
                        <p class="text-2xl text-gray-800 dark:text-gray-200 py-2">Design</p>
                        <p class="text-gray-600 dark:text-gray-400 py-2">Con una solida esperienza nella progettazione di siti Web e app, realizzo progetti digitali forti e di facile utilizzo. Progettando un prodotto su misura e mettendo conversione ed esperienza utente al centro così da pubblicare un prodotto web di successo.</p>
                    </li>
                    <li class="lg:w-[30%] w-full">
                        <p class="text-gray-700 dark:text-gray-300 border-b border-gray-400 dark:border-gray-600 py-2">02</p>
                        <p class="text-2xl text-gray-800 dark:text-gray-200 py-2">Sviluppo Web</p>
                        <p class="text-gray-600 dark:text-gray-400 py-2">Sviluppo siti web scalabili adattando perfettamente il design all’esigenza del utente, integrando animazioni e transizioni efficaci. Dando la possibilità al cliente di gestire in maniera semplice ed intuitiva i contenuti del sito.</p>
                    </li>
                    <li class="lg:w-[30%] w-full">
                        <p class="text-gray-700 dark:text-gray-300 border-b border-gray-400 dark:border-gray-600 py-2">03</p>
                        <p class="text-2xl text-gray-800 dark:text-gray-200 py-2">Mantenimento</p>
                        <p class="text-gray-600 dark:text-gray-400 py-2">Mi occupo inoltre di gestire e mantenere un sito web sempre aggiornato ed in sicurezza. Ottimizzando SEO e performance garantisco che il tuo sito sia sempre al Top!</p>
                    </li>
                </ul>
            </div>
        </div>

    </section>

    <!-- Sezione Formazione -->
    <section class="w-full lg:py-12 py-8">
        <div class="container mx-auto px-6">
            <h5 class="md:w-6/12 w-full lg:text-5xl text-4xl text-gray-800 dark:text-gray-200"">
                <?php echo esc_html(get_field('titolo_formazione_about', $page_id)); ?>
            </h5>
            <div class=" w-full lg:pl-[8.333%] py-8">
                <div class="w-full flex lg:flex-row flex-col gap-8">
                    <?php
                    if (have_rows('repeter_formazione_about', $page_id)) :
                        while (have_rows('repeter_formazione_about', $page_id)) : the_row();
                            $repeater_formazione_titolo = get_sub_field('scuola_repeter_formazione', $page_id);
                            $repeater_formazione_testo = get_sub_field('testo_formazione_repeter', $page_id);
                            $repeater_formazione_voto = get_sub_field('votazione_repeater_formazione', $page_id);
                    ?>
                            <div class="border-b border-gray-400 dark:border-gray-600">
                                <p class="text-2xl text-gray-700 dark:text-gray-300 py-2"><?php echo $repeater_formazione_titolo; ?></p>
                                <p class="text-gray-600 dark:text-gray-400 py-2"><?php echo $repeater_formazione_testo; ?></p>
                                <p class="text-gray-400 dark:text-gray-600 py-2"><?php echo $repeater_formazione_voto; ?></p>
                            </div>
                    <?php
                        endwhile;
                    endif;
                    ?>

                </div>
        </div>
        </div>

    </section>
</main>
<?php get_footer(); ?>