<?php

/**
 * Ignores of WordPress things.
 *
 * @package WordPoints_L10n_Validator_Config
 * @since 1.0.0
 */

WP_L10n_Validator::register_config_callback( function( $parser ) {

	$parser->add_ignored_functions(
		array(
			// Functions.
			'_deprecated_argument' => true,
			'_deprecated_file' => true,
			'_doing_it_wrong' => true,
			'add_site_option' => true,
		)
	);

	$parser->add_ignored_strings(
		array(
			'admin.php',
			'widefat',
		)
	);
});

// EOF
