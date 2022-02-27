<?php

// Style - Scripts 
require_once(dirname(__FILE__).'/functions/wp_enqueue_scripts.php');

// Custom Login
require_once(dirname(__FILE__).'/functions/custom_login.php');

// Remove Storefront Hooks
function remove_default_storefront_hooks() {
    remove_action('storefront_header', 'storefront_primary_navigation', 50);
}
add_action( 'init', 'remove_default_storefront_hooks' );
