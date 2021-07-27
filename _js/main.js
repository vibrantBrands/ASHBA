$( document ).ready(function() {

	$('.menu-toggle').click(function(){
		$(this).toggleClass('active');
		$(this).toggleClass('inactive');
		$('.nav').toggleClass('active');
		$('.nav').toggleClass('inactive');
	});

	var index;

	$('.nav a').click(function(e){

		if (index == $(e.target).parent().index()) {
			index = 9;
			$('.menu-tray').removeClass('open');
			return;
		} else {
			$('.menu-tray').addClass('open');
		};

		index = $(e.target).parent().index();

		$('.menu-tray .submenu').hide();

		$('.menu-tray .submenu').eq(index).show('slow');

	
	});

	AOS.init({
		duration: 1500,
	});

});