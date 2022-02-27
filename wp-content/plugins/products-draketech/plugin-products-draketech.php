<?php 

/**
 * Plugin Name:       Products DrakeTech
 * Plugin URI:        https://github.com/andresfpatino
 * Description:       Plugin creación de productos - Prueba desarrollo DrakeTech
 * Version:           1.0
 * Author:            Andrés Patiño
 * Author URI:        https://github.com/andresfpatino
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://github.com/andresfpatino
 * Text Domain:       DKT
 */


define( 'DKT_PATH', plugin_dir_path( __FILE__ ) );


// Postype 
require_once DKT_PATH."/admin/postype_products.php";

// Rewrite Flush
register_activation_hook(__FILE__, 'products_rewrite_flush');
register_deactivation_hook( __FILE__, 'products_rewrite_flush' );

// Metaboxes
require_once DKT_PATH."/admin/metaboxes.php";

// Shortcode
require_once DKT_PATH."/public/shortcode/products.php";

function frontend_styles(){
    wp_enqueue_style( 'productscss', plugin_dir_url( __FILE__ ) . '/public/shortcode/assets/shortcode.css');
    wp_enqueue_script( 'productsjs', plugin_dir_url( __FILE__ ) . '/public/shortcode/assets/shortcode.js', array('jquery'), "1.0", true  );
}
add_action('wp_enqueue_scripts', 'frontend_styles');