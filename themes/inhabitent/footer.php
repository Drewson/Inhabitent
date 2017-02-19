<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->
			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
					<div class="contact-info">
						<h3>Contact Info</h3>
						<a href="mailto:info@inhabitent.com"><i class="fa fa-envelope"></i> info@inhabitent.com</a>
						<a href="tel:5553434567891"><i class="fa fa-phone"></i>778-456-7891</a>
						<span class='three-icons'>
							<i class="fa fa-facebook-square"></i>
							<i class="fa fa-twitter-square"></i>
							<i class="fa fa-google-plus-square"></i>
						</span>
					</div>
					<div class="business-hours">
						<h3>Business Hours</h3>
						<span class="day-of-week">Monday-Friday: 9am to 5pm</span>
						<span class="day-of-week">Saturday: 10am to 12pm</span>
						<span class="day-of-week">Sunday: Closed</span>
					</div>
					<div class="inhab-logo-text">
						<img src ="<?php echo get_template_directory_uri();?>/images/logos/inhabitent-logo-text.svg" />
					</div>
				</div><!-- .site-info -->
				<div class="copy-right"> 
					</p>COPYRIGHT © 2016 INHABITENT</p>
				</div>
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
