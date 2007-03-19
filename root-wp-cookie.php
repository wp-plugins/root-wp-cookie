<?php
/*
Plugin Name: Root WP Cookie
Plugin URI: http://www.ajalapus.com/downloads/root-wp-cookie/
Version: 1.1.1
Description: Changes the WordPress cookie path to root directory for root-level files that call functions from a WordPress installation under a subdirectory.
Author: Aja Lorenzo Lapus
Author URI: http://www.ajalapus.com/

	Copyright 2006, 2007 Aja Lorenzo Lapus

	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation; either version 2 of the License, or
	(at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

Change Log:
v1.1.1 18-Mar-07:
	- Changed license to GNU GPL.
v1.1:
	- Added wp_clearcookie() function for logging out.
	- Cleaned up unnecessary variables and function calls in the wp_setcookie() function.
v1.0:
	- First release of the Root WP Cookie plugin.
*/

function wp_setcookie($username, $password, $already_md5 = false, $home = '', $siteurl = '', $remember = false) {
	if ( !$already_md5 ) {
		$password = md5(md5($password)); // Double hash the password in the cookie.
	}

	if ( $remember ) {
		$expire = time() + 31536000;
	} else {
		$expire = 0;
	}

	setcookie(USER_COOKIE, $username, $expire, '/', COOKIE_DOMAIN);
	setcookie(PASS_COOKIE, $password, $expire, '/', COOKIE_DOMAIN);
}

function wp_clearcookie() {
	setcookie(USER_COOKIE, ' ', time() - 31536000, '/', COOKIE_DOMAIN);
	setcookie(PASS_COOKIE, ' ', time() - 31536000, '/', COOKIE_DOMAIN);
}