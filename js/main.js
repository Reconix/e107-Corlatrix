jQuery(function($) {
    'use strict';

    //#main-slider
    $('#main-slider.carousel').carousel({
        interval: 8000
    });

    // accordion
    $('.accordion-toggle').on('click', function() {
        $(this).closest('.panel-group').children().each(function() {
            $(this).find('>.panel-heading').removeClass('active');
        });
        $(this).closest('.panel-heading').toggleClass('active');
    });

    // Initiate WOW JS
    new WOW().init();

    // portfolio filter
	var $portfolio_selectors = $('.portfolio-filter > li > a');
    var $portfolio = $('.portfolio-items');
    if ($portfolio.length) { // Only run if portfolio exists
        $portfolio.isotope({
            itemSelector: '.portfolio-item',
            layoutMode: 'fitRows'
        });
        $portfolio_selectors.on('click', function() {
            $portfolio_selectors.removeClass('active');
            $(this).addClass('active');
            var selector = $(this).attr('data-filter');
            $portfolio.isotope({ filter: selector });
            return false;
        });
    }

	// Pretty Photo
	console.log("PrettyPhoto links found:", $("a[rel^='prettyPhoto']").length);
	$("a[rel^='prettyPhoto']").prettyPhoto({
		social_tools: false,
		changepicturecallback: function() { console.log("PrettyPhoto opened!"); }
	});

    // Contact form
    var form = $('#main-contact-form');
    form.on('submit', function(event) {
        event.preventDefault();
        var form_status = $('<div class="form_status"></div>');
        $.ajax({
            url: $(this).attr('action'),
            beforeSend: function() {
                form.prepend(form_status.html('<p><i class="fa fa-spinner fa-spin"></i> Email is sending...</p>').fadeIn());
            }
        }).done(function(data) {
            form_status.html('<p class="text-success">' + (data.message || 'Email sent successfully') + '</p>').delay(3000).fadeOut();
        });
    });

    // goto top
    $(window).on('scroll', function() {
        if ($(this).scrollTop() > 100) {
            $('#gototop').fadeIn();
        } else {
            $('#gototop').fadeOut();
        }
    });

    $('#gototop').on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({ scrollTop: 0 }, 900);
    });

});