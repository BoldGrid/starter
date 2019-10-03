<?php
/**
 * Crio Child functions.php
 *
 * Adds functionality to theme.
 *
 * @since 1.0.0
 *
 * @package CrioChild
 */

//Change this, as well as the Text Domain and Theme Name in style.css if you want to name the theme.
$child_theme_name = 'crio-child';

//Run parent theme configs first
require_once get_parent_theme_file_path( 'inc/boldgrid-theme-framework-config/config.php' );

/**
 * Use this function to modify any of the BoldGrid Theme Framework configurations.
 * Reference: https://www.boldgrid.com/docs/configuration-file
 * @param  array $config BGTFW configuration options.
 *
 * @return array $config BGTFW configuration options.
 */
function crio_child_config( $config ) {
	/*
   * --------------------------
   * Set up child theme configs.
   * Do not modify this section.
   * --------------------------
   */
  $config['boldgrid-parent-theme'] = true;
  $config['parent-theme-name'] = 'crio';
  $config['theme_name'] = $child_theme_name;
	$config['customizer-options']['colors']['settings']['scss_directory']['default'] = get_stylesheet_directory() . '/css';
  /*
   * -----------------------------------
   * Modify anything below this point
   * -----------------------------------
   */

	//Demonstration of adding a new saved color palette
	$config['customizer-options']['colors']['defaults'][] = array(
  			'default' => true,
  			'format' => 'palette-primary',
  			'neutral-color' => '#000000',
  			'colors' => array(
  				'#000000',
  				'#000000',
  				'#000000',
  				'#000000',
  				'#000000',
  			),
  		);

	return $config;
}
add_filter( 'boldgrid_theme_framework_config', 'crio_child_config', 11 );

/**
 * Enqueue Child Theme JavaScript and CSS
 * Use css/crio-child.css for custom CSS Rules
 * Use js/crio-child.js for custom JavaScript
 */
 function crio_child_enqueue() {
   wp_enqueue_style( $child_theme_name . '-styles', get_stylesheet_directory_uri() . '/css/crio-child.css', array(), wp_get_theme()->get( 'Version' ) );
   wp_enqueue_script( $child_theme_name . '-scripts', get_stylesheet_directory_uri() . '/js/crio-child.js', array( 'jquery' ), wp_get_theme()->get( 'Version') );
 }
add_action( 'wp_enqueue_scripts', 'crio_child_enqueue', 1 );
