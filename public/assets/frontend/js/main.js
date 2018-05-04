jQuery(document).ready(function ($) {
    w = jQuery(window).outerHeight();
    h = jQuery('header').outerHeight();
    f = jQuery('footer').outerHeight();
    //setTimeout(function () {
    //jQuery('#container, .about-content-wrap, .contact-content-wrap, .gallery-content-wrap, .gallery_slider img').height(w - h - f);
    // }, 2000);
    jQuery('#btnAbout').on('click', function (e) {
        e.preventDefault();
        jQuery('.outer-about-wrap').addClass('open');
    });

    jQuery('#btnContact').on('click', function (e) {
        e.preventDefault();
        jQuery('.outer-contact-wrap').addClass('open');
    });

    jQuery('#btnGallery').on('click', function (e) {
        e.preventDefault();
        jQuery('.outer-gallery-wrap').addClass('open');
    });

    jQuery('#btnCloseAbout, #btnCloseAboutSmall').on('click', function (e) {
        e.preventDefault();
        jQuery('.outer-about-wrap').removeClass('open');
    });

    jQuery('#btnCloseContact, #btnCloseContactSmall').on('click', function (e) {
        e.preventDefault();
        jQuery('.outer-contact-wrap').removeClass('open');
    });

    jQuery('#btnCloseGallery, #btnCloseGallerySmall').on('click', function (e) {
        e.preventDefault();
        jQuery('.outer-gallery-wrap').removeClass('open');
    });
});
jQuery(window).resize(function ($) {
    w = jQuery(window).outerHeight();
    h = jQuery('header').outerHeight();
    f = jQuery('footer').outerHeight();
    console.log(w - h - f);
    // jQuery('#sv-container').height(w - h - f);
});

$(document).ready(function () {


    $(".gallery_slider").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true
    });


    $(".upper_slider").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true
    });

    new Vivus('canvas', {
        start: 'autostart',
        type: 'delayed',
        duration: 200,
        animTimingFunction: Vivus.EASE,
    }, doDone);

    function doDone() {
        jQuery('#preloader').addClass("animated");
        jQuery('#preloader').addClass("slideOutLeft");
    }

});

