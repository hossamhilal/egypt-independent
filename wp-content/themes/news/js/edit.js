// $(window).on('load', function () {
//     $('.loader').fadeOut(500, function () {
//         $(this).remove();
//     });
// });

/*global $ */
(function($) {
    'use strict';

    // Open navbarSide when button is clicked
    $('.site-header .nav-btn').on('click', function () {
        $('.nav-menu').toggleClass('show-sidemenu');
        $('.site-header .overlay').toggleClass('show-overlay');
    });

    // Close navbarSide when the outside of menu is clicked
    $('.site-header .overlay').on('click', function () {
        $('.nav-menu').removeClass('show-sidemenu');
        $('.site-header .overlay').removeClass('show-overlay');
    });
    
    // PHOTO GALLERY BIG SHOW PHOTO
    $('.posts-owl').owlCarousel({
        margin: 10,
        autoplay: true,
        loop: true,
        nav: true,
        dots:false,
        navText: ["<i class='fa fa-angle-right'></i>", "<i class='fa fa-angle-left'></i>"],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    });


})(jQuery);

