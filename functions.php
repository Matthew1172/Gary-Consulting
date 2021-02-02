<?php
/**
 * functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Gary Consulting
 * @subpackage gary_consulting
 * @since 1.0.0
 */

/*
 *
 * Hook into css and js
 *
 */
function index_style_enqueue()
{
    $theme_version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style('bootstrapCSS', get_template_directory_uri() . '/inc/bs4/css/bootstrap.min.css', array(), '1.0', 'all');
    wp_enqueue_style( 'starsolutionsconsulting-style', get_stylesheet_uri(), array(), $theme_version );
    wp_enqueue_style( 'google-font', "https://fonts.googleapis.com/css2?family=Lato&family=Raleway:wght@300&display=swap", array(), $theme_version );
}
add_action('wp_enqueue_scripts', 'index_style_enqueue');

function index_script_enqueue()
{
	wp_enqueue_script('bootstrapJS', get_template_directory_uri() . '/inc/bs4/js/bootstrap.bundle.min.js', array('jquery'));
}
add_action('wp_enqueue_scripts', 'index_script_enqueue');

if ( ! function_exists( 'gary_consulting_setup' ) ) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * @since gary_consulting 1.0
	 *
	 * @return void
	 */
    function gary_consulting_setup() {
        
        /**
         * Register Custom Navigation Walker
         */
        register_nav_menus( array(
            'header' => __( 'header', 'STaR Solutions Consulting header' ),
        ) );
        register_nav_menus( array(
            'footer' => __( 'footer', 'STaR Solutions Consulting footer' ),
        ) );
        require_once get_template_directory() . '/inc/navwalker/class-wp-bootstrap-navwalker.php';

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		$logo_width  = 300;
		$logo_height = 100;

		add_theme_support(
			'custom-logo',
			array(
				'height'               => $logo_height,
				'width'                => $logo_width,
				'flex-width'           => true,
				'flex-height'          => true,
				'unlink-homepage-logo' => true,
			)
		);




    }
}
add_action( 'after_setup_theme', 'gary_consulting_setup' );


// Customizer additions.
require get_template_directory() . '/classes/class-gary-consulting-customize.php';
new Gary_Consulting_Customize();