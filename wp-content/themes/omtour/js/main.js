jQuery(document).ready(function($){
    var width = (window.innerWidth > 0) ? window.innerWidth : screen.width;
        $(window).scroll(function(){
            var height = $(window).scrollTop();
            if(height > 20) {
                $( "#nav-menu" ).addClass('nav-scroll');
                $('.navbar-dark .navbar-nav .nav-link').css('color', '#000000');
                $('.logo-white').addClass('zoomOut').addClass('no-show').removeClass('show');
                $('.logo-black').addClass('show').addClass('fadeIn').removeClass('no-show');
                $('#navbarResponsive').css('bottom', 0);
            }
            else {
                $( "#nav-menu" ).removeClass('nav-scroll');
                $('.navbar-dark .navbar-nav .nav-link').css('color', '#fff');
                if($('.logo-white').hasClass('no-show')){
                    $('.logo-white').addClass('zoomIn').addClass('show').removeClass('no-show');
                    $('.logo-black').addClass('no-show').addClass('fadeOut').removeClass('show');
                }
            }
        });

    $(".trip-box").hover(function(){
        $(".trip-box").removeClass('full-height');
        $(this).addClass('full-height');
        // $.();
    }, function(){
        $(this).removeClass('full-height');
    });

    AOS.init({
        // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
        offset: 120, // offset (in px) from the original trigger point
        delay: 0, // values from 0 to 3000, with step 50ms
        duration: 1000, // values from 0 to 3000, with step 50ms
        easing: 'ease-out-back', // default easing for AOS animations
      
      });
});


/* (function(){function $MPC_load(){window.$MPC_loaded !== true && (function(){var s = document.createElement("script");s.type = "text/javascript";s.async = true;s.src = document.location.protocol+"//secure.mlstatic.com/mptools/render.js";var x = document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s, x);window.$MPC_loaded = true;})();}window.$MPC_loaded !== true ? (window.attachEvent ?window.attachEvent('onload', $MPC_load) : window.addEventListener('load', $MPC_load, false)) : null;})(); */
