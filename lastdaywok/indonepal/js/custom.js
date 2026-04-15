(function($) {
	
	"use strict"; 
    
    
	
//Update Header Style and Scroll to Top 
function headerStyle() {
    if($('.main-header').length){
        var windowpos = $(window).scrollTop();
        var siteHeader = $('.main-header');
        var scrollLink = $('.scroll-to-top');
        var sticky_header = $('.sticky-header, .header-style-two');
        if (windowpos > 250) {
            siteHeader.addClass('fixed-header');
            sticky_header.addClass("animated slideInDown");
            scrollLink.fadeIn(300);
        } else {
            siteHeader.removeClass('fixed-header');
            sticky_header.removeClass("animated slideInDown");
            scrollLink.fadeOut(300);
        }
        //Disable dropdown parent link
        $('.navigation li.dropdown > a').on('click', function(e) {
            e.preventDefault();
        });
    }
}
headerStyle();
    

    
function bannerSlider() {
if ($(".banner-slider").length > 0) {

    // Banner Slider
    var bannerSlider = new Swiper('.banner-slider', {
        preloadImages: false,
        loop: true,
        grabCursor: true,
        centeredSlides: false,
        resistance: true,
        resistanceRatio: 0.6,
        speed: 1400,
        spaceBetween: 0,
        parallax: false,
        effect: "slide",
        autoplay: {
            delay: 400000,
            disableOnInteraction: false
        },
        navigation: {
            nextEl: '.banner-slider-button-next',
            prevEl: '.banner-slider-button-prev',
        },
    });
}

}
    
    
    
//Sortable Masonary with Filters
function sortableMasonry() {
    if($('.sortable-masonry').length){

        var winDow = $(window);
        // Needed variables
        var $container=$('.sortable-masonry .items-container');
        var $filter=$('.filter-btns');

        $container.isotope({
            filter:'*',
            packery: {
              gutter: 0
            },
            animationOptions:{
                duration:500,
                easing:'linear'
            }
        });

        // Isotope Filter 
        $filter.find('li').on('click', function(){
            var selector = $(this).attr('data-filter');

            try {
                $container.isotope({ 
                    filter	: selector,
                    animationOptions: {
                        duration: 500,
                        easing	: 'linear',
                        queue	: false
                    }
                });
            } catch(err) {

            }
            return false;
        });


        winDow.on('resize', function(){
            var selector = $filter.find('li.active').attr('data-filter');

            $container.isotope({ 
                filter	: selector,
                animationOptions: {
                    duration: 500,
                    easing	: 'linear',
                    queue	: false
                }
            });
            $container.isotope()
        });


        var filterItemA	= $('.filter-btns li');

        filterItemA.on('click', function(){
            var $this = $(this);
            if ( !$this.hasClass('active')) {
                filterItemA.removeClass('active');
                $this.addClass('active');
            }
        });          
    }
    if ($('.sortable-masonry-two').length) {
        var $container = $('.sortable-masonry-two .items-container').isotope({
            itemSelector: '.element-item'
        });

        $container.isotope({
            filter:'*',
            packery: {
              gutter: 0
            },
            animationOptions:{
                duration:500,
                easing:'linear'
            }
        });
        // filter functions
        var filterFns = {
        // show if number is greater than 50
        numberGreaterThan50: function() {
            var number = $(this).find('.number').text();
            return parseInt( number, 10 ) > 50;
        },
        // show if name ends with -ium
        ium: function() {
            var name = $(this).find('.name').text();
            return name.match( /ium$/ );
            }
        };
        // bind filter on select change
        $('.filters-select').on( 'change', function() {
            // get filter value from option value
            var filterValue = this.value;
            // use filterFn if matches value
            filterValue = filterFns[ filterValue ] || filterValue;
            $container.isotope({ filter: filterValue });
        });

    }
}

sortableMasonry();
    
    

// Counter Box
function CounterNumberbox () {
	var timer = $('.timer');
	if(timer.length) {
		timer.appear(function () {
			timer.countTo();
		})
	}
}
    
    

    
    


//Submenu Dropdown Toggle
if($('.navigation li.dropdown ul').length){
    $('.navigation li.dropdown').append('<div class="dropdown-btn"><span class="fa fa-angle-down"></span></div>');

}
 
   
    

    
 
//Menu Show / Hide
if($('.anim-menu-btn').length){
    var animButton = $(".anim-menu-btn"),
        navInner = $(".nav-inner");
    function showMenu() {
        TweenMax.to(navInner, 0.6, {
            force3D: false,
            opacity: "1",
            ease: Expo.easeInOut
        });
        navInner.removeClass("close-menu");
    }

    function hideMenu() {
        TweenMax.to(navInner, 0.6, {
            force3D: false,
            opacity: "0",
            ease: Expo.easeInOut
        });
        navInner.addClass("close-menu");
    }
    animButton.on("click", function() {
        if (navInner.hasClass("close-menu")) showMenu();
        else hideMenu();
    });
}

//features-two-sec-single anim
if($('.features-two-sec-single').length){
    $('.features-two-sec-single').on("mouseenter", function() {
        $('.features-two-sec-single').removeClass('active');
        $(this).addClass('active');
    })
}

    
//Mobile Nav Hide Show
if($('.mobile-menu').length){

    var mobileMenuContent = $('.main-menu .navigation').html();
    $('.mobile-menu .navigation').append(mobileMenuContent);
    $('.sticky-header .navigation').append(mobileMenuContent);
    //Dropdown Button
    $('.mobile-menu li.dropdown .dropdown-btn').on('click', function() {
        $(this).prev('ul').slideToggle(500);
    });

    var animButton = $(".mobile-nav-toggler"),
        mobileMneu = $(".mobile-menu"),
        navOverlay = $(".nav-overlay");

    function showMenu() {
        TweenMax.to(mobileMneu, 0.6, {
            force3D: false,
            left: "0",
            ease: Expo.easeInOut
        });
        mobileMneu.removeClass("close-menu");
        navOverlay.fadeIn(500);
    }

    function hideMenu() {
        TweenMax.to(mobileMneu, 0.6, {
            force3D: false,
            left: "-350px",
            ease: Expo.easeInOut
        });
        mobileMneu.addClass("close-menu");
        navOverlay.fadeOut(500);
    }
    animButton.on("click", function() {
        if (mobileMneu.hasClass("close-menu")) showMenu();
        else hideMenu();
    });
    navOverlay.on("click", function() {
        hideMenu();
        $(".anim-menu-btn").toggleClass("anim-menu-btn--state-b");
    });
}

if ($('.nav-overlay').length) {
    // / cursor /
    var cursor = $(".nav-overlay .cursor"),
    follower = $(".nav-overlay .cursor-follower");

    var posX = 0,
    posY = 0;

    var mouseX = 0,
    mouseY = 0;

    TweenMax.to({}, 0.016, {
        repeat: -1,
        onRepeat: function() {
            posX += (mouseX - posX) / 9;
            posY += (mouseY - posY) / 9;

            TweenMax.set(follower, {
                css: { 
                    left: posX - 22,
                    top: posY - 22
                }
            });

            TweenMax.set(cursor, {
                css: { 
                    left: mouseX,
                    top: mouseY
                }
            });

        }
    });

    $(document).on("mousemove", function(e) {
        var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        mouseX = e.pageX;
        mouseY = e.pageY - scrollTop;
    });
    $("button, a").on("mouseenter", function() {
        cursor.addClass("active");
        follower.addClass("active");
    });
    $("button, a").on("mouseleave", function() {
        cursor.removeClass("active");
        follower.removeClass("active");
    });
    $(".nav-overlay").on("mouseenter", function() {
        cursor.addClass("close-cursor");
        follower.addClass("close-cursor");
    });
    $(".nav-overlay").on("mouseleave", function() {
        cursor.removeClass("close-cursor");
        follower.removeClass("close-cursor");
    });
}



//Tabs Box
if($('.tabs-box').length){
    $('.tabs-box .tab-buttons .tab-btn').on('click', function(e) {
        e.preventDefault();
        var target = $($(this).attr('data-tab'));

        if ($(target).is(':visible')){
            return false;
        }else{
            target.parents('.tabs-box').find('.tab-buttons').find('.tab-btn').removeClass('active-btn');
            $(this).addClass('active-btn');
            target.parents('.tabs-box').find('.tabs-content').find('.tab').fadeOut(0);
            target.parents('.tabs-box').find('.tabs-content').find('.tab').removeClass('active-tab');
            $(target).fadeIn(300);
            $(target).addClass('active-tab');
        }
    });
}


//LightBox / Fancybox
if($('.lightbox-image').length) {
    $('.lightbox-image').fancybox({
        openEffect  : 'fade',
        closeEffect : 'fade',
        helpers : {
            media : {}
        }
    });
}



// Scroll to a Specific Div
if($('.scroll-to-target').length){
    $(".scroll-to-target").on('click', function() {
        var target = $(this).attr('data-target');
       // animate
       $('html, body').animate({
           scrollTop: $(target).offset().top
         }, 1500);

    });
}

 
    
//Video popup
if ($(".video-popup").length) {
    $(".video-popup").magnificPopup({
        disableOn: 700,
        type: "iframe",
        mainClass: "mfp-fade",
        removalDelay: 160,
        preloader: true,

        fixedContentPos: false,
    });
}

   
    
//Fact Counter + Text Count
if($('.count-box').length){
    $('.count-box').appear(function(){

        var $t = $(this),
            n = $t.find(".count-text").attr("data-stop"),
            r = parseInt($t.find(".count-text").attr("data-speed"), 10);

        if (!$t.hasClass("counted")) {
            $t.addClass("counted");
            $({
                countNum: $t.find(".count-text").text()
            }).animate({
                countNum: n
            }, {
                duration: r,
                easing: "linear",
                step: function() {
                    $t.find(".count-text").text(Math.floor(this.countNum));
                },
                complete: function() {
                    $t.find(".count-text").text(this.countNum);
                }
            });
        }

    },{accY: 0});
}

    
  
    
// Testimonials One Carousel
if ($(".testimonials-one-carousel").length) {
    $(".testimonials-one-carousel").owlCarousel({
        loop: true,
        margin: 30,
        nav: false,
        smartSpeed: 500,
        autoHeight: false,
        autoplay: true,
        dots: true,
        autoplayTimeout: 10000,
        navText: [
            '<span class="fa fa-angle-left"></span>',
            '<span class="fa fa-angle-right"></span>',
        ],
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 1,
            },
            800: {
                items: 2,
            },
            1024: {
                items: 3,
            },
            1200: {
                items: 3,
            },
        },
    });
}



    
$(".brand-one-carousel").owlCarousel({
    loop: true,
    nav: false,
    dots: false,
    autoplay: true,
    smartSpeed: 800,
    responsive: {
        0: {
            items: 2,
        },
        576: {
            items: 3,
        },
        768: {
            items: 4,
        },
        992: {
            items: 5,
        },
    },
});
       
    
    
    
    
