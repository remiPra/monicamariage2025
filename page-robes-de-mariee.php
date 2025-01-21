<?php
   /*
   Template Name: Page Robes de Mariée
   */
   
   get_header();
   ?>

   <main id="primary" class="site-main">
       <h1><?php the_title(); ?></h1>
       
       <!-- Votre contenu personnalisé pour les robes -->
       <div class="robes-container">
           <!-- Ajoutez ici votre code HTML/PHP pour afficher les robes -->
       </div>

       <?php
       // Si vous voulez inclure le contenu de l'éditeur WordPress
       while ( have_posts() ) :
           the_post();
           get_template_part( 'template-parts/content', 'page' );
       endwhile;
       ?>
   </main>

   <?php
//    get_sidebar();
   get_footer();