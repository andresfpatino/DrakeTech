<?php

if ( ! defined( 'ABSPATH' ) ) {	exit; }


/*
**** Register meta box
*/
function DKT_register_meta_boxes() {
	add_meta_box( 'info_products', __( 'Info product', 'DKT' ), 'DKT_display_callback', 'products' );
}
add_action( 'add_meta_boxes', 'DKT_register_meta_boxes' );


/*
**** Meta box display callback 
*/
function DKT_display_callback( $post ) {
	
	$regular_price = get_post_meta( $post->ID, 'regular_price', true );
	$sale_price = get_post_meta( $post->ID, 'sale_price', true );	

	wp_nonce_field( 'info_products_nonce', 'meta_box_nonce' ); ?>
	
    <p class="form-field form-row form-row-first">
        <label for="regular_price"> <?php _e( 'Regular price ($)', 'DKT'); ?> </label> 
        <input type="text" name="regular_price" id="regular_price" value="<?php echo $regular_price; ?>" placeholder="Regular price (required)" />
    </p>


    <p class="form-field form-row form-row-last">
        <label for="sale_price"> <?php _e( 'Sale price ($)', 'DKT'); ?>  </label>
        <input type="text" name="sale_price" id="sale_price" value="<?php echo $sale_price; ?>" placeholder="Sale price"/>
    </p>

<?php
}


/*
**** Save meta box content 
*/
function DKT_save_meta_box( $post_id ) {
	// Comprobamos si es auto guardado
	if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;

	// Comprobamos el valor nonce creado en DKT_display_callback()
	if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'info_products_nonce' ) ) return;

	// Comprobamos si el usuario actual no puede editar el post
	if( !current_user_can( 'edit_post' ) ) return;
	
	
	// Guardamos...
	if( isset( $_POST['regular_price'] ) )
	update_post_meta( $post_id, 'regular_price', $_POST['regular_price'] );

	if( isset( $_POST['sale_price'] ) )
	update_post_meta( $post_id, 'sale_price', $_POST['sale_price'] );
}

add_action( 'save_post', 'DKT_save_meta_box' );