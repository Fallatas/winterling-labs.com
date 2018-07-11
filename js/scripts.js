
jQuery(document).ready(function () {

    /* Scroll Effekt*/
    jQuery(function () {
        jQuery('a[href*=#]').stop().click(function () {

            if(location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') && location.hostname === this.hostname){

                var HASH = this.hash;
                var ZIEL = jQuery(this.hash);

                if(ZIEL.length){

                    var ABSTAND_TOP = ZIEL.offset().top;

                    jQuery('html,body').animate({scrollTop: ABSTAND_TOP},1500,function () {

                        window.location.hash = HASH;

                    });

                    return false;
                }
            }
        });
    });

    /* Cookie Richtlinie*/
    jQuery('.cookiebutton').on('click',function () {
        jQuery('#cookiestyle').fadeOut(2000);
    });

    /* Preloader */
    jQuery('#dots').delay(750).fadeOut(300,function () {

        jQuery('#bg_left').animate({left: '-50%'},300);
        jQuery('#bg_right').animate({right: '-50%'},300,function () {
            jQuery('#preloader').fadeOut(10);
        });

    });

    /* Kontaktformular Meldungen */
    jQuery('#system-message-container').on("click",function () {
       jQuery(this).fadeOut(2000)
    });

    /* Menu Button */
    var width = jQuery(window).width();


    jQuery('header #menu-button').on("mouseover",function () {
        jQuery('header .wl-line1').css("background","#FF7900");
        jQuery('header .wl-line2').css("background","#FF7900");
        jQuery('header .wl-line3').css("background","#FF7900");
    });

    jQuery('header #menu-button').on("mouseleave",function () {
        jQuery('header .wl-line1').css("background","white");
        jQuery('header .wl-line2').css("background","white");
        jQuery('header .wl-line3').css("background","white");
    });

    jQuery('header #menu-button').on("click",function () {
        jQuery('header nav').fadeIn(1500);
        /*
        jQuery('header nav').on("mouseleave",function () {
            jQuery('header nav').fadeOut(1500);
        });
        */
    });

    jQuery(window).resize(function () {
        var width = jQuery(window).width();
        if(width >= 768){
            jQuery('header nav').css("display","inline");
        }else if(width < 768){
            jQuery('header nav').css("display","none");
        }
    });

   });








