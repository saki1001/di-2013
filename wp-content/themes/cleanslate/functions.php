<?php
/**
 * Cleanslate functions and definitions
 *
 * @package CleanSlate
 * @since CleanSlate 0.1
 */

function register_jquery() {
    wp_enqueue_script( 'jquery' );
}
add_action('wp_enqueue_scripts', 'register_jquery');

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

function the_excerpt_max_charlength($charlength) {
    $excerpt = get_the_excerpt();
    $charlength++;
    
    if ( mb_strlen( $excerpt ) > $charlength ) {
        $subex = mb_substr( $excerpt, 0, $charlength - 5 );
        $exwords = explode( ' ', $subex );
        $excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
        if ( $excut < 0 ) {
            echo mb_substr( $subex, 0, $excut );
        } else {
            echo $subex;
        }
        echo '[...]';
    } else {
        echo $excerpt;
    }
}

function get_category_tags($args) {
    global $wpdb;
    $tags = $wpdb->get_results
    ("
        SELECT DISTINCT terms2.term_id as tag_id, terms2.name as tag_name, null as tag_link
        FROM
            wp_posts as p1
            LEFT JOIN wp_term_relationships as r1 ON p1.ID = r1.object_ID
            LEFT JOIN wp_term_taxonomy as t1 ON r1.term_taxonomy_id = t1.term_taxonomy_id
            LEFT JOIN wp_terms as terms1 ON t1.term_id = terms1.term_id,

            wp_posts as p2
            LEFT JOIN wp_term_relationships as r2 ON p2.ID = r2.object_ID
            LEFT JOIN wp_term_taxonomy as t2 ON r2.term_taxonomy_id = t2.term_taxonomy_id
            LEFT JOIN wp_terms as terms2 ON t2.term_id = terms2.term_id
        WHERE
            t1.taxonomy = 'category' AND p1.post_status = 'publish' AND terms1.term_id IN (".$args['categories'].") AND
            t2.taxonomy = 'post_tag' AND p2.post_status = 'publish'
            AND p1.ID = p2.ID
        ORDER by tag_name
    ");
    
    return $tags;
}

// Adding Thumbnails
add_theme_support( 'post-thumbnails' );

// Adding Custom Thumbnail Size for Browse page
add_image_size( 'browse-thumbnail', 392, 392, true );
add_image_size( 'promo-thumbnail', 335, 335, true );


// Alter the Loop for homepage
function most_recent_post( $query ) {
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

// Prevent from adding link to inserted imgaes
update_option('image_default_link_type','none');

/**
 * This theme was built with PHP, Semantic HTML, CSS, love, and a Toolbox.
 */