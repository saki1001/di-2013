<?php
/**
 * The template for tag filters and search bar.
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