//Progress Bar / Levels
if ($(".progress-levels .progress-box .bar-fill").length) {
    $(".progress-box .bar-fill").each(
        function () {
            $(".progress-box .bar-fill").appear(function () {
                var progressWidth = $(this).attr("data-percent");
                $(this).css("width", progressWidth + "%");
            });
        },
        { accY: 0 }
    );
}
    
     
 
if ($(".img-popup").length) {
    var groups = {};
    $(".img-popup").each(function () {
        var id = parseInt($(this).attr("data-group"), 10);

        if (!groups[id]) {
            groups[id] = [];
        }

        groups[id].push(this);
    });

    $.each(groups, function () {
        $(this).magnificPopup({
            type: "image",
            closeOnContentClick: true,
            closeBtnInside: false,
            gallery: {
                enabled: true,
            },
        });
    });
}

    
    
    

/*-------------------------------------
According Box
-------------------------------------*/
if($('.accordion-box').length){
    $(".accordion-box").on('click', '.acc-btn', function() {

        var outerBox = $(this).parents('.accordion-box');
        var target = $(this).parents('.accordion');

        if($(this).hasClass('active')!==true){
            $(outerBox).find('.accordion .acc-btn').removeClass('active');
        }

        if ($(this).next('.acc-content').is(':visible')){
            return false;
        }else{
            $(this).addClass('active');
            $(outerBox).children('.accordion').removeClass('active-block');
            $(outerBox).find('.accordion').children('.acc-content').slideUp(300);
            target.addClass('active-block');
            $(this).next('.acc-content').slideDown(300);	
        }
    });	
}
    
if ($(".preloader").length) {
    $(".preloader").fadeOut();
}    
    
    



		
// Elements Animation
if($('.wow').length){
    var wow = new WOW(
      {
        boxClass:     'wow',      // animated element css class (default is wow)
        animateClass: 'animated', // animation css class (default is animated)
        offset:       0,          // distance to the element when triggering the animation (default is 0)
        mobile:       false,       // trigger animations on mobile devices (default is true)
        live:         true       // act on asynchronously loaded content (default is true)
      }
    );
    wow.init();
}



/* ==========================================================================
   When document is Scrollig, do
   ========================================================================== */
	
	$(window).on('scroll', function() {
		headerStyle();
	});
	
/* ==========================================================================
   When document is loading, do
   ========================================================================== */
	
	$(window).on('load', function() {
		bannerSlider();
		CounterNumberbox();
        sortableMasonry();
	});



		

})(window.jQuery);

