<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Noto_Simple
 */

?>

        </div><!-- .container -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
        <div class="container">
			<a id="back-to-top" href="#page"><i class="material-icons">keyboard_arrow_up</i></a>
			<p class="copyright">
				&copy;<?php echo date_i18n('Y') . ' '; bloginfo('name'); ?>
			</p>
        </div><!-- .container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
