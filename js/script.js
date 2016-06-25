$('#show-pork-belly-2').hide();
$('#show-pork-belly-3').hide();
$('#show-pork-belly-4').hide();

$('#pork-belly-2').css("opacity", ".5");
$('#pork-belly-3').css("opacity", ".5");
$('#pork-belly-4').css("opacity", ".5");

$('#show-pork-side-ribs-2').hide();
$('#show-pork-side-ribs-3').hide();
$('#show-pork-side-ribs-4').hide();

$('#pork-side-ribs-2').css("opacity", ".5");
$('#pork-side-ribs-3').css("opacity", ".5");
$('#pork-side-ribs-4').css("opacity", ".5");

function triggerMobileNav() {
	document.getElementsByClassName("navbar")[0].classList.toggle("responsive");
}

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

$('#pork-side-ribs-1').click(function() {
	$('#show-pork-side-ribs-1').show();
	$('#show-pork-side-ribs-2').hide();
	$('#show-pork-side-ribs-3').hide();
	$('#show-pork-side-ribs-4').hide();

	$('#pork-side-ribs-1').css("opacity", "1");
	$('#pork-side-ribs-2').css("opacity", ".5");
	$('#pork-side-ribs-3').css("opacity", ".5");
	$('#pork-side-ribs-4').css("opacity", ".5");
});

$('#pork-side-ribs-2').click(function() {
	$('#show-pork-side-ribs-1').hide();
	$('#show-pork-side-ribs-2').show();
	$('#show-pork-side-ribs-3').hide();
	$('#show-pork-side-ribs-4').hide();

	$('#pork-side-ribs-1').css("opacity", ".5");
	$('#pork-side-ribs-2').css("opacity", "1");
	$('#pork-side-ribs-3').css("opacity", ".5");
	$('#pork-side-ribs-4').css("opacity", ".5");
});

$('#pork-side-ribs-3').click(function() {
	$('#show-pork-side-ribs-1').hide();
	$('#show-pork-side-ribs-2').hide();
	$('#show-pork-side-ribs-3').show();
	$('#show-pork-side-ribs-4').hide();

	$('#pork-side-ribs-1').css("opacity", ".5");
	$('#pork-side-ribs-2').css("opacity", ".5");
	$('#pork-side-ribs-3').css("opacity", "1");
	$('#pork-side-ribs-4').css("opacity", ".5");
});

$('#pork-side-ribs-4').click(function() {
	$('#show-pork-side-ribs-1').hide();
	$('#show-pork-side-ribs-2').hide();
	$('#show-pork-side-ribs-3').hide();
	$('#show-pork-side-ribs-4').show();

	$('#pork-side-ribs-1').css("opacity", ".5");
	$('#pork-side-ribs-2').css("opacity", ".5");
	$('#pork-side-ribs-3').css("opacity", ".5");
	$('#pork-side-ribs-4').css("opacity", "1");
});

var modal = document.getElementById('modal');

var btn = document.getElementById("close-button");

var span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
    modal.style.display = "block";
}

span.onclick = function() {
    modal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}