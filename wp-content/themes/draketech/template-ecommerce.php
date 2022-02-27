
<?php 

/* 
* Template Name: Ecommerce page
*/ 

if ( ! defined( 'ABSPATH' ) ) exit;

get_header(); ?>


<section class="slider">
    <div class="slide">
        <div class="content-area">
            <div class="col">
                <p class="title"><span>New</span> Collection <br> Coming to town</p>
                <p class="subtitle">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                <a class="button" href="#">Shop Now</a>
            </div>
            <div class="col">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/prod-banner1.jpg" alt="Product 1">
            </div>
        </div>
    </div>
    <div class="slide">
        <div class="content-area">
            <div class="col">
                <p class="title"><span>New</span> Collection <br> Coming to town</p>
                <p class="subtitle">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                <a class="button" href="#">Shop Now</a>
            </div>
            <div class="col">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/prod-banner2.jpg" alt="product 2">
            </div>
        </div>
    </div>    
</section>

<section class="icons">
    <div class="content-area">
        <div class="box">
            <div class="icon">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/home-ico.svg" alt="Home shipping">
            </div>
            <div class="text">
                <p class="title">Home Shipping</p>
                <p class="subtitle">Free for all oder</p>
            </div>
        </div>
        <div class="box">
            <div class="icon">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/send-paper-ico.svg" alt="100% refound">
            </div>
            <div class="text">
                <p class="title">100% Refund</p>
                <p class="subtitle">Cash Back</p>
            </div>
        </div>
        <div class="box">
            <div class="icon">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/shield-ico.svg" alt="Clients support">
            </div>
            <div class="text">
                <p class="title">Clients′ Support</p>
                <p class="subtitle">Fast Service </p>
            </div>
        </div>
        <div class="box">
            <div class="icon">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/rocket.svg" alt="Fast Delivery">
            </div>
            <div class="text">
                <p class="title">Fast Delivery</p>
                <p class="subtitle">Best Service</p>
            </div>
        </div>
    </div>
</section>


<div id="primary" class="content-area">
   
        
        <?php the_content(); ?>

   
</div>


<?php
get_footer();
