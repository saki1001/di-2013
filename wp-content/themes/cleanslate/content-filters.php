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
        
        $args = array(
            'categories'=>'2'
        );
        
        $tags = get_category_tags($args);
        
        $count = 0;
        foreach ($tags as $tag) {
            $tag_link = $tag_link = get_tag_link( $tag->tag_id );
    ?>
        <li>
            <a href="<?php echo $tag_link; ?>" title="<?php echo $tag->tag_name; ?> Tag"><?php echo $tag->tag_name; ?></a>
        </li>
    <?php
            $count++;
        }
    ?>
    </ul>
    
    <?php get_search_form(); ?>
    
</div>