<?php
/**
 * Functions for XIPHE minimal
 */

namespace Xiphe\minimal;

add_action( 'init', function () {
	register_nav_menu( 'primary', __( 'Header Menu', 'xiphe_minimal' ) );
} );


function getMetaDate()
{
	return sprintf(
		'<a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s">%4$s</time></a>',
		esc_url( get_permalink() ),
		esc_attr( get_the_time() ),
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() )
	);
}