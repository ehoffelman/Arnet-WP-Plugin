<?php

// Add Scripts
function arn_add_static() {
    wp_enqueue_style('arn-main-style', plugins_url() . '/arnet-wp-plugin/css/style.css');
    wp_enqueue_script('arn-main-script', plugins_url() . '/arnet-wp-plugin/js/main.js', array('jquery'));
}

add_action('wp_enqueue_scripts', 'arn_add_static');
