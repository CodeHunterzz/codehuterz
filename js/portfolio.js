$(document).ready(function () {
	
	/* Navigation scroll */
    
    // Select all links with hashes
    $('a[href*="#"]')
      // Remove links that don't actually link to anything
      .not('[href="#"]')
      .not('[href="#0"]')
      .click(function (event) {
        // On-page links
        if (
          location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
          && 
          location.hostname == this.hostname
        ) {
          // Figure out element to scroll to
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
          // Does a scroll target exist?
          if (target.length) {
            // Only prevent default if animation is actually gonna happen
            event.preventDefault();
            $('html, body').animate({
              scrollTop: target.offset().top
            }, 1000, function () {
              // Callback after animation
              // Must change focus!
              var $target = $(target);
              $target.focus();
              if ($target.is(":focus")) { // Checking if the target was focused
                return false;
              } else {
                $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                $target.focus(); // Set focus again
              };
            });
          }
        }
      });


    /* Animations on scroll */
    $('.js--wp-1').waypoint(function () {
        $('.js--wp-1').addClass('animated fadeIn');
    }, {
        offset: '50%'
    });

    $('.js--wp-2').waypoint(function () {
        $('.js--wp-2').addClass('animated fadeInUp');
    }, {
        offset: '50%'
    });

    $('.js--wp-3').waypoint(function () {
        $('.js--wp-3').addClass('animated fadeIn');
    }, {
        offset: '50%'
    });

    $('.js--wp-4').waypoint(function () {
        $('.js--wp-4').addClass('animated fadeIn');
    }, {
        offset: '50%'
    });

    $('.js--wp-5').waypoint(function () {
        $('.js--wp-5').addClass('animated bounceInUp');
    }, {
        offset: '50%'
    });

    $('.js--wp-6').waypoint(function () {
        $('.js--wp-6').addClass('animated slideInLeft');
    }, {
        offset: '50%'
    });

    $('.js--wp-7').waypoint(function () {
        $('.js--wp-7').addClass('animated slideInRight');
    }, {
        offset: '50%'
    });

    $('.js--wp-8').waypoint(function () {
        $('.js--wp-8').addClass('animated fadeInRightBig');
    }, {
        offset: '50%'
    });

    $('.js--wp-9').waypoint(function () {
        $('.js--wp-9').addClass('animated zoomIn');
    }, {
        offset: '50%'
    });

    $('.js--wp-10').waypoint(function () {
        $('.js--wp-10').addClass('animated fadeInLeftBig');
    }, {
        offset: '50%'
    });
	
	$('.js--wp-11').waypoint(function () {
        $('.js--wp-11').addClass('animated bounceInUp');
    }, {
        offset: '70%'
    });
	
	$('.js--wp-12').waypoint(function () {
        $('.js--wp-12').addClass('animated zoomIn');
    }, {
        offset: '70%'
    });

	
});


$(document).ready(function(){
	$("#quote-form").submit(function(event) {
		event.preventDefault();
			var name = $("#name").val();
			var email = $("#email").val();
			var web = $("#web").val();
			var bus_name = $("#bus_name").val();
			var check = $("#check").val();
			var find = $("#find").val();
			var message = $("#message").val();
			var submit = $("#submit-form").val();
	$(".form-message").load("mailer.php", {
			name: name,
			email: email,
			web: web,
			bus_name: bus_name,
			find: find,
			message: message,
			submit: submit
		});
	});
});


