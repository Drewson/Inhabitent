<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header('home'); ?>

<!--THE FRONT PAGE-->
	<div class="hero-banner">
	</div>
	<div class="front-page-content">
	
	<h2>shop stuff</h2>
<div class="shopstuff container">
    <?php    
        $terms = get_terms( array(
          'taxonomy' => 'product_type',
           ));
        foreach ($terms as $term) :
          $url = get_term_link( $term->slug , 'product_type');              
    ?>  
      <div class="shop-stuff-item">
          <div>       
              <img src="<?php echo get_template_directory_uri();?>/images/product-type-icons/<?php echo $term->slug; ?>.svg" alt="">
          </div>
          <p><?php echo $term->description; ?></p>
          <a href='<?php echo $url?>' class='button-link'><?php echo $term->name; ?> Stuff</a>
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
			<div class="canoe-pic">
				<p>Getting Back to Nature in a Canoe</p>
				<button><a href="<?php the_permalink(); ?> ">Read More &rarr;</a></button>
			</div>
			<div class="three-pics">
				<div class="beach-pic">
					<p>A Night with Friends at the Beach</p>
					<button><a href="<?php the_permalink(); ?> ">Read More &rarr;</a></button>
				</div>
				<div class="mountain-pic">
					<p>Taking in the View at Big Mountain</p>
					<button><a href="<?php the_permalink(); ?> ">Read More &rarr;</a></button>
				</div>
				<div class="night-pic">
					<p>Star-Gazing at the Night Sky</p>
					<button><a href="<?php the_permalink(); ?> ">Read More &rarr;</a></button>
				</div>
			</div>
		</div>
		<div class="btn-wrp"><button class="adv-btn">More Adventures</button></div>


	</div>

<?php get_footer(); ?>
