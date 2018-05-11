<?php
/**
 * Crio Child functions.php
 *
 * Adds functionality to theme.
 *
 * @since 1.0.0
 */

/**
 * Filters BGTFW Configurations.
 *
 * @param  array $config BGTFW configuration options.
 *
 * @return array $config BGTFW configuration options.
 */
function crio_child_config( $config ) {

	// Override default provided palettes.
	$config['customizer-options']['colors']['settings']['scss_directory']['default'] = get_stylesheet_directory();
	$config['customizer-options']['colors']['defaults'] = array(
		array(
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
		),
		array(
			'format' => 'palette-primary',
			'neutral-color' => '#ffffff',
			'colors' => array(
				'#ffffff',
				'#ffffff',
				'#ffffff',
				'#ffffff',
				'#ffffff',
			),
		),
	);

	return $config;
}


add_filter( 'boldgrid_theme_framework_config', 'crio_child_config', 11 );
