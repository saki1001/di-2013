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
        <h2 class="page-title">
            <?php
                the_title();
            ?>
        </h2>
        
        <?php
            if (get_field('subtitle')) {
        ?>
            <h3 class="subtitle"><?php the_field('subtitle'); ?></h3>
        <?php
            }
        ?>
    </hgroup>
    
    <ul class="social-icons">
        <li>
            <a href="#" class="pintrest" title="Share with Pintrest."></a>
        </li>
        <li>
            <a href="#" class="twitter" title="Share with Twitter."></a>
        </li>
        <li>
            <a href="#" class="facebook" title="Share with Facebook."></a>
        </li>
        <li>
            <a href="#" class="linkedin" title="Share with LinkedIn."></a>
        </li>
    </ul>
    
    <div id="text" class="text-container">
        <?php the_content(); ?>
    </div>

</article><!-- #post-<?php the_ID(); ?> -->