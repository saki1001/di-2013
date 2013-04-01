<?php
/**
 * The search form.
 *
 * @package CleanSlate
 * @since CleanSlate 0.1
 */
?>

<?php
    // if( is_category() ) :
    //     // $category = get_the_category();
    //     $category = get_queried_object();
    //     $cat_parent = ( $category->category_parent ) ? $category->category_parent : $category->cat_ID;
    //     $action_url = get_category_link($cat_parent);
    // else :
    //     $action_url = get_bloginfo('home');
    //     if( is_search() ) :
    //         $action_url .= $_SERVER['REQUEST_URI'];
    //     endif;
    // endif;
    
    $action_url = get_bloginfo('home');
    if( is_search() ) :
        $action_url .= $_SERVER['REQUEST_URI'];
    endif;
?>

<form role="search" method="get" id="search-form" action="<?php echo $action_url; ?>">
    <div><label class="screen-reader-text" for="search">Search for:</label>
        <input type="text" value="" name="search" id="search" placeholder="Search..." />
        <!-- <input type="submit" id="searchsubmit" value="Search" /> -->
    </div>
</form>