<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package CleanSlate
 * @since CleanSlate 0.1
 */
?>
        <div id="sidebar" class="featured">
            
            <h5>Featured</h5>
            
            <ul>
                
            <?php
                // Get posts tagged "Featured"
                $args = array(
                     'numberposts' => 5,
                     'tag_id' => '8'
                 );
                
                $the_query = new WP_Query( $args );
                
                while ( $the_query->have_posts() ) : $the_query->the_post();
                    get_template_part( 'content-thumb-sidebar', get_post_format() );
                endwhile;
                
                wp_reset_query();
            ?>
            
            </ul>
            
        </div>