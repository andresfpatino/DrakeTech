jQuery(document).ready(function ($) {

    // Product slider
    $('.products').slick({
        slidesToShow: 4,
        slidesToScroll: 4,
        autoplay: true,
        infinite: true,
        autoplaySpeed: 5000,
        dots: true,
        responsive: [
            {
              breakpoint: 1025,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
              }
            },
            {
              breakpoint: 769,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                dots: false
              }
            },
            {
              breakpoint: 575,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
          ]
    });

});
