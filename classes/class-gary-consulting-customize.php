<?php
/**
 * Customizer settings for this theme.
 *
 * @package Gary Consulting
 * @subpackage gary_consulting
 * @since 1.0.0
 */

if ( ! class_exists( 'Gary_Consulting_Customize' ) ) {
	/**
	 * Customizer Settings.
	 *
	 * @since Gary Consulting 1.0
	 */
	class Gary_Consulting_Customize {

		/**
		 * Constructor. Instantiate the object.
		 *
		 * @access public
		 *
	     * @since Gary Consulting 1.0
		 */
		public function __construct() {
			add_action( 'customize_register', array( $this, 'register' ) );
		}

		/**
		 * Register customizer options.
		 *
		 * @access public
		 *
		 * @since Gary Consulting 1.0
		 *
		 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
		 *
		 * @return void
		 */
		public function register( $wp_customize ) {

            // Add Settings
            $wp_customize->add_setting('customizer_jumbotron', array(
                'transport'         => 'refresh',
                'height'         => 325,
            ));

            // Add Section
            $wp_customize->add_section('jumbotron', array(
                'title'             => __('Jumbotron', 'name-theme'), 
                'priority'          => 70,
            ));    

            // Add Controls
            $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'customizer_jumbotron_control', array(
                'label'             => __('My Jumbotron', 'name-theme'),
                'section'           => 'jumbotron',
                'settings'          => 'customizer_jumbotron',    
            )));

		}
	}
}
