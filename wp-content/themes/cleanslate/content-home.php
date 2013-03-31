<?php
/**
 * The template for the homepage.
 *
 * @package CleanSlate
 * @since CleanSlate 0.1
 */
?>

<?php
    if ( have_posts() ) :
        
        
        
        $current_year = date('Y', current_time('timestamp'));
        $current_month = date('m', current_time('timestamp'));
        $current_day = date('j', current_time('timestamp'));
        
        $args = array(
            'cat'      => 2,
            'year'     => $current_year,
            'monthnum' => $current_month,
            'day' => $current_day,
            'order'    => 'ASC'
        );
        
        query_posts( $args );
        
        while ( have_posts() ) : the_post();
            get_template_part( 'content', get_post_format() );
        endwhile;
    
    else :
    // Content Not Found Template
    include('content-not-found.php');
    
    endif;
?>