<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package CleanSlate
 * @since CleanSlate 0.1
 */
?>
        <div id="sidebar">
            
            <ul class="post-date-nav">
            <?php 
                // BEGIN Previous Post Link Conditional
                if (get_adjacent_post(false, '', true)):
            ?>
                    <li class="prev"><?php previous_post_link('%link', '', TRUE); ?></li>
            <?php
                // END Previous Post Link Conditional
                endif;
            ?>
                <li class="post-date"><?php the_date('l, F j, Y'); ?></li>
            
            <?php
                // BEGIN Next Post Link Conditional
                if (get_adjacent_post(false, '', false)):
            ?>
                <li class="next"><?php next_post_link('%link', '', TRUE); ?></li>
            <?php
                // END Next Post Link Conditional
                endif;
            ?>
            </ul>
            
            <ul class="post-summary">
                <li class="label">
                    <p>Today's Innovation Story</p>
                </li>
                <li>
                    <h4>
                        <?php the_title(); ?>
                    </h4>
                </li>
                <?php
                    // BEGIN Tag Conditional
                    $post_tags = get_the_tags();
                    if ($post_tags) {
                ?>
                <li>
                    <p>Category:&nbsp;
                <?php
                        foreach($post_tags as $tag) {
                            echo $tag->name . ' '; 
                        }
                ?>
                    </p>
                </li>
                <?php
                    }
                    // END Tag Conditional
                ?>
                <li>
                    <p>
                        <?php the_excerpt(); ?>
                    </p>
                </li>
                <?php
                    // BEGIN Learn More Conditional
                    $learn_more_link = get_field('learn_more_link');
                    if ($learn_more_link) {
                ?>
                <li class="learn-more">
                <?php
                        echo "<a href='" . $learn_more_link . "'>Learn More</a>";
                ?>
                </li>
                <?php
                    }
                    // END Learn More Conditional
                ?>
            </ul>
            <?php
                // BEGIN Quote Conditional
                $quote = get_field('quote');
                if ($quote) {
            ?>
            <div class="quote">
                <p>
                    <?php the_field('quote'); ?>
                </p>
            </div>
            <?php
                }
                // END Quote Conditional
            ?>
            <?php
                // BEGIN Promo Graphic Conditional
                $promo_graphic = get_field('promo_graphic');
                $promo_graphic_src = $promo_graphic['sizes']['promo-thumbnail'];
                
                $promo_link = get_field('promo_link');
                $promo_link_href = '#';
                
                if ($promo_link === '') {
                    $promo_link_href = $promo_link;
                }
                
                if ($promo_graphic) {
            ?>
                <div class="promo">
                    <a href="<?php echo $promo_link_href; ?>" style="background: url('<?php echo $promo_graphic_src; ?>') no-repeat 0 0;"></a>
                </div>
            <?php
                }
                // END Promo Graphic Conditional
            ?>
        </div><!-- #sidebar -->