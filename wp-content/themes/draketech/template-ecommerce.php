
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
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/prod-banner1.jpg" alt="">
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
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/prod-banner2.jpg" alt="">
            </div>
        </div>
    </div>    
</section>

<div id="primary" class="content-area">
   
        
        <?php the_content(); ?>

   
</div>


<?php
get_footer();
