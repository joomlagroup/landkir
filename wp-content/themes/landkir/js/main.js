

paceOptions = {
    // Disable the 'elements' source
    elements: false,

    // Only show the progress on regular and ajax-y page navigation,
    // not every request
    restartOnRequestAfter: false
}
Pace.on('start',function(){

});



Pace.on("done", function(){
    //alert('b');
    jQuery("div.paceDiv").css('opacity','0');
    jQuery("div.paceDiv").css('z-index','0');

    var myFullpage1 = new fullpage('#fullpage', {

        anchors: ['homePage', 'aboutPage', 'servicePage','processesPage','clientsPage','projectsPage'],
        menu: '#menu-main-menu',
        bigSectionsDestination:top,
        autoScrolling: false,
        fitToSection:false,
        recordHistory: false,
        animateAnchor: true,
        afterRender: function(){

            if(window.location.hash) {

                // Fragment exists
                var url_hash = window.location.hash;
                if(url_hash =='#homePage'){
                    fullpage_api.silentMoveTo(1);
                }
                if(url_hash =='#aboutPage'){
                    fullpage_api.silentMoveTo(2);
                }
                if(url_hash =='#servicePage'){
                    fullpage_api.silentMoveTo(3);
                }
                if(url_hash =='#processesPage'){
                    fullpage_api.silentMoveTo(4);
                }
                if(url_hash =='#clientsPage'){
                    fullpage_api.silentMoveTo(5);
                }
                if(url_hash =='#projectsPage'){
                    fullpage_api.silentMoveTo(6);
                }
                var x =fullpage_api.getActiveSection();
                return false;

            } else {
                // Fragment doesn't exist
            }
        }
    });

});


jQuery.noConflict();
jQuery(document).ready(function($){
    'use strict';

    var $window       = $( window );
    var lastScrollTop = 0;
    var $header       = $( '#site-header .fixed');
    var headerBottom  = $header.position().top + $header.outerHeight( true );

    $window.scroll( function() {

        var windowTop  = $window.scrollTop();

        // Add custom sticky class
        if ( windowTop >= headerBottom ) {
            $header.addClass( 'header-sticky' );
        } else {
            $header.removeClass( 'header-sticky' );
            $header.removeClass( 'sticky-show' );
        }

        lastScrollTop = windowTop;

    } );


    //Moble Menu Script
    $(".mobilemenuicon").click(function(){
        $(this).toggleClass('opened');
        $("body").toggleClass("mobile-menu-open");
    });
    $(".menu-open-overlay,.close_menu").click(function(){
        $(".mobilemenuicon").removeClass('opened');
        $("body").removeClass("mobile-menu-open");
    });

    $('.slick-banner-home').slick({
        autoplay: true,
        autoplaySpeed: 5000,
        dots: false
    });

    var window_width = $( document ).width();
    var count_slidesToShow = 3;
    if(window_width<768) {
        var count_slidesToShow = 1;
    }

    $('.service_sliders').slick({
        autoplay: true,
        autoplaySpeed: 5000,
        dots: false,
        slidesToShow: count_slidesToShow
    });

    $('.sliders_about').slick({
        autoplay: true,
        autoplaySpeed: 5000,
        dots: false,
        prevArrow: false,
        nextArrow: false
    });

    $('.sectionJourney').slick({
        dots: true
    });


    $(".sectionJourney").on("beforeChange", function (){
        $('.sectionJourney .number-overlay').css('visibility','hidden');
        $('.slick-slide h3').removeClass('slideInUp');
        $('.slick-slide h3').hide();


        $('.slick-slide .right').removeClass('bounceInRight');
        $('.slick-slide .right').hide();
    })

    $(".sectionJourney").on("afterChange", function (){
        $('.sectionJourney .number-overlay').css('visibility','visible').hide().fadeIn('slow');
        $('.slick-active').find('h3').addClass('slideInUp');
        $('.slick-active').find('h3').show();

        $('.slick-active .right').addClass('bounceInRight');
        $('.slick-active .right').show();
    })

    var sectionClients_count_slidesToShow = 6;
    if(window_width<768) {
         sectionClients_count_slidesToShow = 2;
    }

    $('.sectionClients .sliders').slick({
        autoplay: false,
        dots: false,
        slidesToShow: sectionClients_count_slidesToShow,
        prevArrow: false,
        nextArrow: false,
        slidesToScroll: 2
    });

    $('.sectionProjects .sliders').slick({
        autoplay: false,
        dots: false
    });

    $( ".project_item" ).hover(
        function() {
            $( this ).find('.diagonalImg').css('opacity','0.4');
            $( this ).find('h3').css('top','74px').addClass('slideInUp');

        }, function() {
            $( this ).find('.diagonalImg').css('opacity','0');
            $( this ).find('h3').css('top','150px').removeClass('slideInUp');

        }
    );

    $( ".service_sliders .wrap_item" ).hover(
        function() {
            $( this ).find('.top').animate({top: '-30px'},400);
            $( this ).find('.bottom').animate({bottom: '0px'},400);

        }, function() {
            $( this ).find('.top').animate({top: '0px'},400);
            $( this ).find('.bottom').animate({bottom: '-130px'},400);

        }
    );

})