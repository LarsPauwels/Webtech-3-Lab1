$(document).ready(function() {

	function slideMenu() {
		$(".container").toggleClass("toggle-container");
		$(".left-header").toggleClass("toggle-slide");
		$(".logo-desktop").toggleClass("toggle-nav");
	}

	function clickMenu(selectedElement) {
		var element = $(selectedElement).find("span").text();

		if ($(".left-header").width() != 224) {
			slideMenu();
		}

		$(".li-item").removeClass("active");
		$(selectedElement).addClass("active");

		$(".li-item").find(".fa-caret-up").removeClass("fa-caret-up").addClass("fa-caret-down");
		if ($("#" + element).css('display') == 'none') {
			$(selectedElement).find(".fa-caret-down").addClass("fa-caret-up").removeClass("fa-caret-down");
		} else {
			$(selectedElement).find(".fa-caret-down").removeClass("fa-caret-up").addClass("fa-caret-down");
		}


		$('.submenu:visible').not("#" + element).each(function(){
		    $(this).slideUp(400);
		   });
		$("#" + element).slideToggle(400);
	}

	$('#preloader').fadeOut('slow',function(){
		$(this).remove();
	});

	$(".li-item").click(function() {
		clickMenu(this);
	});

	$("#hamburger>i").click(function() {

		if ($('.submenu:visible').length != 0) {
			$('.submenu:visible').slideUp(400, function() {
				slideMenu();
			});
		} else {
			slideMenu();
		}

	});

	if ($('#message').length > 0) {
		$("#message").delay(1500).fadeIn(500);
		$("#loader-message").delay(2000).animate({
			width: "100%"
		},5000, function() {
			$("#message").fadeOut(500);
		});

		$("#close-message").click(function() {
			$("#message").fadeOut(500);
		});
	}

	var submenu = false;

	$("#settings i").click(function() {
		if (submenu == false) {
			$("#settings-container").animate({
				top: "66px"
			});
			submenu = true;
		} else {
			$("#settings-container").animate({
				top: "0"
			});
			submenu = false;
		}
	});

	$(".settings-item-li").click(function() {
		var element = $(this).find(".dropdown");

		if ($(".open").length >= 1 && !$(this).find(".dropdown").hasClass("open")) {
			$(".dropdown").removeClass("open").delay(300).queue(function(){
				element.addClass("open").dequeue();
			});
		} else {
			if (!$(this).find(".dropdown").hasClass("open")) {
				$(this).find(".dropdown").addClass("open");
			} else {
				$(this).find(".dropdown").removeClass("open");
			}
		}
	});

});