/*

  Template Name: Subas Ecommerce Responsive Bootstrap Template
  Description: This is html5 template
  Author: codecarnival
  Version: 1.0
  Design and Developed by: codecarnival
  NOTE: If you have any note put here. 

*/
/*================================================
[  Table of contents  ]
================================================

    1. jQuery MeanMenu
    2. wow js active
    3. jQuery Nivo Slider (home-2)
    4. Slick Carousel 
        4.1 Active Slider - 1 (home-1)
        4.2 Active By Brand
        4.3 Active Featured Product
        4.4 Active Blog
        4.5 Active Blog 2
        4.6 Active Related Product
		4.7 Active Team Member
    5. Countdown
    6. ScrollUp
    7. Tooltip 
    8. Treeview active
    9. Price Slider
    10. Fancybox active
    11. Elevate Zoom active 
    12. single-product-zoom-image carousel
    13. Cart Plus Minus Button
    14. bootstrap accordion one open at a time
    15. Cart tab menu active
    16. Blog page manu dropdown 
    17. Background Toutube Video 
    18. STICKY sticky-header

======================================
[ End table content ]
======================================*/
(function ($) {

    "use strict";

    /* ********************************************
    	1. jQuery MeanMenu
    ******************************************** */
    jQuery('nav#dropdown').meanmenu();

    /* ********************************************
    	2. wow js active
    ******************************************** */
    new WOW().init();

    /* ********************************************
    	3. jQuery Nivo Slider (home-2)
    ******************************************** */
    $('#nivoslider-2').nivoSlider({
        directionNav: true,
        animSpeed: 1000,
        effect: 'random',
        slices: 18,
        pauseTime: 8000,
        pauseOnHover: true,
        controlNav: true,
        prevText: '<i class="zmdi zmdi-long-arrow-up"></i>',
        nextText: '<i class="zmdi zmdi-long-arrow-down"></i>'
    });

    /* ********************************************
    	4. Slick Carousel 
    ******************************************** */

    /* -------------------------------------
    		4.1 Active Slider - 1 (home-1)
    ------------------------------------- */
    $('.active-slider-1').slick({
        autoplay: true,
        autoplaySpeed: 8000,
        speed: 1000,
        dots: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: '<button type="button" class="arrow-prev"><i class="zmdi zmdi-long-arrow-left"></i></button>',
        nextArrow: '<button type="button" class="arrow-next"><i class="zmdi zmdi-long-arrow-right"></i></button>',
    });

    /*----------------------------
    		4.2 Active By Brand
    ------------------------------ */
    $('.active-by-brand').slick({
        speed: 700,
        arrows: true,
        dots: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        prevArrow: '<button type="button" class="arrow-prev"><i class="zmdi zmdi-long-arrow-left"></i></button>',
        nextArrow: '<button type="button" class="arrow-next"><i class="zmdi zmdi-long-arrow-right"></i></button>',
        responsive: [{
                breakpoint: 991,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 479,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });

    /*------------------------------------
    		4.3 Active Featured Product
    ----------------------------------- */
    $('.active-featured-product').slick({
        speed: 700,
        arrows: true,
        dots: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        prevArrow: '<button type="button" class="arrow-prev"><i class="zmdi zmdi-long-arrow-left"></i></button>',
        nextArrow: '<button type="button" class="arrow-next"><i class="zmdi zmdi-long-arrow-right"></i></button>',
        responsive: [{
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                }
            },
        ]
    });

    /*----------------------------
    		4.4 Active Blog
    ------------------------------ */
    $('.active-blog').slick({
        speed: 700,
        arrows: false,
        dots: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [{
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                }
            },
        ]
    });

    /*----------------------------
    		4.5 Active Blog 2
    ------------------------------ */
    $('.active-blog-2').slick({
        speed: 700,
        arrows: false,
        dots: false,
        slidesToShow: 2,
        slidesToScroll: 1,
        responsive: [{
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                }
            },
            {
                breakpoint: 479,
                settings: {
                    slidesToShow: 1,
                }
            },
        ]
    });

    /*------------------------------------
    		4.6 Active Related Product
    -------------------------------------- */
    $('.active-related-product').slick({
        speed: 700,
        arrows: false,
        dots: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [{
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                }
            },
            {
                breakpoint: 479,
                settings: {
                    slidesToShow: 1,
                }
            },
        ]
    });

    /*----------------------------
    		4.7 Active Team Member
    ------------------------------ */
    $('.active-team-member').slick({
        speed: 700,
        arrows: false,
        dots: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [{
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                }
            },
        ]
    });

    /* ********************************************
    	5. Countdown
    ******************************************** */
    $('[data-countdown]').countdown('2020/05/28', function (event) {
        $(this).html(
            event.strftime(
                '<span class="cdown days"><span class="time-count">%-D</span> <p>Nap</p></span> <span class="cdown hour"><span class="time-count">%-H</span> <p>Óra</p></span> <span class="cdown minutes"><span class="time-count">%M</span> <p>Perc</p></span> <span class="cdown second"> <span><span class="time-count">%S</span> <p>Mp</p></span>'
            )
        );
    });

    /* ********************************************
    	6. ScrollUp
    ******************************************** */
    $.scrollUp({
        scrollText: '<i class="zmdi zmdi-chevron-up"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade'
    });

    /* ********************************************
    	7. Tooltip 
    ******************************************** */
    $('[data-toggle="tooltip"]').tooltip();

    /* ********************************************
    	8. Treeview active
    ******************************************** */
    $("#cat-treeview ul").treeview({
        animated: "normal",
        persist: "location",
        collapsed: true,
        unique: true,
    });

    $("#cat-treeview-2 ul").treeview({
        animated: "normal",
        persist: "location",
        collapsed: true,
        unique: true,
    });

    /* ********************************************
    	9. Price Slider
    ******************************************** */
    $("#slider-range").slider({
        range: true,
        min: 50,
        max: 2000,
        values: [50, 999],
        slide: function (event, ui) {
            $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
        }
    });
    $("#amount").val("$" + $("#slider-range").slider("values", 0) +
        " - $" + $("#slider-range").slider("values", 1));

    /* ********************************************
    	10. Fancybox active
    ******************************************** */
    $(document).ready(function () {
        $('.fancybox').fancybox();
    });

    /* ********************************************
    	11. Elevate Zoom active 
    ******************************************** */
    $("#zoom_03").elevateZoom({
        constrainType: "height",
        zoomType: "lens",
        containLensZoom: true,
        gallery: 'gallery_01',
        cursor: 'pointer',
        galleryActiveClass: "active"
    });
    $(window).resize(function (e) {
        $('.zoomContainer').remove();
        $("#zoom_03").elevateZoom({
            constrainType: "height",
            zoomType: "lens",
            containLensZoom: true,
            gallery: 'gallery_01',
            cursor: 'pointer',
            galleryActiveClass: "active"
        });
    });

    //pass the images to Fancybox
    $("#zoom_03").on("click", function (e) {
        var ez = $('#zoom_03').data('elevateZoom');
        $.fancybox(ez.getGalleryList());
        return false;
    });

    /* ********************************************
    	12. single-product-zoom-image carousel
    ******************************************** */
    $('.carousel-btn').slick({
        speed: 700,
        arrows: true,
        dots: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        prevArrow: '<button type="button" class="arrow-prev"><i class="zmdi zmdi-long-arrow-left"></i></button>',
        nextArrow: '<button type="button" class="arrow-next"><i class="zmdi zmdi-long-arrow-right"></i></button>',
        responsive: [{
                breakpoint: 991,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 479,
                settings: {
                    slidesToShow: 3
                }
            }
        ]
    });

    /* ********************************************
    	13. Cart Plus Minus Button
    ******************************************** */
    $(".cart-plus-minus").prepend('<div class="dec qtybutton">-</div>');
    $(".cart-plus-minus").append('<div class="inc qtybutton">+</div>');
    $(".qtybutton").on("click", function () {
        var $button = $(this);
        var oldValue = $button.parent().find("input").val();
        if ($button.text() == "+") {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            // Don't allow decrementing below zero
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 0;
            }
        }
        $button.parent().find("input").val(newVal);
    });

    /* ********************************************
    	14. bootstrap accordion one open at a time
    ******************************************** */
    $('.payment-title a').on('click', function (e) {
        if ($(this).parents('.panel').children('.panel-collapse').hasClass('in')) {
            e.stopPropagation();
        }
        // You can also add preventDefault to remove the anchor behavior that makes
        // the page jump
        e.preventDefault();
    });

    /* ********************************************
    	15. Cart tab menu active
    ******************************************** */
    $('.cart-tab li a').on("click", function () {
        $(this).addClass("active");
        $(this).parent('li').prevAll('li').find('a').addClass("active");
        $(this).parent('li').nextAll('li').find('a').removeClass("active");
    });

    /* ********************************************
    	16. Blog page manu dropdown 
    ******************************************** */
    $('.dropdown .option-btn').on('click', function () {
        if ($(this).siblings('.dropdown-menu').hasClass('active')) {
            $(this).siblings('.dropdown-menu').removeClass('active').slideUp();
            $(this).removeClass('active');
        } else {
            $('.dropdown .dropdown-menu').removeClass('active').slideUp();
            $('.dropdown .option-btn').removeClass('active');
            $(this).addClass('active');
            $(this).siblings('.dropdown-menu').addClass('active').slideDown();
        }
    });

    /* ********************************************
    	17. Background Toutube Video 
    ******************************************** */
    $(".youtube-bg").YTPlayer({
        videoURL: "_OA2oggXehk",
        containment: '.youtube-bg',
        mute: true,
        loop: true,
    });

    /* ********************************************
    	1. KaraKrisz jQuery Scroll to .div new mobile
    ******************************************** */
    $('i.zmdi-mobile').click(function () {
        $('html, body').animate({
            scrollTop: $("div.mobile-by-brand-section").offset().top - 380
        }, 1000)
    });

    /* ********************************************
    	2. Scroll to .div mobile case
    ******************************************** */
    $('i.zmdi-mobile-case').click(function () {
        $('html, body').animate({
            scrollTop: $("div.product-tab-section-mobile-case").offset().top - 380
        }, 1000)
    });

    /* ********************************************
    	3. KaraKrisz jQuery Scroll to .div mobile glass
    ******************************************** */
    $('i.zmdi-mobile-glass').click(function () {
        $('html, body').animate({
            scrollTop: $("div.product-tab-section-mobile-glass").offset().top - 380
        }, 1000)
    });

    /* ********************************************
    	4. KaraKrisz jQuery cookie window navigation
    ******************************************** */

    $('.cookie-product-info-first-phase-btn-overview').click(function () {
        $('.cookie-product-info-second-phase').fadeIn();
        $('.cookie-product-info-first-phase').hide();
    });

    $('.zmdi-arrow-left').click(function () {
        $('.cookie-product-info-second-phase').hide();
        $('.cookie-product-info-first-phase').fadeIn();
    });

    $('.cookie-product-info-first-phase-btn-not-accepted').click(function () {
        $('.not-accepted-cookie-product-info-second-phase').fadeIn();
        $('.cookie-product-info-first-phase').hide();
    });

    /* -------------------------------------
      5. KaraKrisz jQuery registration ajax 
    ------------------------------------- */

    $("#Registration_Form_ID").submit(function (event) {
        event.preventDefault();
        var register_name = $("#register_name").val();
        var register_email = $("#register_email").val();
        var register_password = $("#register_password").val();
        var register_password_2 = $("#register_password_2").val();
        if (register_password !== register_password_2) {
            $('.inserted-alert-danger').fadeIn();
            $('#incorrect_password').text('A jalszavak nem egyeznek meg, próbáld meg újra!');
        } else if (grecaptcha.getResponse() == "") {
            $('.inserted-alert-danger').fadeIn();
            $('#incorrect_password').text('Pipálni kell, hogy nem vagy robot!');
        } else {
            $.ajax({
                type: "POST",
                url: "login/reg",
                data: "register_name=" + register_name + "&register_email=" + register_email + "&register_password=" + register_password,
                success: function () {
                    $('.inserted-alert-success').fadeIn();
                    $('#inserted').text('Köszönjük, hogy regisztráltál');
                }
            });
        }
    });

    $("#aRegistration_Form_ID").submit(function (event) {
        event.preventDefault();
        var a_register_name = $("#a_register_name").val();
        var a_register_email = $("#a_register_email").val();
        var a_register_password = $("#a_register_password").val();
        var a_register_password_2 = $("#a_register_password_2").val();
        if (a_register_password === a_register_password_2) {
            $.ajax({
                type: "POST",
                url: "admin-login/reg",
                data: "a_register_name=" + a_register_name + "&a_register_email=" + a_register_email + "&a_register_password=" + a_register_password,
                success: function () {
                    $('.inserted-alert-success').fadeIn();
                    $('#inserted').text('Köszönjük, hogy regisztráltál');
                }
            });
        } else {
            $('.inserted-alert-danger').fadeIn();
            $('#incorrect_password').text('A jalszavak nem egyeznek meg, próbáld meg újra!');
        }
    });

    $("#myDataChange").submit(function (event) {
        event.preventDefault();
        var name = $("#name").val();
        var email = $("#email").val();
        $.ajax({
            type: "POST",
            url: "/myData/edit",
            data: "name=" + name + "&email=" + email,
            success: function () {
                $('.inserted-alert-success').fadeIn();
                $('#inserted').text('Sikeres adatmódosítás!');
            }
        });
    });

    /* -------------------------------------
      6. KaraKrisz jQuery cookieAccepted
    ------------------------------------- */
    // ezt szebben megírni
    $('#cookies').click(function (event) {
        // var date = new Date();
        //   date.setTime(date.getTime() + (60 * 1000));
        event.preventDefault();
        $('#CookieModal').modal('hide');
        $('.header-top-bar').slideDown();
        $('.smessage-btn').slideDown();
        $('.cookies-set-btn').hide();
        $.cookie("cookieAccepted", true, {
            expires: 30
        });
    });

    if (!$.cookie('cookieAccepted')) {
        // show cookie info
        $('#CookieModal').modal('show');
        $('.cookies-set-btn').slideDown();
        $('.smessage-btn').hide();
        $('.header-top-bar').hide();
    } else {
        $('.header-top-bar').slideDown();
        $('.smessage-btn').slideDown();
        $('.cookies-set-btn').hide();
    }
    /* -------------------------------------
         7. KaraKrisz jQuery not accepted cookie
       ------------------------------------- */
    $('.cookies-set-btn').click(function (event) {
        event.preventDefault();
        $('#CookieModal').modal('show');
    });

    $('#not-accepted-cookies').click(function (event) {
        event.preventDefault();
    });

    $('#not-accepted-cookies-false').click(function (event) {
        // var date = new Date();
        // date.setTime(date.getTime() + (60 * 1000));
        event.preventDefault();
        $('#CookieModal').modal('hide');
        $('.header-top-bar').slideDown();
        $.cookie("cookieAccepted", true, {
            expires: 30
        });
    });

    $('#not-accepted-cookies-true').click(function (event) {
        event.preventDefault();
        window.location.replace("/informative");
    });
    /* ********************************************
    	7. KaraKrisz jQuery mobile view events
    ******************************************** */

    $('#additional_silicone_case').click(function () {
        $('.popular-product__div--mobile-hide').slideDown();
        $('.popular-product__div--mobile-visualization-silicone-case-content').hide();
    });

    $('#additional_book_case').click(function () {
        $('.popular-product__div--book-case-mobile-hide').slideDown();
        $('.popular-product__div--mobile-visualization-book-case-content').hide();
    });

    $('#additional_safety_case').click(function () {
        $('.popular-product__div--safety-case-mobile-hide').slideDown();
        $('.popular-product__div--mobile-visualization-safety-case-content').hide();
    });

    $('#additional_smart_case').click(function () {
        $('.popular-product__div--smart-case-mobile-hide').slideDown();
        $('.popular-product__div--mobile-visualization-smart-case-content').hide();
    });

    $('#additional_standard_mobile_glass').click(function () {
        $('.popular-product__div--standard-mobile-glass-hide').slideDown();
        $('.popular-product__div--mobile-visualization-standard-mobile-glass-content').hide();
    });

    $('#additional_3d_mobile_glass').click(function () {
        $('.popular-product__div--3d-mobile-glass-hide').slideDown();
        $('.popular-product__div--mobile-visualization-3d-mobile-glass-content').hide();
    });
})(jQuery);
/* ********************************************
    18. STICKY sticky-header
******************************************** */

$(document).on("scroll", function () {
    const mq = window.matchMedia("(min-width: 1200px)");
    if ($(document).scrollTop() > 0.1 && mq.matches) {
        $('.header-area').addClass('sticky');
    } else {
        $('.header-area').removeClass('sticky');
    }
    const mqm = window.matchMedia("(max-width: 767px)");
    if ($(document).scrollTop() > 145 && mqm.matches) {
        $('.mobile-menu-area').addClass('sticky-mobile');
    } else {
        $('.mobile-menu-area').removeClass('sticky-mobile');
    }
});
/* ********************************************************* */