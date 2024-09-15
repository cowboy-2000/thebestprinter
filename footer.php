<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package the_best_printer
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="container site-footer__container">
			<div class="row site-footer__row">
				<div class="col-md-12 site-footer__col">
					<p class="site-footer__copyright copyright">
						<?php bloginfo('name'); ?> &copy; <?php echo get_the_date('Y') . ' ' . get_field('text_copyright', 2); ?> | 
						<a class="copyright__link" href="<?php echo get_the_permalink(3); ?>"><?php echo get_the_title(3); ?></a>
					</p>
				</div><!-- .site-footer__col -->
			</div><!-- .site-footer__row -->
		</div><!-- .site-footer__container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
