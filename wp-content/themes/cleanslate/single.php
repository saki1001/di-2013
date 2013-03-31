<?php
/**
 * The Template for displaying all single posts.
 *
 * @package CleanSlate
 * @since CleanSlate 0.1
 */
?>
    
    <?php
        get_header();
        
        // Determine parent cat and current cat
        $categories = get_the_category();
        $parent_cat_num = $categories[0]->parent;
        $cat_slug = $categories[0]->slug;
        
        if ($cat_slug === 'browse') :
            $sidebar = '';
        else :
            $sidebar = 'recent';
        endif;
    ?>
    
    <section id="content" role="main">
    
    <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
                
                // Standard Template
                get_template_part('content', get_post_format() );
                
            endwhile; // end of the loop.
    ?>
        
    <?php else :
        // Content Not Found Template
        include('content-not-found.php');
        
    endif; ?>
    
    </section>
    
<?php get_sidebar($sidebar); ?>
<?php get_footer(); ?>