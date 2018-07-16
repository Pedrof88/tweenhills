//OWL CAROUSEL
$(document).ready(function () {
    $('.carousel-one').owlCarousel({
        dots: true,
        items: 1,
        responsive: {
            // breakpoint from 600 up
            600: {
                items: 3,
            }
        }
    });
});

$(document).ready(function () {
    $('.carousel-two').owlCarousel({
        dots: true,
        items: 1,
    });
});


//ON WINDOW RESIZE FIX
owlCarousel = function () { };

$(window).resize(function () {
    $('.owl-carousel-top').trigger('destroy.owl.carousel').removeClass('owl-carousel owl-loaded');
    $('.owl-carousel-top').find('.owl-stage-outer').children().unwrap();

    owlCarousel();
});

//MOBILE MENU
$('#navi-toggle').click(function () {
    $(this).toggleClass('active');
    $('#overlay').toggleClass('open');
});

//PAGE LOADER
$(window).on('load', function() { //
    $('#status').fadeOut();
    $('#preloader').delay(800).fadeOut('slow');
  })