<?php
/**
 * The template for the browse page.
 *
 * @package CleanSlate
 * @since CleanSlate 0.1
 */
?>
    <div class="browse-filters">
        <p>Filter by:</p>
        
        <ul class="tag-list">
        <?php
            $tags = get_tags();
        
            foreach ( $tags as $tag ) {
                $tag_link = get_tag_link( $tag->term_id );
        ?>
            <li>
                <a href="<?php echo $tag_link; ?>" title="<?php echo $tag->name; ?> Tag"><?php echo $tag->name; ?></a>
            </li>
        <?php
            }
        ?>
        </ul>
        
        <?php get_search_form(); ?>
        
    </div>
    
    <ul class="browse-posts">
<?php
    $i = 0;
    
    while ( have_posts() ) : the_post();
        
        if( $i % 4 == 0 ) :
          $class = 'column first';
        else :
          $class = 'column';
        endif;
?>
        <li class="<?php echo $class; ?>">
            <?php
                get_template_part( 'content-thumb-square', get_post_format() );
            ?>
        </li>
<?php
    $i++;
    endwhile;
?>
    </ul>