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

 //Run parent theme configs first
 require_once get_parent_theme_file_path( 'inc/boldgrid-theme-framework-config/config.php' );

/**
 * Filters BGTFW Configurations.
 *
 * @param  array $config BGTFW configuration options.
 *
 * @return array $config BGTFW configuration options.
 */
function crio_child_config( $config ) {
	//Set up child theme configs
  $config['boldgrid-parent-theme'] = true;
  $config['parent-theme-name'] = 'crio';
  $config['theme_name'] = 'crio-child';
	$config['customizer-options']['colors']['settings']['scss_directory']['default'] = get_stylesheet_directory() . '/css';

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
