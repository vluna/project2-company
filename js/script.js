$('#about-values').hide();
$('#about-producer').hide();
$('#about-facilities').hide();
$('#about-pork').hide();
$('#about-beef').hide();

$('#show-pork-belly-2').hide();
$('#show-pork-belly-3').hide();
$('#show-pork-belly-4').hide();

$('#pork-belly-2').css("opacity", ".5");
$('#pork-belly-3').css("opacity", ".5");
$('#pork-belly-4').css("opacity", ".5");

function triggerMobileNav() {
	document.getElementsByClassName("navbar")[0].classList.toggle("responsive");
}

function triggerAboutNav() {
	document.getElementsByClassName("about-navbar")[0].classList.toggle("responsive");
}

$('a').click(function(){
    $('html, body').animate({
        scrollTop: $( $(this).attr('href') ).offset().top
    }, 500);
    return false;
});

$('#pork-belly-1').click(function() {
	$('#show-pork-belly-1').show();
	$('#show-pork-belly-2').hide();
	$('#show-pork-belly-3').hide();
	$('#show-pork-belly-4').hide();

	$('#pork-belly-1').css("opacity", "1");
	$('#pork-belly-2').css("opacity", ".5");
	$('#pork-belly-3').css("opacity", ".5");
	$('#pork-belly-4').css("opacity", ".5");
});

$('#pork-belly-2').click(function() {
	$('#show-pork-belly-1').hide();
	$('#show-pork-belly-2').show();
	$('#show-pork-belly-3').hide();
	$('#show-pork-belly-4').hide();

	$('#pork-belly-1').css("opacity", ".5");
	$('#pork-belly-2').css("opacity", "1");
	$('#pork-belly-3').css("opacity", ".5");
	$('#pork-belly-4').css("opacity", ".5");
});

$('#pork-belly-3').click(function() {
	$('#show-pork-belly-1').hide();
	$('#show-pork-belly-2').hide();
	$('#show-pork-belly-3').show();
	$('#show-pork-belly-4').hide();

	$('#pork-belly-1').css("opacity", ".5");
	$('#pork-belly-2').css("opacity", ".5");
	$('#pork-belly-3').css("opacity", "1");
	$('#pork-belly-4').css("opacity", ".5");
});

$('#pork-belly-4').click(function() {
	$('#show-pork-belly-1').hide();
	$('#show-pork-belly-2').hide();
	$('#show-pork-belly-3').hide();
	$('#show-pork-belly-4').show();

	$('#pork-belly-1').css("opacity", ".5");
	$('#pork-belly-2').css("opacity", ".5");
	$('#pork-belly-3').css("opacity", ".5");
	$('#pork-belly-4').css("opacity", "1");
});


$('#show-overview').click(function() {
	$('#about-overview').show();
	$('#about-values').hide();
	$('#about-producer').hide();
	$('#about-facilities').hide();
	$('#about-pork').hide();
	$('#about-beef').hide();
});

$('#show-values').click(function() {
	$('#about-overview').hide();
	$('#about-values').show();
	$('#about-producer').hide();
	$('#about-facilities').hide();
	$('#about-pork').hide();
	$('#about-beef').hide();
});

$('#show-producer').click(function() {
	$('#about-overview').hide();
	$('#about-values').hide();
	$('#about-producer').show();
	$('#about-facilities').hide();
	$('#about-pork').hide();
	$('#about-beef').hide();
});

$('#show-facilities').click(function() {
	$('#about-overview').hide();
	$('#about-values').hide();
	$('#about-producer').hide();
	$('#about-facilities').show();
	$('#about-pork').hide();
	$('#about-beef').hide();
});

$('#show-pork').click(function() {
	$('#about-overview').hide();
	$('#about-values').hide();
	$('#about-producer').hide();
	$('#about-facilities').hide();
	$('#about-pork').show();
	$('#about-beef').hide();
});

$('#show-beef').click(function() {
	$('#about-overview').hide();
	$('#about-values').hide();
	$('#about-producer').hide();
	$('#about-facilities').hide();
	$('#about-pork').hide();
	$('#about-beef').show();
});