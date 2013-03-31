<?php
/**
 * The template for routing Category posts to their respective pages.
 *
 * @package CleanSlate
 * @since CleanSlate 0.1
 */

get_header(); ?>

    <?php if ( have_posts() ) : ?>
        
        <section id="content" role="main">
            
            <?php while ( have_posts() ) : the_post(); ?>
                
                <?php
                    /* Include the Post-Format-specific template for the content.
                     * If you want to overload this in a child theme then include a file
                     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                     */
                    get_template_part( 'content', get_post_format() );
                ?>
                
            <?php endwhile; ?>
            
        </section>
        
    <?php else :
        // Content Not Found Template
        include('content-not-found.php');
        
    endif; ?>
    
<?php get_sidebar(); ?>
<?php get_footer(); ?>