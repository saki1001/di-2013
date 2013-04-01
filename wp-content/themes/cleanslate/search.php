<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package CleanSlate
 * @since CleanSlate 0.1
 */

 <?php
 /**
  * The template for the Browse category.
  *
  * @package CleanSlate
  * @since CleanSlate 0.1
  */
 ?>

 <?php get_header(); ?>
    
     <section id="content" role="main">
         
         <?php
             if ( have_posts() ) :
                 get_template_part( 'content-browse', get_post_format() );
             else :
             // Content Not Found Template
             include('content-not-found.php');
             
             endif;
         ?>
         
     </section>
     
 <?php get_footer(); ?>