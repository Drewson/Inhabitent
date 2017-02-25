<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<!--THE SHOP PAGE-->
	<div>
		<main id="main" class="site-main" role="main">
		<?php if ( have_posts() ) : ?>
		<div>
		<?php $term = get_queried_object(); ?>
			<h1 class="shop-title"><?php the_archive_title(); ?></h1>
			<?php the_archive_description( '<div class="taxonomy-description">', '</div>' ); ?>
			<ul class="shop-nav">
				<?php    
					$terms = get_terms( array(
					'taxonomy' => 'product_type',
					));
					foreach ($terms as $term) :
					$url = get_term_link( $term->slug , 'product_type');              
				?>  
				<li><a href='<?php echo $url?>' ><p class="shop-categor"><?php echo $term->slug; ?></p></a></li>
    			<?php endforeach; ?>
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
