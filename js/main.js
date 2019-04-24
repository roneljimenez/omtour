jQuery(document).ready(function($){

    var width = (window.innerWidth > 0) ? window.innerWidth : screen.width;
    if(width<1300) {
        $(window).scroll(function(){
            var height = $(window).scrollTop();
            if(height > 20) {
                $( "#nav-menu" ).addClass('nav-scroll');
            }
            else {
                $( "#nav-menu" ).removeClass('nav-scroll');
            }
        });
    }

});