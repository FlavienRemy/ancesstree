$(function() {
    $('a[href*=#]').on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 500, 'linear');
    });
});

$('input').focus(function(){
    $(this).removeAttr('placeholder');
});

var swiper = new Swiper(".swiper-container", {
    slidesPerView: 3,
    //slidesPerView: 'auto',
    spaceBetween: 30,
    freeMode: true,
    //grabCursor: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true
    },
    scrollbar: {
        el: ".swiper-scrollbar"
    }
});


$(document).ready(function() {

    //Regulation texte blog

    var showChar = 150;
    var ellipsestext = "...";
    $('.more').each(function() {
        var content = $(this).html();

        if(content.length > showChar) {

            var c = content.substr(0, showChar);
            var h = content.substr(showChar-1, content.length - showChar);

            var html = c + ellipsestext;

            $(this).html(html);
        }

    });


    //Animation nav

    var didScroll;
    var lastScrollTop = 0;
    var delta = 5;
    var navbarHeight = $('header').outerHeight();

    $(window).scroll(function(event){
        didScroll = true;
    });

    setInterval(function() {
        if (didScroll) {
            hasScrolled();
            didScroll = false;
        }
    }, 250);

    function hasScrolled() {
        var st = $(this).scrollTop();

        // Make sure they scroll more than delta
        if(Math.abs(lastScrollTop - st) <= delta)
            return;

        // If they scrolled down and are past the navbar, add class .nav-up.
        // This is necessary so you never see what is "behind" the navbar.
        if (st > lastScrollTop && st > navbarHeight){
            // Scroll Down
            $('nav').removeClass('nav-down').addClass('nav-up');
        } else {
            // Scroll Up
            if(st + $(window).height() < $(document).height()) {
                $('nav').removeClass('nav-up').addClass('nav-down');
            }
        }

        lastScrollTop = st;
    }

    // SECTION RECHERCHE
    jQuery(function(){
        jQuery('#deces').click(function(){
            jQuery('.aide_deces').show();
            jQuery('.aide_mariage').removeClass('affichemariage');
        });
        jQuery('#mariage').click(function(){
            jQuery('.aide_mariage').addClass('affichemariage');
            jQuery('.aide_deces').hide();
        });
        jQuery('#naissance').click(function(){
            jQuery('.aide_deces').show();
            jQuery('.aide_mariage').removeClass('affichemariage');
        });
    });

});

