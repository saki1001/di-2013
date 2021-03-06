<?php
/**
 * The Template for displaying all single posts.
 *
 * @package CleanSlate
 * @since CleanSlate 0.1
 */
?>

<?php get_header(); ?>
    
    <section id="content" role="main">
    
    <?php
        if ( have_posts() ) :
    ?>
            <div id="articles">
            
    <?php
            while ( have_posts() ) : the_post();
                get_template_part('content', get_post_format() );
            endwhile;
    ?>
            
            </div>
    <?php
        else :
            // Content Not Found Template
            include('content-not-found.php');
        
        endif;
    
    ?>
    
    <?php get_sidebar('featured'); ?>
    
    </section>
    
<?php get_footer(); ?>