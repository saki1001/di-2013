<?php
/**
 * The News category template file.
 *
 * @package CleanSlate
 * @since CleanSlate 0.1
 */

get_header(); ?>
        
    <section id="content" role="main">
        
        <?php
            if ( have_posts() ) :
                
                while ( have_posts() ) : the_post();
                
                    get_template_part( 'content', get_post_format() );
                    
                endwhile;
                
            else :
            // Content Not Found Template
            include('content-not-found.php');
            
            endif;
        ?>
    
    </section>
    
    <?php get_sidebar('recent'); ?>
        
<?php get_footer(); ?>