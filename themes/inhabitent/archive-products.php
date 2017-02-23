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
			<?php
			function product_archive_title($title) {
			if(is_post_type_archive('products')) {
				$title = 'Shop Stuff';
			}
				return $title;
			}
			add_filter('get_the_archive_title', 'product_archive_title');
			the_archive_title( '<h1 class="shop-title">', '</h1>' );
			the_archive_description( '<div class="taxonomy-description">', '</div>' );
			?>

			<ul class="shop-nav">
				<li>Do</li>
				<li>Eat</li>
				<li>Sleep</li>
				<li>Wear</li>
			</ul>
		</div>
			<ul class="shop-flex">
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<li class="shop-product">
					<div class="image-wrapper">
						<a href="<?php the_permalink(); ?>" ><?php the_post_thumbnail( 'large' ); ?></a>
					</div>
					<div class="text-wrapper">
					<p class="price-text"><?php the_title();?><div class="dotted-bord"></div>$<?php echo CFS()->get('price');?></p>
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
