<?php defined( 'ABSPATH' ) || exit;

/**
 * Basic content restriction shortcodes plugin for WordPress
 *
 * @package		toongeeprime-restrict-content
 * @link		https://github.com/toongeeprime/wp-restrict-content-shortcodes
 * @author		ToongeePrime <toongeeprime@gmail.com>
 * @copyright		2022
 * @license		GPL v2 or later
 *
 * Plugin Name:		ToongeePrime Restrict Content
 * Description:		Shortcodes to Restrict contents based on whether users are logged in or logged out
 * Version:		1.0
 * Plugin URI:		https://github.com/toongeeprime/wp-restrict-content-shortcodes
 * Author:		ToongeePrime
 * Author URI:		https://github.com/toongeeprime/
 * Text Domain:		toongeeprime-restrict-content
 * Domain Path:		/languages/
 * Requires PHP:	5.3
 * Requires at least:	5.5
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 */




/**
 *	SHORTCODE - SHOW CONTENT TO LOGGED IN USERS
 */
add_shortcode( 'showto_loggedin_users', 'toongeeprime_showTo_loggedIn' );
function toongeeprime_showTo_loggedIn( $atts, $content, $tag ) {
	// check that user is logged in
	if ( is_user_logged_in() ) {
		$content	=	do_shortcode( $content );
		return '<div class="logged-in-content">' . $content . '</div>';
	}
}


/**
 *	SHORTCODE - SHOW CONTENT TO LOGGED OUT USERS
 */
add_shortcode( 'showto_loggedout_users', 'toongeeprime_showTo_loggedOut' );
function toongeeprime_showTo_loggedOut( $atts, $content, $tag ) {
	// check that user is Not logged in
	if ( ! is_user_logged_in() ) {
		$content = do_shortcode( $content );
		return '<div class="logged-out-content">' . $content . '</div>';
	}
}

