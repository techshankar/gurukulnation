$(document).ready(function () {
    $('.moreless-button').click(function () {
        $('.moretext').slideToggle();
        if ($('.moreless-button').text() == "↓") {
            $(this).text("↑")
        } else {
            $(this).text("↓")
        }
    });

    $(".buy_btn").click(function () {

        $("#ccm_pop").modal({ backdrop: 'static', keyboard: false });

    });
});


jQuery(document).ready(function ($) {
    "use strict";
    //  TESTIMONIALS CAROUSEL HOOK
    $("#our_media_carousel").owlCarousel({
        loop: true,
        items: 3,
        margin: 45,
        autoplay: true,
        dots: true,
        slideBy: 1,
        autoplayTimeout: 3000,
        smartSpeed: 1000,
        navText: ["<i class='fa fa-long-arrow-left'></i>", "<i class='fa fa-long-arrow-right'></i>"],
        responsive: {
            0: {
                items: 1,
                margin: 15,
            },
            380: {
                items: 1,
                margin: 15,
            },
            480: {
                items: 1,
                margin: 15,
            },
            576: {
                items: 2,
                margin: 15,
            },
            768: {
                items: 2,
            },
            992: {
                items: 3,
            },
        },
    });
});


jQuery(document).ready(function ($) {
    "use strict";
    $('#scholars_work').owlCarousel({
        autoplayHoverPause: true,
        loop: true,
        items: 6,
        margin: 50,
        autoplay: true,
        dots: false,
        nav: false,
        autoplayTimeout: 3000,
        smartSpeed: 1000,
        navText: ["<i class='fa fa-long-arrow-left'></i>", "<i class='fa fa-long-arrow-right'></i>"],
        responsive: {
            0: {
                items: 3,
                margin: 20,
            },
            480: {
                items: 3,
            },
            576: {
                items: 4,
            },
            768: {
                items: 5,
            },
            1170: {
                items: 7
            }
        }
    });
});



jQuery(document).ready(function ($) {
    "use strict";
    //  TESTIMONIALS CAROUSEL HOOK
    $("#inst_carousel").owlCarousel({
        loop: true,
        items: 3,
        margin: 45,
        autoplay: true,
        dots: false,
        slideBy: 1,
        autoplayTimeout: 3000,
        smartSpeed: 1000,
        navText: ["<i class='fa fa-long-arrow-left'></i>", "<i class='fa fa-long-arrow-right'></i>"],
        responsive: {
            0: {
                items: 2,
                margin: 10,
            },
            380: {
                items: 2,
                margin: 10,
            },
            480: {
                items: 2,
                margin: 15,
            },
            576: {
                items: 2,
                margin: 15,
            },
            768: {
                items: 3,
            },
            992: {
                items: 3,
            },
        },
    });
});



jQuery(document).ready(function ($) {
    "use strict";
    //  TESTIMONIALS CAROUSEL HOOK
    $("#inst_carousel2").owlCarousel({
        loop: true,
        items: 4,
        margin: 45,
        autoplay: true,
        dots: false,
        slideBy: 1,
        autoplayTimeout: 3000,
        smartSpeed: 1000,
        navText: ["<i class='fa fa-angle-left' aria-hidden='true'></i>", "<i class='fa fa-angle-right' aria-hidden='true'></i>"],
        responsive: {
            0: {
                items: 1,
                margin: 10,
            },
            380: {
                items: 1,
                margin: 10,
            },
            480: {
                items: 1,
                margin: 15,
                stagePadding: 50,
            },
            576: {
                items: 2,
                margin: 15,
            },
            768: {
                items: 2,
            },
            992: {
                items: 3,
            },
            1201: {
                items: 3,
            },
            1301: {
                items: 4,
            },
        },
    });
});



function toggleTab(e) {
    var hrefVal = $(e).attr('href');
    $('.nav-tabs li').removeClass('active');
    $('.nav-tabs li[data-active="' + hrefVal + '"]').addClass('active');
}



$(document).ready(function () {
    $("#basic_view").click(function () {
        $("#basic_card").slideDown("slow");
        $("#basic_view").hide();
    });
    $("#advance_view").click(function () {
        $("#advance_card").slideDown("slow");
        $("#advance_view").hide();
    });
    $("#premium_view").click(function () {
        $("#premium_card").slideDown("slow");
        $("#premium_view").hide();
    });
});