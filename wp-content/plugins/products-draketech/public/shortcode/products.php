<?php 

if ( ! defined( 'ABSPATH' ) ) exit;


/*
* Crea un shortcode, uso: [products_draketech]
*/
function shortcode_products_draketech($atts){

    $args = array(
        'post_type' => 'products',
        'posts_per_page' => -1,
        'order' => 'ASC',
        'orderby' => 'rand'
    );
    $products = new WP_Query($args); ?>
   
    <div class="products_shortcode">
        <h2 class="title"> <?php _e( 'Best seller', 'DKT'); ?> </h2>
        <div class="products">
            <?php while($products->have_posts()): $products->the_post(); ?>
                <div class="product">                   
                    <?php if( get_post_meta( get_the_ID(), 'sale_price', true ) ) : ?>
                        <span class="sale-badge"> <?php _e( 'SALE', 'DKT'); ?>  </span>
                    <?php endif; ?>
                    <?php the_post_thumbnail('medium'); ?>                    
                    <h3 class="name-product"><?php the_title(); ?></h3>
                    <div class="price">
                        <?php if( get_post_meta( get_the_ID(), 'regular_price', true ) ) : ?>
                            <ins>
                                <span class="price-amount"> $ <?php echo get_post_meta( get_the_ID(), 'regular_price', true ); ?> </span>
                            </ins>
                        <?php endif; ?>
                        <?php if( get_post_meta( get_the_ID(), 'sale_price', true ) ) : ?>
                            <del>
                                <span class="price-amount"> $ <?php echo get_post_meta( get_the_ID(), 'sale_price', true ); ?> </span>
                            </del>
                        <?php endif; ?>
                    </div>
                    <a href="#" class="add-to-cart"> <?php _e( 'Add to cart', 'DKT'); ?> </a>
                </div>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
    </div>   <?php
}
add_shortcode( 'products_draketech', 'shortcode_products_draketech' );