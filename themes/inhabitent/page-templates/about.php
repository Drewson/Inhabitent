<?php
/**
 * Template Name: About Page
 *
 * @package Inhabitent Theme
 */


get_header('home'); ?>
	<main id="main" class="site-main page-about" role="main">

	
	
	<header class="entry-header page-template-about">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->


		<div id="content">
            <h2>Our Story</h2>
            <?php echo CFS()->get('about_our_team'); ?>

			<h2>Our Team</h2>
			<?php echo CFS()->get('about_our_team'); ?>
            
		</div>
	</main><!-- #main -->
 
<?php get_footer(); ?>
