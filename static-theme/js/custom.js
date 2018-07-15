//OWL CAROUSEL
$(document).ready(function () {
    $('.carousel-one').owlCarousel({
        dots: true,
        items: 3
    });
});

$(document).ready(function () {
    $('.carousel-two').owlCarousel({
        dots: true,
        items: 1
    });
});


//ON WINDOW RESIZE FIX
owlCarousel = function () { };

$(window).resize(function () {
    $('.owl-carousel-top').trigger('destroy.owl.carousel').removeClass('owl-carousel owl-loaded');
    $('.owl-carousel-top').find('.owl-stage-outer').children().unwrap();

    owlCarousel();
});

