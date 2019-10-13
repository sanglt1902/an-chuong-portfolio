
 $(window).scroll(function() {    
    var scroll = $(window).scrollTop();    
    if (scroll >0) {
/*        $("#header").addClass("top-fix");
		$(".banner").css({"margin-top":"76px"});
    	$(".breadcrumb").css({"margin-top":"76px"});
		$(".video-banner").css({"margin-top":"76px"});
*/		$(".home2 #header").css({"background":"rgba(0,0,0,0.9)"});

    }
	else
	{
/*		 $("#header").removeClass("top-fix");
		 $(".banner").css({"margin-top":"0px"});
		 $(".breadcrumb").css({"margin-top":"0px"});
		 $(".video-banner").css({"margin-top":"0px"});
*/		 $(".home2 #header").css({"background":"rgba(0,0,0,0)"});

		}
});
 /*  =====  Cart  =====  */
$(document).ready(function () {
    $('.smart-cart-icon').on('click', function () {
        $("#smartcart").toggleClass('open');
    });

});

 /*  =====  magnificPopup  =====  */
$(document).ready(function() {
  $('.grid,.post-img').magnificPopup({
    delegate: 'a',
    type: 'image',
    closeOnContentClick: false,
    closeBtnInside: false,
    mainClass: 'mfp-with-zoom mfp-img-mobile',
    image: {
      verticalFit: true,
    },
    gallery: {
      enabled: true
    },
    zoom: {
      enabled: true,
      duration: 300, // don't foget to change the duration also in CSS
      opener: function(element) {
        return element.find('img');
      }
    }
    
  });
});
 /*  =====  Cart END  =====  */ 

 /*  =====  lODER  =====  */
  $( window ).on( "load", function() {
    // Animate loader off screen
    $(".loder").fadeOut("slow");

  });
 /*  =====  lODER END  =====  */ 
/*  =====  banner height  =====  */
  $( window ).on("resize , load", function() {
    // Animate loader off screen
    var bannerheight = $(".banner").height();
	$(".banner-detail").css('top', Math.round(bannerheight/3)+'px');
    var banner2height = $(".banner2").height();
//	$(".home2 .banner-detail,.home3 .banner-detail,.home4 .banner-detail,.home5 .banner-detail").css('top', Math.round(banner2height/2.5)+'px');
	$(".banner-detail,.fnc-slide__content").css('top', Math.round(banner2height/2.5)+'px');
    var full_onescreen_banner_height = $("#container").height();
	$(".banner-detail").css('top', Math.round(full_onescreen_banner_height/3)+'px');

  });
 /*  =====  banner height end  =====  */ 

/* ===== PORTFOLIO   =====   */
$( window ).on( "load", function(){
	// init Isotope
	var $container = $('.isotope').isotope({
	itemSelector: '.grid-item ,.blog-item',
	getSortData: {
	}
	});

/* ===== PORTFOLIO FILTER  =====   */

$('.portfolio-filter').on('click', 'li a', function() {
	$(this).parent().addClass('active').siblings().removeClass('active');
	var filterValue = $(this).attr('data-filter');
	// use filterFn if matches value
	$container.isotope({
	  filter: filterValue
	});
	});


/* ===== PORTFOLIO END  =====   */
/* ===== Related Product carousel =====   */

$('.related-pro').owlCarousel({
	autoplay:false,
    responsiveClass:true,
	items : 4, //10 items above 1000px browser width
    responsive:{
        0:{
            items:1,
            nav:false
        },
        600:{
            items:2,
            nav:false
        },
        1000:{
            items:4,
            nav:false,
        }
    }

});
/* ===== Product Thumbnail =====   */
$('#product-thumbnail').owlCarousel({
    loop:false,
	thumbs: true,
	autoplay:false,
	items : 5, //10 items above 1000px browser width
	nav:true,
})

/* ===== Testimonial carousel =====   */
$('.brand').owlCarousel({
    loop:true,
	autoplay:true,
    responsiveClass:true,
	items : 6, //10 items above 1000px browser width
    responsive:{
        0:{
            items:1,
            nav:false
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:6,
            nav:false,
            loop:true
        }
    }
})

/* ===== Testimonial carousel =====   */
$('.client').owlCarousel({
    loop:true,
	autoplay:true,
    responsiveClass:true,
	items : 1, //10 items above 1000px browser width
    responsive:{
        0:{
            items:1,
            nav:false
        },
        600:{
            items:1,
            nav:true
        },
        1000:{
            items:1,
            nav:true,
            loop:true
        }
    }
})
/* ===== Blog carousel =====   */
$('.slider-post').owlCarousel({
    loop:true,
	autoplay:true,
    responsiveClass:true,
	items : 1, //10 items above 1000px browser width
    responsive:{
        0:{
            items:1,
            nav:false
        },
        600:{
            items:1,
            nav:false
        },
        1000:{
            items:1,
            nav:false,
            loop:true
        }
    }
})

/* ===== Team carousel =====   */

$('.team3col').owlCarousel({
	autoplay:false,
    responsiveClass:true,
	items : 3, //10 items above 1000px browser width
    responsive:{
        0:{
            items:1,
            nav:false
        },
        600:{
            items:2,
            nav:true
        },
        1000:{
            items:3,
            nav:true,
        }
    }

});
$('.team4col').owlCarousel({
	autoplay:false,
    responsiveClass:true,
	items : 4, //10 items above 1000px browser width
    responsive:{
        0:{
            items:1,
            nav:false
        },
        600:{
            items:2,
            nav:true
        },
        1000:{
            items:4,
            nav:true,
        }
    }
})
});

