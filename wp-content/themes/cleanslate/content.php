<?php
/**
 * The general template for displaying content.
 *
 * @package CleanSlate
 * @since CleanSlate 0.1
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
    <hgroup>
        <h2 class="post-title">
            <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
        </h2>
        
        <?php
            if (get_field('subtitle')) {
        ?>
            <h3 class="post-subtitle"><?php the_field('subtitle'); ?></h3>
        <?php
            }
        ?>
    </hgroup>
    
    <ul class="social-icons">
        <li>
            <a href="http://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?><?php echo (has_post_thumbnail() ? '&media=' . wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) : ''); ?>&description=<?php echo urlencode(get_the_title()); ?>" class="pintrest" title="Pin It" target="_blank"></a>
        </li>
        <li>
            <a href="http://twitter.com/intent/tweet?text=<?php echo urlencode(get_the_title()) . ' ' . get_permalink($post->ID); ?>" class="twitter" title="Tweet this" target="_blank"></a>
        </li>
        <li>
            <a href="http://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" class="facebook" title="Share on Facebook." target="_blank"></a>
        </li>
        <li>
            <a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>" class="linkedin" title="Share on LinkedIn." target="_blank"></a>
        </li>
    </ul>
    
    <div id="text" class="text-container">
        <?php the_content(); ?>
    </div>
    
</article>