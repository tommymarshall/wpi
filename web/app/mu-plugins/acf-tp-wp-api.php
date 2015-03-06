<?php
/*
Plugin Name: ACF to WP-API
Description: Includes ACF fields into WP-API
Version: 1.0
License: GPL
Author: Tommy Marshall
Author URI: http://viget.com/about/tmarshall
*/

function wp_api_encode_acf($data, $post, $context)
{
    $data['acf'] = get_fields($post['ID']);
    return $data;
}

add_filter('json_prepare_post', 'wp_api_encode_acf', 10, 3);
