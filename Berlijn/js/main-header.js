$(document).ready(function() {

	$('#preloader').fadeOut(function(){
		$(this).remove();
	});

	$("#close-message").click(function() {
		$("#message").fadeOut(500);
		$("#loader-message").stop();
		$("#loader-message").css("width", "0%");
	});

	function message() {
		$("#message").fadeIn(500);
		$("#loader-message").animate({
			width: "100%"
		},5000, function() {
			$("#message").fadeOut(500);
			$("#loader-message").css("width", "0%");
		});
	}

	/*$(".form-group>input[type=text]").blur(function(){
		$(this).css({
			borderColor: "rgba(237, 111, 86, 0.5)"
		});
		$(".form-group>input[type=text]").focus(function(){
			$(this).css({
				borderColor: "rgba(237, 111, 86, 0.5)",
				boxShadow: "inset 0 1px 1px rgba(0,0,0,.075), 0 0 6px #ce8483"
			});
		});
	});*/

});