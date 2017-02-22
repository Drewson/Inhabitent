<?php
/**
 * Template Name: About Page
 *
 * @package Inhabitent Theme
 */


get_header('home'); ?>
	<main id="main" class="site-main page-about" role="main">
		<header class="about-head">
			<h1>About</h1>
		</header>
        //change url when file .. slcak yadda yaddaa wp_add_inline_style .--put in extras.php //
		<div id="content">
            <h2>Our Team</h2>
            <?php echo CFS()->get('about_our_team'); ?>
            
		</div>
	</main><!-- #main -->
 
<?php get_footer(); ?>
