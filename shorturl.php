<?php
/*
Plugin Name: ShortURL
Plugin URI: http://nikolay.com/projects/wordpress/shorturl/
Description: Provides short canonical permalinks to your posts and pages similarly to WordPress.com via its WP.me service.
Author: Nikolay Kolev
Version: 0.4.1
Author URI: http://nikolay.com/
*/

define('SHORTURL_FIELD_NAME', 'Short URL');

if (!function_exists('get_shorturl')) {
	function get_shorturl() {
		$post_id = shorturl_valid_post_id();
		if ($id > 0) {
			$shorturl = shorturl_get_post_shorturl($id);
		} else {
			$shorturl = '';
		}
		return $shorturl;
	}
}

if (!function_exists('the_shorturl')) {
	function the_shorturl() {
		$shorturl = get_shorturl();
		if ($shorturl) {
			echo $shorturl;
		}
	}
}

if (!function_exists('shorturl_shortcode')) {
	function shorturl_shortcode($attrs, $content = null) {
		return get_shorturl();
	}
	add_shortcode('shorturl', 'shorturl_shortcode');
}

function shorturl_get_post_shorturl($id) {
	static $short_url;
	if (!isset($short_url)) {
		if ($id == 0) {
			$short_url = get_bloginfo('url');
		} else {
			$short_url = get_post_meta($id, SHORTURL_FIELD_NAME, true);
			if (empty($short_url)) {
				$short_url = get_bloginfo('url') . '/-' . base_convert($id, 10, 36);
			}
		}
	}
	return $short_url;
}

function shorturl_valid_post_id() {
	global $post;
	if (is_home()) {
		return 0;
	}
	if (is_single() || (is_page() && !is_front_page())) {
		if ($post && $post->ID > 0) {
			return $post->ID;
		}
	}
	return -1;
}

function shorturl_create(&$wp) {
	$id = shorturl_valid_post_id();
	if ($id >= 0) {
		if (!headers_sent()) {
			header('Link: <' . shorturl_get_post_shorturl($id) . '>; rel=shortlink');
		}
	}
}

function shorturl_wp_head() {
	$id = shorturl_valid_post_id();
	if ($id >= 0) {
		echo '<link rel="shortlink" href="' . shorturl_get_post_shorturl($id) . '" />';
	}
}

function shorturl_redirect($query_vars) {
	if (array_key_exists('pagename', $query_vars)
		&& preg_match('/^(\-|~)(?<code>[0-9a-z]+)$/', $query_vars['pagename'], $preg_matches)) {
		$id = base_convert($preg_matches['code'], 36, 10);
		$url = get_permalink($id);
		if ($url) {
			wp_redirect(get_permalink($id));
			exit;
		}
	}
	return $query_vars;
}

add_action('wp', 'shorturl_create');
add_action('wp_head', 'shorturl_wp_head');
add_filter('request', 'shorturl_redirect');

?>
