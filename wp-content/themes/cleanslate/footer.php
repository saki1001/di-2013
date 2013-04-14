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
        
        <!-- <form id="newsletter-form">
          <input name="newsletter" type="email" placeholder="Newsletter signup..." />
        </form> -->
        
        <!-- Begin MailChimp Signup Form -->
        <div id="mc_embed_signup">
        <form action="http://sakisato.us5.list-manage.com/subscribe/post?u=63744d3b2ea40a81b53a5d119&amp;id=552f7e1d30" method="post" id="newsletter-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
            <input type="email" value="" name="EMAIL" class="email" id="n" placeholder="Newsletter Signup..." required>
        </form>
        </div>
        <!--End mc_embed_signup-->
        
        <ul class="social-icons">
            <li>
                <a href="http://pinterest.com/pin/create/button/?url=<?php echo $site_url ?>&media=<?php echo get_template_directory_uri(); ?>/images/dutch-innovation-logo.png&description=Your%20daily%20dose%20of%20%20innovation." title="Pin It" /></a>
            </li>
            <li>
                <a href="http://twitter.com/intent/tweet?text=Your%20daily%20dose%20of%20Dutch%20Innovation&url=?php echo $site_url ?>" class="twitter" title="Tweet this"></a>
            </li>
            <li>
                <a href="http://www.facebook.com/sharer/sharer.php?u=<?php echo $site_url ?>" class="facebook" title="Share on Facebook."></a>
            </li>
            <li>
                <a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo $site_url ?>" class="linkedin" title="Share on LinkedIn."></a>
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