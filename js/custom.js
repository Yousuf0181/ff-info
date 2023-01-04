$(document).ready(function() {

    //Stiky header

    $(window).scroll(function() {

        if ($(this).scrollTop() > 1) {

            $('header').addClass("sticky");
        } else {

            $('header').removeClass("sticky");
        }


    });


    // Owl carousel 

    var owl = $('.owl-carousel');
    owl.owlCarousel({
        items: 4,
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: true
    });
    $('.play').on('click', function() {
        owl.trigger('play.owl.autoplay', [4000])
    })
    $('.stop').on('click', function() {
        owl.trigger('stop.owl.autoplay')
    })

    //tooltip 

    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })
	
	
	 //click to top
    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 100) {
            jQuery('#backToTop').fadeIn('slow');
        } else {
            jQuery('#backToTop').fadeOut('slow');
        }
    });
    jQuery('#backToTop').click(function () {
        jQuery("html, body").animate({
            scrollTop: 0
        }, 500);
        return false;
    });

    //end click to top



});
