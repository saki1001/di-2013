<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after.
 *
 * @package CleanSlate
 * @since CleanSlate 0.1
 */
?>

    </div><!-- #main -->
    <div class="push"></div>
</div><!-- #page -->

<footer id="footer" role="contentinfo">
    <div id="footer-content">
        
        <!-- Begin MailChimp Signup Form -->
        <div id="mc_embed_signup">
        <form action="http://dailydutchinnovation.us4.list-manage.com/subscribe/post?u=681f40249b5ede2e353e319bc&amp;id=0237f13bbd" method="post" id="newsletter-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
            <input type="email" value="Newsletter Signup..." name="EMAIL" class="email" id="n" placeholder="Newsletter Signup..." required>
        </form>
        </div>
        <!--End mc_embed_signup-->
        
        <ul class="social-icons">
            <li>
                <a href="http://pinterest.com/pin/create/button/?url=<?php echo site_url(); ?>&media=<?php echo get_template_directory_uri(); ?>/images/dutch-innovation-logo.png&description=<?php echo urlencode(get_bloginfo('description')); ?>" class="pintrest" title="Pin It" target="_blank"></a>
            </li>
            <li>
                <a href="http://twitter.com/intent/tweet?text=<?php echo urlencode(get_bloginfo('description')) . ' ' . site_url(); ?>" class="twitter" title="Tweet this" target="_blank"></a>
            </li>
            <li>
                <a href="http://www.facebook.com/sharer/sharer.php?u=<?php echo site_url(); ?>" class="facebook" title="Share on Facebook." target="_blank"></a>
            </li>
            <li>
                <a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo site_url(); ?>" class="linkedin" title="Share on LinkedIn." target="_blank"></a>
            </li>
        </ul>
        
        <div id="footer-logo">
            <h4>Pioneers in international business</h4>
        </div>
    </div>
</footer><!-- #footer -->

<?php wp_footer(); ?>

</body>
</html>