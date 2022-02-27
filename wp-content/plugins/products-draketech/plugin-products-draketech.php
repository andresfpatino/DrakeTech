<?php 

/**
 * Plugin Name:       Products DrakeTech
 * Plugin URI:        https://github.com/andresfpatino
 * Description:       Prueba desarrollo DrakeTech - Shortcode: [products_draketech]
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

function DKT_frontend_styles(){
    wp_enqueue_style( 'productscss', plugin_dir_url( __FILE__ ) . '/public/shortcode/assets/shortcode.css');
    wp_enqueue_script( 'productsjs', plugin_dir_url( __FILE__ ) . '/public/shortcode/assets/shortcode.js', array('jquery'), "1.0", true  );
}
add_action('wp_enqueue_scripts', 'DKT_frontend_styles');


// Notice activation plugin
register_activation_hook( __FILE__, 'DKT_admin_notice_example_activation_hook' );
function DKT_admin_notice_example_activation_hook() {
    set_transient( 'DKT_admin-notice-example', true, 5 );
}

add_action( 'admin_notices', 'DKT_admin_notice_example_notice' );
function DKT_admin_notice_example_notice(){ 
    if( get_transient( 'DKT_admin-notice-example' ) ){  ?>
        <div class="updated notice is-dismissible">
            <p>Thank you for using this plugin! <strong>You are awesome!</strong></p>
            <p><label for="shortcode">Please, to render the products use the followin shortcode:</label> <input id="shortcode" type="text"value="[products_draketech]" readonly></p>
        </div>
        <?php
        delete_transient( 'DKT_admin-notice-example' );
    }
}