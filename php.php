<?php

/**
 * Ignores of PHP things.
 *
 * @package WordPoints_L10n_Validator_Config
 * @since 1.0.0
 */

WP_L10n_Validator::register_config_callback( function( $parser ) {

	$parser->add_ignored_functions(
		array(
			// Functions.
			'define' => true,
		)
	);

	$parser->add_ignored_strings( array( 'style="display:none;"' ) );
});

// EOF
