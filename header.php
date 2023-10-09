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

<body <?php body_class(); ?>>
   <header class="w-full py-3">
      <div class="flex container mx-auto py-2 px-4 justify-between items-center">
         <div class="lg:w-40 w-auto flex items-center">
            <button id="hamburgerButton" class="py-4 px-[.5rem] mr-2 border border-gray-950 rounded-full">
               <span class="flex h-px w-8 bg-gray-950"></span>
               <span class="flex h-px w-8 mt-3 bg-gray-950"></span>
            </button>
            <p id="menuOpen" class="lg:flex hidden">Menu</p>
            <p id="menuClose" class="hidden">Close</p>
         </div>
         <a href="#" class="w-auto font-semibold text-gray-950 hover:text-gray-600 hover:tracking-wide transition-all">
            Federico Toldo
         </a>
         <a id="headerCta" href="#" class="lg:flex hidden w-auto border border-gray-950 rounded py-2 px-5">
            Contattami
         </a>
      </div>
      <span id="headerMenuBg" class="flex h-px w-full my-3 bg-gray-950"></span>
      <div class="flex w-full pt-16 px-4">
         <!-- Section info -->
         <div class="w-4/12">
            <div class="flex mb-12">
               <ul class="w-1/2">
                  <li class="my-2">federicotoldo.com</li>
                  <li class="my-2">P.IVA 123456789</li>
                  <li class="my-2">©2023 Federico Toldo</li>
               </ul>
               <ul class="w-1/2">
                  <li class="my-2"><a class="flex hover:text-gray-600 hover:tracking-wide transition-all" href="mailto:info@federicotoldo.com" target="_blank"><img class="mr-2" src="<?php echo get_template_directory_uri() . '/img/icon/mdi_email.svg'; ?>" alt="">info@federicotoldo.com</a></li>
                  <li class="my-2"><a class="flex hover:text-gray-600 hover:tracking-wide transition-all" href="#" target="_blank"><img class="mr-2" src="<?php echo get_template_directory_uri() . '/img/icon/mdi_linkedin.svg'; ?>" alt="">Linkedin</a></li>
                  <li class="my-2"><a class="flex hover:text-gray-600 hover:tracking-wide transition-all" href="#" target="_blank"><img class="mr-2" src="<?php echo get_template_directory_uri() . '/img/icon/mdi_github.svg'; ?>" alt="">GitHub</a></li>
               </ul>
            </div>
            <a href="#" class="w-full hover:text-gray-600 hover:tracking-wide transition-all">Privacy Policy</a>
            <?php echo get_the_post_thumbnail( null,'large', ['class' => 'w-full my-12 aspect-video object-cover']);?>
         </div>
         <!-- Section page -->
         <div class="w-4/12">

         </div>
         <!-- Section stiky post -->
         <div class="w-4/12">
   
         </div>
      </div>
   </header>