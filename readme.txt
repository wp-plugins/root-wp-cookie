=== Root WP Cookie ===
Contributors: ajalapus
Tags: cookies, login
Requires at least: 2.0
Tested up to: 2.0.7
Stable tag: 1.1.1

Changes the WordPress cookie path to root directory for root-level files that call functions from a WordPress
installation under a subdirectory.

== Description ==

This plugin is most useful when you have your blog under a Web site whose pages use different WordPress functions that
requires you to have logged in.

For example, you'd like to use the `wp_loginout();` function to display the *login* link whenever you are logged out and
the *logout* link otherwise on all pages of your site, but WordPress is installed under `/wp/` where your blog also
resides. Therefore, WordPress creates cookies under the `/wp/` directory only, making you seem logged out on the
directories above the WordPress directory. This plugin will make WordPress create cookies on the root directory of your
domain to eliminate the problem.

== Installation ==

1. Upload `root-wp-cookie.php` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Delete your browser's cookies, or if your browser permits, delete only the old WordPress cookies from your site.

The third process logs you out of your WordPress admin page enabling you to log in again for the cookie to be placed on
the root directory. It may be possible to log out the normal way (i.e., through the link from the admin page) but since
the logout function has been changed to access a root-level cookie, it would probably be unreliable.

== Frequently Asked Questions ==

= What do you plan for the next update of this plugin? =

I plan to include a configuration page for the user to fill in a different directory other than root. This could be
useful for sites that have WordPress deep inside the directory structure, but do not use WordPress functions on much
higher directory levels.

== Screenshots ==

*No screenshots available for this plugin*