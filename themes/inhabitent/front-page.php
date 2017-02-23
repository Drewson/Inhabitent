<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header('home'); ?>

	<div class="hero-banner">
	</div>
	<div class="front-page-content">
	
	<h2>shop stuff</h2>
<div class="shopstuff container">
    <?php    
        $terms = get_terms( array(
          'taxonomy' => 'product_type',
           'orderby' => 'name', ));
        foreach ($terms as $term) :
          $url = get_term_link ($term->slug , 'product_type');              
    ?>  
      <div class="shop-stuff-item">
          <div class="product-icon-image">       
              <img src="<?php echo get_template_directory_uri();?>/images/product-type-icons/<?php echo $term->slug; ?>.svg" alt="">
          </div>
          <p><?php echo $term->description; ?></p>
          <button class="categ-button"><a href='<?php echo $url?>' class='button-link'><?php echo $term->name; ?></a></button> 
	</div>
                        
    <?php endforeach; ?>
</div>


		<h2>Inhabitent Journal</h2>
		<div id="content" class="recent-posts">
			<?php
			$args = array( 'posts_per_page' => 3, 'post_type' => 'post', 'orderby' => 'post-date' );
			$myposts = get_posts( $args );
			foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
				<div class="recent-post">
					<div class="post-image"><?php the_post_thumbnail( 'small' ); ?></div>
					<div class="post-text"><?php red_starter_posted_on(); ?>  / 
					<?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?><br></div>
					<div class="post-title"><?php the_title(); ?></div>
					<button><a href='<?php the_permalink(); ?>'> Read Entry</a></button>
				</div>
			<?php endforeach; 
			wp_reset_postdata();?>
		</div>

		<h2>Latest Adventures</h2>
		<div class="latest-adventures">
		</div>



	</div>

<?php get_footer(); ?>
