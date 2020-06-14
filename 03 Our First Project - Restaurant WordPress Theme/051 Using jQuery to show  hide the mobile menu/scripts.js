$ = jQuery.noConflict();

$(document).ready(function(){

	console.log("jqeury");

	$('.mobile-menu a').on('click', function(){
		console.log("you clicked the menu");
		$('nav.site-nav').toggle('slow');
		$('nav.site-nav').css('backgroundColor','yellow');

	});

	var breakpoint = 768;
	$(window).resize(function(){
		console.log("you are resizing the window");
		if($(document).width() >= breakpoint )
		{
			$('nav.site-nav').show();
		}
		else
		{
			$('nav.site-nav').hide();
		}
	});

});