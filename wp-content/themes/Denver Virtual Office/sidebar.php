<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage Denver Virtual Office
 * @since Denver Virtual Office
 */
?>


		<div id="sidebar" role="complementary">
            <ul class="contacts">
<?php
	/* When we call the dynamic_sidebar() function, it'll spit out
	 * the widgets for that widget area. If it instead returns false,
	 * then the sidebar simply doesn't exist, so we'll hard-code in
	 * some default sidebar stuff just in case.
	 */
	if ( ! dynamic_sidebar( 'sidebar' ) ) : ?>

        <li>
                <span class="phone">
                    <strong>Denver Virtual Offices</strong><br/>
                    <span>303.501.1801</span>
                </span>
        </li>
        <li>
                <span class="skype">
                    <strong>Skype</strong><br/>
                    <span>denver.vo</span>
                </span>
        </li>
        <li>
                <span class="mail">
                    <a href="mailto:info@denvervirtualoffices.com">info@denvervirtualoffices.com</a>
                </span>
        </li>

		<?php endif; // end primary widget area ?>
			</ul>
        </div><!--end-of-sidebar-->

