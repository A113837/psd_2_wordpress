$ = jQuery.noConflict();

$(document).ready(function(){

	console.log("jqeury");

	//menu button
	$('.mobile-menu a').on('click', function(){
		console.log("you clicked the menu");
		$('nav.site-nav').toggle('slow');
		$('nav.site-nav').css('backgroundColor','yellow');

	});

	//show the mobile menu
	var breakpoint = 768;
	$(window).resize(function(){
		boxAdjustment();
		console.log("you are resizing the window");
		if($(document).width() >= breakpoint )
		{
			$('nav.site-nav').show();
			$('nav.site-nav').css('backgroundColor','yellow');
		}
		else
		{
			$('nav.site-nav').hide();
		}
	});
	
	boxAdjustment();

});

//Adapt the height of the images to the div elements
function boxAdjustment(){
	var images = $('.box-image');
	console.log(images);

	if(images.length > 0)
	{
		var imageHeight = 	images[0].height;
		var boxes 		=	$('.content-box'); 

		console.log(imageHeight);
		console.log(boxes);
		$(boxes).each(function(i, element){
			$(element).css({'height' : imageHeight+'px'});
		});
	}
	
}