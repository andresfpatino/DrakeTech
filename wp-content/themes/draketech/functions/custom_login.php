<?php 

if ( ! defined( 'ABSPATH' ) ) exit;

function DKT_custom_login(){
    wp_enqueue_style( 'custom_login', get_stylesheet_directory_uri() . '/assets/css/custom_login.css');
}
add_action('login_enqueue_scripts', 'DKT_custom_login');