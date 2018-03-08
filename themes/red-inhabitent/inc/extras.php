<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package Inhabitent
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function inhabitent_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'inhabitent_body_classes' );

// Customizing_the_Login_Form codex.wordpress.org
// Change the logo on the WP login screen to be Inhabitent’s logo
function inhabitent_login_logo() { ?>
	<style type="text/css">
		.login {
			background-color: skyblue;
		}
        #login h1 a, .login h1 a {
        background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/inhabitent-logo-text-dark.svg);
		height:65px;
		width:320px;
		background-size: 320px 65px;
		background-repeat: no-repeat;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'inhabitent_login_logo' );
// Update the URL that the logo points to be the site’s homepage URL (instead of wordpress.org).
function inhabitent_login_logo_url($url) {
	return get_home_url();
}
add_filter( 'login_headerurl', 'inhabitent_login_logo_url' );
// Change the logo's title (instead of "Powered by WordPress")
function inhabitent_login_logo_url_title() {
    return 'Inhabitent';
}
add_filter( 'login_headertitle', 'inhabitent_login_logo_url_title' );


// Change and style About hero banner
function style_about_banner () {
	if (!is_page_template('about.php')) {
		return; 
	}
	$background_image = CFS() -> get ('background_hero');
	$custom_css = "
			.page-template-about .entry-header{
				height: 100vh;
				display: flex;
				justify-content: center;
				align-items: center;
				background: linear-gradient( to bottom, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100% ), 
							url($background_image) no-repeat center bottom;
				background-size: cover, cover;
				color: #fff;
			}
			";
	wp_add_inline_style( 'inhabitent-style', $custom_css );
}
add_action( 'wp_enqueue_scripts', 'style_about_banner' );

//  Excerpt_length'
function inhabitent_excerpt_length( $length ) {
    return 50;
}
add_filter( 'excerpt_length', 'inhabitent_excerpt_length', 999 );

// Alternative Sort Shop page alphabetically
// function shop_items_sort($query){
//     if(
//         is_post_type_archive('product')
//     )
//     {
// 		$query->set('posts_per_page', 16);
// 		$query->set('orderby', 'title');
//      $query->set('order', 'ASC');
//     }
// }
// add_action('pre_get_posts', 'shop_items_sort');

// Filter the_archive_title remove "PRODUCT-TYPE:"
add_filter( 'get_the_archive_title', function ( $title ) {
    if( is_post_type_archive('product') ) {
		$title = 'Shop Stuff';
    } else if ( is_tax ('product-type')) {
		$title = sprintf('%1$s', single_term_title('', false) ); 
	}
    return $title;
});

