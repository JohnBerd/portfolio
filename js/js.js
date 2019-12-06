function createSticky(sticky) {

	if (typeof sticky !== "undefined") {

		var	pos = sticky.offset().top,
			win = $(window);

		win.on("scroll", function() {
			if (win.scrollTop() >= pos)
			{
				sticky.addClass("fixed");
				$('.triangle-bottom-menu').css('border-color', 'transparent #121212 transparent transparent');
				$('#first-block').css('padding-top', '110px');
			}
			else
			{
				sticky.removeClass("fixed");
				$('.triangle-bottom-menu').css('border-color', 'transparent #121212 white transparent');
				$('#first-block').removeAttr('style');
			}
		});			
	}
}

$(document).ready(function(){
	$( "#sent" ).fadeIn(300).delay(3000).fadeOut(400);
	if ($(window).width() <= 600)
	{
		$('#img-header').parallax("100%", 200, 0.2, true);
	$('.parallax-image').parallax("50%", $('.parallax-image').offset().top - 100, 0.05, true);

	}
	else
	{
		$('#img-header').parallax("100%", 0, 0.2, true);
	$('.parallax-image').parallax("50%", $('.parallax-image').offset().top + 200, 0.2, true);

	}
	$('.ancre').on('click', function(e){
		e.preventDefault();
		var target = $(this).attr('href');
		$('html, body')
			.stop()
			.animate({scrollTop: $(target).offset().top - 130}, 1000);
	});
	$(function(){
		createSticky($("#menu"));
	});
	$('#button-menu').click(function(){
		$('#menu-portable').slideToggle(400);
	});
	$('#menu-portable li a').click(function(){
		if ($(window).width() <= 600)
			$('#menu-portable').slideUp();
	});
	$(window).scroll(function(){
		$("#title").css("opacity", 1 - $(window).scrollTop() / 200);
	});
	$('.project-img').click(function()
		{
			$('#popup-bg').fadeIn();
			$('#body').css("filter", "blur(4px)");
			$('.project-presentation').removeClass("onfocus");
			$('.project-presentation').eq($(this).parent().parent().index()).addClass("onfocus");
			$('.project-presentation').hide();
			$('.onfocus').show();
		});
	$('#popup-bg').click(function(event)
		{
			var img = $('.onfocus').index();
			event.preventDefault();
			el = event.target;
			if(el.id == "popup-bg" || el.id == "close" || el.className == "fa fa-times-circle") {
				$('#popup-bg').fadeOut();
				$('#body').css("filter", "");
			}
			if (el.className == "fa fa-chevron-circle-right" || el.id == "arrow-right" || el.className == "fa fa-chevron-circle-left" || el.id == "arrow-left")
			{
				if (el.className == "fa fa-chevron-circle-right" || el.id == "arrow-right")
					img++;
				else
					img--;
				if (img === 2)
					img = 0;
				$('.project-presentation').removeClass("onfocus");
				$('.project-presentation').eq(img).addClass("onfocus");
				$('.project-presentation').fadeOut();
				$('.onfocus').fadeIn();
			}
		});
	var message = 0;
	var name = 0;
	var mail = 0;
	var reg = /^([\w.%+-]+)@([\w-]+\.)+([\w]{2,})$/;
	$("#contact-form").submit(function formSubmit(e)
		{
			if ($("#form-name").val().length < 3)
			{
				$("#form-name-error").fadeIn();
				name = 1;
			}
			else
				$("#form-name-error").fadeOut();
			if (!(reg.test($("#form-e-mail").val())))
			{
				$("#form-e-mail-error").fadeIn();
				mail = 1;
			}
			else
				$("#form-e-mail-error").fadeOut();
			if ($("#form-message").val().length < 3)
			{
				$("#form-message-error").fadeIn();
				message = 1;
			}
			else
				$("#form-message-error").fadeOut();
			if (name !== 0 || mail !== 0 || message !== 0)
				e.preventDefault();
		});
	$("#form-name").keydown(function()
		{
			if (name === 1)
			{
				if ($("#form-name").val().length >= 3)
				{
					$("#form-name-error").fadeOut();
					name = 0;
				}

			}
		});
	$("#form-e-mail").keydown(function()
		{
			if (mail === 1)
			{
				if (reg.test($("#form-e-mail").val()))
				{
					$("#form-e-mail-error").fadeOut();
					mail = 0;
				}

			}
		});
	$("#form-message").keydown(function()
		{
			if (message === 1)
			{
				if ($("#form-message").val().length >= 2)
				{
					$("#form-message-error").fadeOut();
					message = 0;
				}

			}
		});
	$("#form-name").blur(function()
		{
			if ($("#form-name").val().length < 3)
			{
				$("#form-name-error").fadeIn();
				name = 1;
			}
		});
	$("#form-e-mail").blur(function()
		{
			if (!reg.test($("#form-e-mail").val()))
			{
				$("#form-e-mail-error").fadeIn();
				mail = 1;
			}
		});
	$("#form-message").blur(function()
		{
			if ($("#form-message").val().length < 3)
			{
				$("#form-message-error").fadeIn();
				message = 1;
			}
		});
});
