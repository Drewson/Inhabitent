<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

// custom login for theme
function wp_admin_logo() {
     echo '<style type="text/css">                                                                   
         h1 a { background-image:url('.get_stylesheet_directory_uri().'/images/logos/inhabitent-logo-text-dark.svg) !important; 
         height: 120px !important; width: 310px !important; margin-left: -40px; background-size: contain !important;}
         #login .button.button-primary {
             background-color: #248A83;
        }                            
     </style>';
}
add_action('login_head', 'wp_admin_logo');

function admin_logo_url( $url ) {
    return  esc_url( home_url() );
}
add_filter( 'login_headerurl', 'admin_logo_url' );




function inhabitent_about_img_css() {

    if(!is_page_template('page-templates/about.php')){
        return;
    }
    
    $image = CFS()->get('about_header_image'); 

    if(!$image){
        return;
    }

    $hero_css = ".page-template-about .entry-header {
        background:
            linear-gradient( to bottom, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100% ),
            url({$image}) no-repeat center bottom;
        background-size: cover, cover;
    }";

    wp_add_inline_style( 'red-starter-style', $hero_css );
}

add_action( 'wp_enqueue_scripts', 'inhabitent_about_img_css' );


//Ordering the product list, alphabetically, and increasing show count to 16
function post_list( $query ){
    if ( is_post_type_archive( 'products' ) || is_tax() ){
        $query->set( 'posts_per_page', 16);
        $query->set('orderby', 'title');
        $query->set('order', 'ASC');
        return;
    }
}
add_action( 'pre_get_posts', 'post_list', 1);
add_action( '', 'post_list', 1);

function product_archive_title($title) {
    if(is_post_type_archive('products')) {
        $title = 'Shop Stuff';
    }
    return $title;
}
add_filter('get_the_archive_title', 'product_archive_title');

