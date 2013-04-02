<?php
/**
 * Toolbox functions and definitions
 *
 * Sets up the theme and provides some helper functions. Some helper functions
 * are used in the theme as custom template tags. Others are attached to action and
 * filter hooks in WordPress to change core functionality.
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development and
 * http://codex.wordpress.org/Child_Themes), you can override certain functions
 * (those wrapped in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before the parent
 * theme's file, so the child theme functions would be used.
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are instead attached
 * to a filter or action hook. The hook can be removed by using remove_action() or
 * remove_filter() and you can attach your own function to the hook.
 *
 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
 *
 * @package CleanSlate
 * @since CleanSlate 0.1
 */

// BELOW IS ADDED BY SAKI
function get_first_attachment() {
    global $post;

    $id = $post->ID;
    $attachments = get_children( array('post_parent' => $id, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => 'DESC', 'orderby' => 'menu_order ASC') );
    $tpl = get_bloginfo('template_url');
    // $nothing = $tpl.'/nothing.jpg';
    $nothing = '';

    if ( empty($attachments) )
        return $nothing;

        foreach ( $attachments as $id => $attachment )
            $link = wp_get_attachment_url($id);
        return $link;
}

// Adding Thumbnails
add_theme_support( 'post-thumbnails' );

// Adding Custom Thumbnail Size for Browse page
add_image_size( 'browse-thumbnail', 222, 222, true );
add_image_size( 'promo-thumbnail', 335, 335, true );


// Alter the Loop for homepage
function most_recent_post( $query ) {
    
    // $current_year = date('Y', current_time('timestamp'));
    // $current_month = date('m', current_time('timestamp'));
    // $current_day = date('j', current_time('timestamp'));
    // 
    //         $args = array(
    //             'cat'      => 2,
    //             'year'     => $current_year,
    //             'monthnum' => $current_month,
    //             'day' => $current_day,
    //             'posts_per_page' => '1',
    //             'order'    => 'ASC'
    //         );
    
    if ( $query->is_home() && $query->is_main_query() ) :
            $query->set('posts_per_page', '1');
            $query->set('cat', '2');
    endif;
}
add_action( 'pre_get_posts', 'most_recent_post' );


function search_filter($query) {
    
    if ( $query->is_search() ) :
        $query->set('cat','2');
    endif;
    
    return $query;
}
 
add_filter('pre_get_posts','search_filter');


// Add "last" class to last post in loop
add_filter('post_class', 'my_post_class');

function my_post_class($classes){
    global $wp_query;
    if(($wp_query->current_post+1) == $wp_query->post_count) $classes[] = 'last';
    return $classes;
}


function register_jquery() {  
    wp_enqueue_script( 'jquery' );  
}       
add_action('wp_enqueue_scripts', 'register_jquery');
 

/**
 * This theme was built with PHP, Semantic HTML, CSS, love, and a Toolbox.
 */