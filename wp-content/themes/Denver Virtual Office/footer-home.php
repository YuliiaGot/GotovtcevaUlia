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

	<div id="footer" role="contentinfo">
        <span>Follow us on</span>
        <ul class="social">
            <li><a class="twitter" href="http://twitter.com"></a></li>
            <li><a class="facebook" href="http://facebook.com"></a></li>
            <li><a class="rss" href="http://rss.i.ua/"></a></li>
        </ul>
        <p>Need more than a Virtual Office? check out our Executive Suites button to link to another site.</p>
	</div><!-- #footer -->

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
