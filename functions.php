<?php
/**
* The Amendment functions and definitions
*
* @link https://developer.wordpress.org/themes/basics/theme-functions/
*
* @package Benjamin
*/

if ( version_compare( $GLOBALS['wp_version'], '4.6', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
	return;
}

// Define some constants
define('BENJAMIN_FULL_WIDTH' , 'usa-width-one-whole');
define('BENJAMIN_FULL_WIDTH_MEDIUM_UP' , 'usa-width-full-medium-up');
define('BENJAMIN_FULL_WIDTH_LARGE_UP' , 'usa-width-full-large-up');

// wide sidebar
define('BENJAMIN_TWO_THIRDS' , 'usa-width-two-thirds');
define('BENJAMIN_ONE_THIRD' , 'usa-width-one-third');

// narrow sidebar
define('BENJAMIN_ONE_FOURTH' , 'usa-width-one-fourth');
define('BENJAMIN_THREE_FOURTHS' , 'usa-width-three-fourths');
define('BENJAMIN_ONE_HALF' , 'usa-width-one-half');

require_once get_template_directory() . '/inc/_inc.php';

function remove_my_post_metaboxes() {
remove_meta_box( 'categorydiv', 'folder', 'side' );
remove_meta_box( 'postimagediv', 'folder', 'side' );
remove_meta_box( 'slugdiv', 'folder', 'normal' );
remove_meta_box( 'wppcp-post-file-attachments-general', 'folder', 'normal' );
remove_meta_box( 'wppcp-post-file-attachments', 'folder', 'normal' );
}
add_action('admin_menu','remove_my_post_metaboxes');
