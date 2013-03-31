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
        
        <form id="newsletter-form">
          <input name="newsletter" type="email" placeholder="Newsletter signup...">
          <input type="submit" value="OK">
        </form>
        
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
        
        <div id="footer-logo">
            <h4>Holland: Pioneers in international business</h4>
        </div>
    </div>
</footer><!-- #footer -->

<?php wp_footer(); ?>

</body>
</html>