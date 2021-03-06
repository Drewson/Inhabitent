<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->
			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class='main-footer-container'>
					<div class='footer-widgets'>
						<?php dynamic_sidebar( 'footer' ); ?>
					</div>
					<div class="inhab-logo-text">
						<img src ="<?php echo get_template_directory_uri();?>/images/logos/inhabitent-logo-text.svg" alt="inhabitent-logo" />
					</div>
				</div><!-- .site-info -->
				<div class="copy-right"> 
					<p>COPYRIGHT &copy; 2016 INHABITENT</p>
				</div>
			</footer><!-- #colophon -->
		<?php wp_footer(); ?>
	</body>
</html>
