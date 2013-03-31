<?php
/**
 * The general template used for displaying page content in page.php.
 *
 * @package CleanSlate
 * @since CleanSlate 0.1
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
    <h2 class="entry-title">
        <?php the_title(); ?>
    </h2>
    
    <?php
        // Define args to get attachments
        $args = array(
            'post_parent' => $post->ID,
            'post_type' => 'attachment',
            'post_mime_type' => 'image',
            'orderby' => 'menu_order',
            'order' => 'ASC'
        );
        
        // Get image attachments
        $attachments = get_posts( $args );
        
        if ( $attachments ) :
            $noImageClass = '';
        else :
            $noImageClass = 'no-image';
        endif;
    ?>
    
    <div class="entry-content <?php echo $noImageClass; ?>">
        <?php the_content(); ?>
    </div>
    
    <?php
        // Insert images as background-image (to show rounded corners)
        // And as a regular image element (which is hidden)
        if ( $attachments ) :
            foreach ( $attachments as $attachment ) {
                
                $image = wp_get_attachment_image( $attachment->ID, 'page' );
                $imageUrl = wp_get_attachment_image_src( $attachment->ID, 'page' );
    ?>
            <figure style="background: url(<?php echo $imageUrl[0]?>) no-repeat center center;">
                <?php
                    echo $image;
                ?>
            </figure>
            <figcaption>
                <?php
                    // Insert image description
                    echo $attachment->post_content;
                ?>
            </figcaption>
    <?php
              }
        else :
            // do nothing
        endif;
    ?>
    
</article><!-- #post-<?php the_ID(); ?> -->