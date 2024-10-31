<?php
/*
Plugin Name: Post Count
Plugin URI: https://wordpress.org/plugins/post-count/
Description: Outputs the total number of posts.
Version: 2.0
Author: Nick Momrik
Author URI: http://nickmomrik.com/
*/

function mdv_post_count() {
    global $wpdb;

	$now = gmdate( 'Y-m-d H:i:s', time() );
	echo number_format( $wpdb->get_var( $wpdb->prepare( "SELECT COUNT(*) FROM $wpdb->posts WHERE post_type = 'post' AND post_status = 'publish' AND post_date_gmt < %s", $now ) ) );
}
