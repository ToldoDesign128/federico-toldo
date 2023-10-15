<!doctype html>
<html <?php language_attributes(); ?>>

<head>
   <meta charset="<?php bloginfo('charset'); ?>">
   <?php $viewport_content = apply_filters('federicotoldo_viewport_content', 'width=device-width, initial-scale=1'); ?>
   <meta name="viewport" content="<?php echo esc_attr($viewport_content); ?>">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="format-detection" content="telephone=no">
   <meta name="theme-color" content="#1254a2">
   <meta name="description" content="<?php bloginfo('description'); ?>">
   <?php wp_head(); ?>
</head>

<body <?php body_class("bg-gray-100 dark:bg-gray-900"); ?>>
   <header class="w-full fixed py-3 bg-gray-200 dark:bg-gray-800">
      <div class="flex container mx-auto py-2 px-4 justify-between items-center">
         <div class="lg:w-40 w-auto flex items-center">
            <button id="hamburgerButton" class="group py-4 px-[.5rem] mr-2 bg-transparent hover:bg-gray-900 dark:hover:bg-gray-100 border border-gray-900 dark:border-gray-100 rounded-full">
               <span class="flex h-px w-8 bg-gray-900 group-hover:bg-gray-100 dark:bg-gray-100 dark:group-hover:bg-gray-900"></span>
               <span class="flex h-px w-8 mt-3 bg-gray-950 group-hover:bg-gray-100 dark:bg-gray-100 dark:group-hover:bg-gray-900"></span>
            </button>
            <p id="menuOpen" class="lg:flex hidden text-gray-900 dark:text-gray-100">Menu</p>
            <p id="menuClose" class="hidden text-gray-900 dark:text-gray-100">Close</p>
         </div>
         <a href="<?php echo home_url(); ?>" class="w-auto font-semibold text-gray-900 dark:text-gray-100 hover:text-gray-600 dark:hover:text-gray-300 hover:tracking-wide transition-all duration-300">
            Federico Toldo
         </a>
         <a id="headerCta" href="<?php echo get_page_link(get_page_by_title('contatti')->ID); ?>" class="lg:flex hidden w-auto text-gray-900 hover:text-gray-100 dark:text-gray-100 dark:hover:text-gray-900 border bg-transparent hover:bg-gray-900 dark:hover:bg-gray-100 border-gray-900 dark:border-gray-100 rounded py-2 px-5">
            Contattami
         </a>
      </div>
      <span id="headerMenuBg" class="flex h-px w-full my-3 bg-gray-900 dark:bg-gray-100"></span>
      <div class="flex container w-full max-h-fit mx-auto pt-16 px-4">
         <!-- Section info -->
         <div class="w-4/12">
            <div class="flex mb-12">
               <ul class="w-1/2">
                  <li class="my-2 text-gray-900 dark:text-gray-100">federicotoldo.com</li>
                  <li class="my-2 text-gray-900 dark:text-gray-100">P.IVA 123456789</li>
                  <li class="my-2 text-gray-900 dark:text-gray-100">©2023 Federico Toldo</li>
               </ul>
               <ul class="w-1/2">
                  <li class="my-2"><a class="flex text-gray-900 dark:text-gray-100 hover:text-gray-600 dark:hover:text-gray-300 hover:tracking-wide transition-all duration-300" href="mailto:info@federicotoldo.com" target="_blank"><img class="mr-2" src="<?php echo get_template_directory_uri() . '/img/icon/mdi_email.svg'; ?>" alt="">info@federicotoldo.com</a></li>
                  <li class="my-2"><a class="flex text-gray-900 dark:text-gray-100 hover:text-gray-600 dark:hover:text-gray-300 hover:tracking-wide transition-all duration-300" href="#" target="_blank"><img class="mr-2" src="<?php echo get_template_directory_uri() . '/img/icon/mdi_linkedin.svg'; ?>" alt="">Linkedin</a></li>
                  <li class="my-2"><a class="flex text-gray-900 dark:text-gray-100 hover:text-gray-600 dark:hover:text-gray-300 hover:tracking-wide transition-all duration-300" href="#" target="_blank"><img class="mr-2" src="<?php echo get_template_directory_uri() . '/img/icon/mdi_github.svg'; ?>" alt="">GitHub</a></li>
               </ul>
            </div>
            <div class="w-full flex justify-between items-center">
               <a href="#" class="text-gray-900 dark:text-gray-100 hover:text-gray-600 dark:hover:text-gray-300 hover:tracking-wide transition-all duration-300">Privacy Policy</a>
               <!-- Icona dark mode -->
               <img class="sun cursor-pointer" src="<?php echo get_template_directory_uri() . '/img/icon/mdi_sun.svg'; ?>" alt="light_mod">
               <img class="moon cursor-pointer" src="<?php echo get_template_directory_uri() . '/img/icon/mdi_moon.svg'; ?>" alt="dark_mod">
            </div>
            <?php echo get_the_post_thumbnail(null, 'large', ['class' => 'w-full mt-12 aspect-video object-cover rounded']); ?>
         </div>
         <!-- Section page -->
         <div class="w-4/12 ml-[8.333333%]">
            <nav class="">
               <?php
               wp_nav_menu(array(
                  'theme_location'    => 'primary',
                  'container'         =>  false,
                  'menu_class'        => 'lg:text-6xl md:text-5xl text-4xl text-gray-900 dark:text-gray-100',
                  'orderby'           => 'menu_order'
               )); ?>
            </nav>
         </div>
         <!-- Section stiky post -->
         <div class="w-3/12">
            <?php
            $loop = new WP_Query(array(
               'post_type'         => 'progetti',
               'post_status'       => 'publish',
               'orderby'           => 'count',
               'order'             => 'ASC',
               'posts_per_page'    => 1,
            ));

            while ($loop->have_posts()) : $loop->the_post();
            ?>

               <a href="<?php echo the_permalink(); ?>">
                  <article class="w-full h-full relative rounded">
                     <?php echo get_the_post_thumbnail(null, 'large', ['class' => 'w-full h-full brightness-50 hover:brightness-75 rounded transition-all duration-300']); ?>
                     <div class="absolute bottom-0 p-4 text-gray-100 text-4xl z-10">
                        <p class="text-gray-100 text-4xl font-medium">Dai un occhiata al mio ultimo progetto</p>
                        <p class="text-gray-300 text-xl">www.weatherwatersand.com</p> <!-- Da sostituire con il field del URL -->
                     </div>
                  </article>
               </a>

            <?php endwhile; ?>

         </div>
      </div>
   </header>