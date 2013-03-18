<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after. Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Denver Virtual Office
 * @since Denver Virtual Office
 */
?>
	</div><!-- #main -->
    <div class="footer-wrap">
	<div id="footer" role="contentinfo">
        <span>Follow us on</span>
        <ul class="social">
            <li><a class="twitter" href="http://twitter.com"></a></li>
            <li><a class="facebook" href="http://facebook.com"></a></li>
            <li><a class="rss" href="http://rss.i.ua/"></a></li>
        </ul>
        <span class="copyright">&copy; 2011 DVO</span>
        <ul class="categories">
            <li>
                <h3>Denver Virtual Offices</h3>
                <ul class="subjects">
                    <li><a href="#">How it works</a></li>
                    <li><a href="#">Tour</a></li>
                    <li><a href="#">Free Training</a></li>
                </ul>
            </li>
            <li>
                <h3>Company</h3>
                <ul class="subjects">
                    <li><a href="#">About</a></li>
                    <li><a href="#">Jobs</a></li>
                    <li><a href="#">Carrere</a></li>
                </ul>
            </li>
            <li>
                <h3>Product</h3>
                <ul class="subjects">
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Support</a></li>
                    <li><a href="#">Send Feedback</a></li>
                </ul>
            </li>
        </ul>
	</div><!-- #footer -->
    </div><!--footer-wrap-->
</div><!-- #wrapper -->

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>
