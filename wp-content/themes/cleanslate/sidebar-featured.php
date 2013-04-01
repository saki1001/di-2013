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
                $posts = get_posts('category=8&numberposts=5');
                
                foreach($posts as $post) {
                    get_template_part( 'content-thumb-sidebar', get_post_format() );
                }
            ?>
            
            </ul>
            
        </div>