jQuery(document).ready(function ($) {

    // Hero slider 
    $('.slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        infinite: true,
        autoplaySpeed: 4500,
        fade: true,
        cssEase: 'linear',
        dots: true
    });

});
