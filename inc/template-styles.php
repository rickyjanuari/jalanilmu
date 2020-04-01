<?php
/**
 * Register theme styles
 *
 * @package  Jalanilmu
 */

/**
* Enqueue styles.
*/
if( !function_exists('jalanilmu_styles') ){
    function jalanilmu_styles() {
        wp_enqueue_style( 'jalanilmu-style', get_stylesheet_uri() );

		do_action('jalanilmu_styles_after_stylesheet');

        wp_enqueue_style( 'jalanilmu-bootstrap-grid', get_template_directory_uri().'/css/bootstrap-grid.min.css');
        wp_enqueue_style( 'jalanilmu-bootstrap-reboot', get_template_directory_uri().'/css/bootstrap-reboot.min.css');
        wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'); 
        wp_enqueue_style( 'jalanilmu-main-style', get_template_directory_uri().'/css/main.css');
        
		wp_enqueue_style( 'dashicons' );

		do_action('jalanilmu_styles_after_mainstyle');

    }
    add_action( 'wp_enqueue_scripts', 'jalanilmu_styles' );
}