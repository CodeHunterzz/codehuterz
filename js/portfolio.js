$(document).ready(function () {
	
	/* Navigation scroll */  
    $('a[href*="#"]')
      .not('[href="#"]')
      .not('[href="#0"]')
      .click(function (event) {
        if (
          location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
          && 
          location.hostname == this.hostname
        ) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
          if (target.length) {
            event.preventDefault();
            $('html, body').animate({
              scrollTop: target.offset().top
            }, 1000, function () {
              var $target = $(target);
              $target.focus();
              if ($target.is(":focus")) {
				focused
                return false;
              } else {
                $target.attr('tabindex','-1');
                $target.focus(); 
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