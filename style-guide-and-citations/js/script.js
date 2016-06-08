//jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});


// Responsive Navigation
$('#slide-nav.navbar .container').append($('<div id="navbar-height-col"></div>'));

var toggler = '.navbar-toggle';
var navigationwrapper = '.navbar-header';
var menuwidth = '100%';
var slidewidth = '80%';
var menuneg = '-100%';
var slideneg = '-80%';


$("#slide-nav").on("click", toggler, function (e) {

    var selected = $(this).hasClass('slide-active');

    $('#slidemenu').stop().animate({
        left: selected ? menuneg : '0px'
    });

    $('#navbar-height-col').stop().animate({
        left: selected ? slideneg : '0px'
    });

    $(navigationwrapper).stop().animate({
        left: selected ? '0px' : slidewidth
    });

    $(this).toggleClass('slide-active', !selected);
    $('#slidemenu').toggleClass('slide-active');

    $('.navbar, body, .navbar-header').toggleClass('slide-active');
});


var selected = '#slidemenu, body, .navbar, .navbar-header';

$(window).on("resize", function () {
    if ($(window).width() > 780 && $('.navbar-toggle').is(':hidden')) {
        $(selected).removeClass('slide-active');
    }
});

// Animation for toggle bar
$(".navbar-toggle").on("click", function () {
    $(this).toggleClass("active");
});

function triggerMobileNavigation() {
    document.getElementsByClassName("main-navigation")[0].classList.toggle("mobile-navigation");
}

console.log('%c PROJECT 1 ', 'background: #53af8b; font-size: 24px; color: white; font-family: Arial');
