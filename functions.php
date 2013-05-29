<?php
/**
 * Functions for XIPHE minimal
 */

add_action( 'init', function () {
	register_nav_menu( 'primary', __( 'Header Menu', 'xiphe_minimal' ) );
} );
