<!doctype html>
<html class="scroll-smooth" <?php language_attributes(); ?>>

<head>
   <meta charset="<?php bloginfo('charset'); ?>">
   <?php $viewport_content = apply_filters('federicotoldo_viewport_content', 'width=device-width, initial-scale=1'); ?>
   <meta name="viewport" content="<?php echo esc_attr($viewport_content); ?>">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="format-detection" content="telephone=no">
   <meta name="theme-color" content="#ff3333">
   <meta name="description" content="<?php bloginfo('description'); ?>">
   <title>
      <?php if (is_archive()) {
         echo get_the_archive_title();
      } else {
         echo the_title();
      }  ?>
   </title>
   <?php wp_head(); ?>
</head>

<body <?php body_class("bg-gray-100 dark:bg-gray-900"); ?>>
   <header class="w-full fixed z-50">
      <div class="relative bg-gray-200 dark:bg-gray-800 z-40">
         <div class="flex container mx-auto py-5 px-6 justify-between items-center">
            <div class="lg:w-3/12 w-auto flex items-center">
               <button id="hamburgerButton" title="Menu Button" class="group py-4 px-[.5rem] mr-2 bg-transparent lg:hover:bg-gray-900 dark:lg:hover:bg-gray-100 border border-gray-900 dark:border-gray-100 rounded-full">
                  <span class="flex h-[0.5px] w-8 bg-gray-900 lg:group-hover:bg-gray-100 dark:bg-gray-100 lg:dark:group-hover:bg-gray-900"></span>
                  <span class="flex h-[0.5px] w-8 mt-3 bg-gray-950 lg:group-hover:bg-gray-100 dark:bg-gray-100 lg:dark:group-hover:bg-gray-900"></span>
               </button>
               <p id="menuOpen" class="lg:flex hidden text-gray-900 dark:text-gray-100">Menu</p>
               <p id="menuClose" class="hidden text-gray-900 dark:text-gray-100">Close</p>
            </div>
            <a href="<?php echo home_url(); ?>" class="lg:w-3/12 w-auto text-center font-semibold text-gray-900 dark:text-gray-100 lg:hover:text-gray-600 dark:lg:hover:text-gray-300 lg:hover:tracking-wide transition-all duration-300">
               Federico Toldo <span class="text-[#eb0000] text-xl">*</span>
            </a>
            <div class="lg:w-3/12 lg:flex justify-end hidden">
               <a id="headerCta" href="<?php echo get_permalink(get_page_by_path('contatti'));; ?>" class="w-auto text-gray-900 lg:hover:text-gray-100 dark:text-gray-100 dark:lg:hover:text-gray-900 border bg-transparent lg:hover:bg-gray-900 dark:lg:hover:bg-gray-100 border-gray-900 dark:border-gray-100 rounded py-2 px-5">
                  Contattami
               </a>
            </div>
         </div>
      </div>
      <span id="headerMenuBg" class="flex h-px w-full bg-gray-300 dark:bg-gray-700 z-50"></span>
      <div id="menu" class="bg-gray-200 dark:bg-gray-800 border-b border-gray-300 dark:border-gray-700 md:py-16 py-8 z-30">
         <div class="flex md:flex-row flex-wrap container w-full max-h-fit mx-auto px-6 justify-between">
            <!-- Section info -->
            <div class="lg:w-4/12 w-full flex flex-col justify-between lg:my-0 md:my-12 my-6 lg:order-1 order-3">
               <div class="md:flex hidden justify-between mb-12">
                  <ul class="w-1/2">
                     <li class="my-2 text-gray-900 dark:text-gray-100">federicotoldo.com</li>
                     <li class="my-2 text-gray-900 dark:text-gray-100">P.IVA 123456789</li>
                     <li class="my-2 text-gray-900 dark:text-gray-100">©2023 Federico Toldo</li>
                  </ul>
                  <ul class="lg:w-1/2 w-5/12">
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
                              <img class="mr-2 dark:hidden" src="<?php echo get_template_directory_uri() . '/img/icon/mdi_linkedin.svg'; ?>" alt="">
                              <img class="mr-2 hidden dark:flex" src="<?php echo get_template_directory_uri() . '/img/icon/mdi_linkedin_w.svg'; ?>" alt="">
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
                              <img class="mr-2 dark:hidden" src="<?php echo get_template_directory_uri() . '/img/icon/mdi_github.svg'; ?>" alt="">
                              <img class="mr-2 hidden dark:flex" src="<?php echo get_template_directory_uri() . '/img/icon/mdi_github_w.svg'; ?>" alt="">
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
            <!-- Section page -->
            <div class="lg:w-4/12 md:w-6/12 w-full lg:ml-[8.333333%] lg:order-2 order-1">
               <nav class="">
                  <?php
                  wp_nav_menu(array(
                     'theme_location'    => 'primary',
                     'container'         =>  false,
                     'menu_class'        => 'lg:text-6xl md:text-5xl text-4xl text-gray-900 dark:text-gray-100',
                     'orderby'           => 'menu_order'
                  ));
                  ?>
               </nav>
            </div>
            <!-- Section stiky post -->
            <div class="lg:w-3/12 md:w-5/12 md:block hidden w-full lg:order-3 order-2">
               <?php
               $loop = new WP_Query(array(
                  'post_type'         => 'progetti',
                  'post_status'       => 'publish',
                  'orderby'           => 'date',
                  'order'             => 'DESC',
                  'posts_per_page'    => 1,
               ));

               while ($loop->have_posts()) : $loop->the_post();
               ?>

                  <a href="<?php echo the_permalink(); ?>">
                     <article class="w-full h-full relative rounded">
                        <?php echo get_the_post_thumbnail(null, 'large', ['class' => 'w-full h-full object-cover brightness-50 lg:hover:brightness-75 rounded transition-all duration-300']); ?>
                        <div class="absolute bottom-0 p-4 text-gray-100 text-4xl z-10">
                           <p class="text-gray-100 text-4xl font-medium py-4">Dai un'occhiata al mio ultimo progetto</p>
                           <p class="text-gray-300 text-xl"><?php echo get_the_title(); ?></p> <!-- Da sostituire con il field del URL -->
                        </div>
                     </article>
                  </a>

               <?php endwhile; ?>

            </div>
         </div>
      </div>
   </header>
   <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
   </div>