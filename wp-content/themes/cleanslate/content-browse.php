<?php
/**
 * The template for the browse page.
 *
 * @package CleanSlate
 * @since CleanSlate 0.1
 */
?>
    
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