/* ===== ON RESIGE ADD REMOVE CLASS  =====   */
$(document).ready(function() {
      re = function() {
          if ($( window ).width() <= 991) {
  			$('#menu.collapse ').removeClass('pull-left');

			/* ------------bannre button margin ------------- */
			$('.cd-intro').children('button').removeClass('mt_50').addClass('mt_20');           
          }
          if ($(window).width() > 991) {
			  $('#menu.collapse ').addClass('pull-left');
			  $('.home7 #menu.collapse ').removeClass('pull-left');

			/* ------------bannre button margin ------------- */
			  $('.cd-intro').children('button').addClass('mt_50').removeClass('mt_20');
          }
        };
        re();
        return $(window).on('resize', re);
});

/* ===== ON RESIGE  =====   */

$('#list-view').click(function() {
		$('.product-layout > .clearfix').remove();

		$('.product-layout').attr('class', 'product-layout product-list col-xs-12');
		$('#column-left .product-layout').attr('class', 'product-layout mb_20');
		$('#column-right .product-layout').attr('class', 'product-layout mb_20');
		ratingtop()
});

// Product Grid
$('.col_3 #grid-view').click(function() {
	$('.product-layout').attr('class', 'product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-12');
	ratingbottom()
	});
$('.col_3l #grid-view').click(function() {
	$('.product-layout').attr('class', 'product-layout product-grid col-lg-6 col-md-6 col-sm-6 col-xs-12');
	ratingbottom()

	});
$('.col_3r #grid-view').click(function() {
	$('.product-layout').attr('class', 'product-layout product-grid col-lg-6 col-md-6 col-sm-6 col-xs-12');
	ratingbottom()
	});
$('.col_4 #grid-view').click(function() {
	$('.product-layout').attr('class', 'product-layout product-grid col-lg-3 col-md-3 col-sm-6 col-xs-12');
	ratingbottom()
	});
	
$('.col_4l #grid-view').click(function() {
	$('.product-layout').attr('class', 'product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-12');
	ratingbottom()
	});
$('.col_4r #grid-view').click(function() {
	$('.product-layout').attr('class', 'product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-12');
	ratingbottom()
	});	
	
//$('#grid-view').click(function() {
//	$('.product-layout > .clearfix').remove();
//
//	cols = $('#column-right, #column-left').length;
//
//	if (cols == 2) {
//		$('.product-layout').attr('class', 'product-layout product-grid col-lg-6 col-md-6 col-sm-12 col-xs-12');
//		$('.left-sidebar-widget .product-layout').attr('class', 'product-layout product-grid col-xs-12');
//
//	} else if (cols == 1) {
//		$('.product-layout').attr('class', 'product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-12');
//		$('.left-sidebar-widget .product-layout').attr('class', 'product-layout product-grid col-xs-12');
//
//	} else {
//		$('.product-layout').attr('class', 'product-layout product-grid col-lg-3 col-md-3 col-sm-6 col-xs-12');
//		$('.left-sidebar-widget .product-layout').attr('class', 'product-layout product-grid col-xs-12');
//
//	}
//

//});
//	
function ratingtop(){
		localStorage.setItem('display', 'list-view');
		$('.product-name:parent').each(function () {
    	$(this).insertBefore($(this).prev('.rating'));
		});
}
function ratingbottom(){
	 localStorage.setItem('display', 'grid-view');
	 	$('.rating:parent').each(function () {
		$(this).insertBefore($(this).prev('.product-name'));
	});	
}
function glactive(){

$('.btn-list-grid button').on('click', function() {

if($(this).hasClass('grid-view')) {

  $('.btn-list-grid button').addClass('active');
  $('.btn-list-grid button.list-view').removeClass('active');

}

  else if($(this).hasClass('list-view')) {

	$('.btn-list-grid button').addClass('active');
	$('.btn-list-grid button.grid-view').removeClass('active');

  }

});

}

$(document).ready(function(){glactive();});
$(window).resize(function(){glactive();}); 

/* ===== tool tip  =====   */
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});


function wowanimations (){
    var wow = new WOW()
    wow = new WOW(
        {
        boxClass:     'wow',      // default
        animateClass: 'animated', // default
        offset:       0,          // default
        mobile:       true,       // default
        live:         true        // default
        }
    )
    wow.init();
}
/* ===== Right Click Disable   =====   */
//document.oncontextmenu = document.body.oncontextmenu = function() {return false;}

