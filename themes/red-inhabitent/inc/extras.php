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