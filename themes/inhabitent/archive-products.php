<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
	<div>
		<main id="main" class="site-main" role="main">
		<?php if ( have_posts() ) : ?>
		<div>
		<?php $term = get_queried_object(); ?>
			<h1 class="shop-title"><?php echo $term -> name; ?></h1>
			<?php the_archive_description( '<div class="taxonomy-description">', '</div>' ); ?>
		</div>
			<ul class="shop-flex">
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<li class="shop-product">
					<div class="image-wrapper">
						<a href="<?php the_permalink(); ?>" ><?php the_post_thumbnail( 'large' ); ?></a>
					</div>
					<div class="text-wrapper">
					<p class="price-text"><?php the_title();?></p>
					<p>$<?php echo CFS()->get('price');?></p>
					</div>
					</li>
			<?php endwhile; ?>
			</ul>
			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
