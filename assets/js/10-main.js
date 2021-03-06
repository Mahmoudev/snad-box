jQuery(document).ready(function(){
	$('#contactform').submit(function(){
		var action = $(this).attr('action');
		$("#message").slideUp(750,function() {
			$('#message').hide();
			$('#submit')
			.after('<img src="assets/images/css/ajax-loader.gif" class="loader" />')
			.attr('disabled','disabled');

			$.post(action, {
				name: $('#name').val(),
				email: $('#email').val(),
				phone: $('#phone').val(),
				subject: $('#subject').val(),
				comments: $('#comments').val(),
				verify: $('#verify').val()
			},
			function(data){
				document.getElementById('message').innerHTML = data;
				$('#message').slideDown('slow');
				$('#contactform img.loader').fadeOut('slow',function(){$(this).remove()});
				$('#submit').removeAttr('disabled');
				if(data.match('success') != null) $('#contactform').slideUp('slow');
			}
			);

		});
		return false;
	});
});





$(document).ready(function() {

/*-------------------------------------------------
// at start
-------------------------------------------------*/


//_addClass();
//_accordion();
//_addClassAnimated();
_appear();
//_appearAnimation();
_browseButton();
//_cycleAfter();
//_distanceCalc();
//_filter();
//_flexslider();
//_forceHeight_map();
//_forceWidth_1();
//_forceWidth_slide();
_formsClear();
_fullBackground();
_gmapNative();
//_hideMenu();
//_lazyLoad();
//_mouseLangHover();
//_mouseTeamHover();
//_mPlace();
//_nav();
_onePageNav();
//_oneWorkWidth();
//_prettyPhoto();
//_reorder();
_scrollTo();
_scrollUp();
//_setWidth();
//_toggle();
//_toolTips();
//_tooTips();



/*-------------------------------------------------
// debouncer
-------------------------------------------------*/

$(window).on("debouncedresize", function(event) {
	//$.event.special.debouncedresize.threshold = 2000;
	console.log('window resized');
	_forceHeight_map();
	_forceWidth_slide();
	// gMap();
	// setWidth();
	// setHeight();
});







/*-------------------------------------------------
// Maps Native
-------------------------------------------------*/

function _gmapNative() {

	/*----------- vars ---------------*/

	var marker;
	var markers = new Array();
	var iconCounter = 0;
	var MY_MAPTYPE_ID = 'custom_style';



	/*----------- locations + icons + shaow ---------------*/

	var locations = [
		['<h4>Dubai</h4>', 25.271139, 55.307485],
		['<h4>Sharjah</h4>', 25.357522, 55.391865]
	];

	var iconURLPrefix = 'http://maps.google.com/mapfiles/ms/icons/';

	var icons = [
		iconURLPrefix + 'red-dot.png',
		iconURLPrefix + 'yellow-dot.png'
	]
	var icons_length = icons.length;


	var shadow = {
		anchor: new google.maps.Point(15, 33),
		url: iconURLPrefix + 'msmarker.shadow.png'
	};




	/*----------- map options---------------*/

	var map = new google.maps.Map(document.getElementById('googleMap'), {
		zoom: 10,
		center: new google.maps.LatLng(-37.92, 151.25),
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		mapTypeControl: false,
		scrollwheel: false,
		streetViewControl: false,
		panControl: false,
		//disableDefaultUI: true,
		zoomControlOptions: {
			//position: google.maps.ControlPosition.LEFT_BOTTOM
			style: google.maps.ZoomControlStyle.SMALL
		},
	    mapTypeControlOptions: {
	      mapTypeIds: [google.maps.MapTypeId.ROADMAP, MY_MAPTYPE_ID]
	    },
	    mapTypeId: MY_MAPTYPE_ID
	});



	/*----------- infowindow options---------------*/

	var infowindow = new google.maps.InfoWindow({
		maxWidth: 160
	});



	/*----------- styles ---------------*/

	var featureOpts = [
	{
		"featureType": "water",
		"stylers": [
		{
			"color": "#46bcec"
		},
		{
			"visibility": "on"
		}
		]
	},
	{
		"featureType": "landscape",
		"stylers": [
		{
			"color": "#f2f2f2"
		}
		]
	},
	{
		"featureType": "road",
		"stylers": [
		{
			"saturation": -100
		},
		{
			"lightness": 45
		}
		]
	},
	{
		"featureType": "road.highway",
		"stylers": [
		{
			"visibility": "simplified"
		}
		]
	},
	{
		"featureType": "road.arterial",
		"elementType": "labels.icon",
		"stylers": [
		{
			"visibility": "off"
		}
		]
	},
	{
		"featureType": "administrative",
		"elementType": "labels.text.fill",
		"stylers": [
		{
			"color": "#444444"
		}
		]
	},
	{
		"featureType": "transit",
		"stylers": [
		{
			"visibility": "off"
		}
		]
	},
	{
		"featureType": "poi",
		"stylers": [
		{
			"visibility": "off"
		}
		]
	}
	];




	/****** Execute ******/

	for (var i = 0; i < locations.length; i++) {

		/*---- position ----*/
		marker = new google.maps.Marker({
			position: new google.maps.LatLng(locations[i][1], locations[i][2]),
			map: map,
			//animation: google.maps.Animation.DROP,
			icon: icons[iconCounter],
			shadow: shadow
		});



		/*---- marker ----*/
		markers.push(marker);




		/*---- style ----*/
		var styledMapOptions = {
			name: 'Custom Style'
		};
 		var customMapType = new google.maps.StyledMapType(featureOpts, styledMapOptions);



		/*---- window ----*/
		google.maps.event.addListener(marker, 'click', (function (marker, i) {
			return function () {
				infowindow.setContent(locations[i][0]);
				infowindow.open(map, marker);
			}
		})(marker, i));



		/*---- icons ----*/
		iconCounter++;
		// We only have a limited number of possible icon colors, so we may have to restart the counter
		if (iconCounter >= icons_length) {
			iconCounter = 0;
		}



		/*---- style it ----*/
		map.mapTypes.set(MY_MAPTYPE_ID, customMapType);




		/*---- center it ----*/
		var bounds = new google.maps.LatLngBounds();
		//  Go through each...
		$.each(markers, function (index, marker) {
			bounds.extend(marker.position);
		});
		//  Fit these bounds to the map
		map.fitBounds(bounds);

	}






	/*----------- external controls ---------------*/

	$("#menu").on("click", "#panLA", function () {
		var laLatLng = new google.maps.LatLng(25.271139, 55.307485);
		map.panTo(laLatLng);
		//map.setZoom(15);
	});
	$("#menu").on("click", "#panLB", function () {
		var laLatLng = new google.maps.LatLng(25.357522, 55.391865);
		map.panTo(laLatLng);
		//infowindow.open(map, marker); /*didn't work*/
		//map.setZoom(15);
	});

}





/*-------------------------------------------------
// distance from top
-------------------------------------------------*/
function _distanceCalc(){
$(window).on('scroll', function () {
	var scrollTop     = $(window).scrollTop(),
		elementOffset = $('#about').offset().top,
		distance      = (elementOffset - scrollTop);
		// console.log(distance+'px');
		if (distance < 400) {
			$(".cycle-slideshow img").removeClass("fullscreen-image");
			$('.cycle-slideshow.slider').cycle('pause');
		} else {
			$(".cycle-slideshow img").addClass("fullscreen-image");
			$('.cycle-slideshow.slider').cycle('resume');
		}

});
}

/*-------------------------------------------------
// hide menu
-------------------------------------------------*/

function _hideMenu(){
	$(".menu-button a").on("click", function(e){
		e.preventDefault();
		$(".menu-button").addClass('remove');
		$("#menu").addClass("active animated-ed bounceInDown animated-bounceInDown");
	});

	$("li.close a, #menu ul li.first a").on("click", function(e){
		e.preventDefault();
		$(".menu-button").removeClass('remove');
		$("#menu").removeClass("active animated-ed bounceInDown animated-bounceInDown");
	});

}




/*-------------------------------------------------
// Lazy
-------------------------------------------------*/
function _lazyLoad(){
  $(function() {
	 $("img.lazy").lazyload({
		 effect : "fadeIn"
	 });
  });
}





/*-------------------------------------------------
// force Hieght / Width
-------------------------------------------------*/

function _forceHeight_map(){
	var mapH = $('.box.contact').height();
	console.log('map H is '+mapH);
	$('#map').height(mapH);
}

function _forceWidth_1(){
	var workx = $('.one-work').width();
	var worky = $('.one-work').height();
	$('.one-work .mask').width(workx);
}

function _forceWidth_slide(){
	var slideX = $(window).width();
	//console.log(slideX);
	if (slideX > 1000) {
		$('.cycle-slideshow div img').width(slideX);
	} else {
		$('.cycle-slideshow div img').css({'width':'auto'});
	}

}




/*-------------------------------------------------
// mouse enter / leave
-------------------------------------------------*/

function _mouseTeamHover(){
	$('.teamPhoto')
	.on('mouseenter', function() {
		$(this).children('.aboutSocial,.pic-corner').stop().fadeIn(200);
	})
	.on('mouseleave', function() {
		$(this).children('.aboutSocial,.pic-corner').stop().fadeOut(200);
	});

	$('.teamBlock')
	.on('mouseenter', function() {
		$(this).children('.detail').stop().addClass('active');
	})
	.on('mouseleave', function() {
		$(this).children('.detail').stop().removeClass('active');
	});

}

function _mouseLangHover(){
	$('.circles.en')
	.on('mouseenter', function() {
		$('.globes .en img.top').fadeIn(200);
		$('.globes .en img.bottom').fadeOut(200);
	})
	.on('mouseleave', function() {
		$('.globes .en img.top').fadeOut(200);
		$('.globes .en img.bottom').fadeIn(200);
	});

	$('.circles.ar')
	.on('mouseenter', function() {
		$('.globes .ar img.top').fadeIn(200);
		$('.globes .ar img.bottom').fadeOut(200);
	})
	.on('mouseleave', function() {
		$('.globes .ar img.top').fadeOut(200);
		$('.globes .ar img.bottom').fadeIn(200);
	});

}










/*-------------------------------------------------
// cycleAfter
-------------------------------------------------*/

function _cycleAfter(){
	$('.cycle-slideshow').on('cycle-before', function( event, opts ) {
		// console.log('******cycle******');
		$(".cycle-slideshow img").addClass("active animated-ed bounceInDown animated-bounceInDown");
	});
	$('.cycle-slideshow').on('cycle-after', function( event, opts ) {
		setTimeout(function() {
			$(".cycle-slideshow img").removeClass("active animated-ed bounceInDown animated-bounceInDown");
		}, 1000);

	});
}










/*-------------------------------------------------
// scroll the whole document
-------------------------------------------------*/

function _scrollTo(){
	$('#menu,.controls').localScroll({
		target:'body',
		duration: 1000,
		easing: 'easeInOutExpo' //(see http://easings.net/)
	});
}




/*-------------------------------------------------
// fullscreen backgoround
-------------------------------------------------*/

function _fullBackground(){
	$("#bg").fullscreenBackground();
}




/*-------------------------------------------------
// add classes
-------------------------------------------------*/

function _addClass(){
	$('#nav, .btn').addClass('animated');
}




/*-------------------------------------------------
// tooltips
-------------------------------------------------*/
function _toolTips(){
	$('.tip').tipsy({fade: true});
}






/*-------------------------------------------------
// call functions
-------------------------------------------------*/

function _gohome(){
	$('header #logo').click();
}



/*-------------------------------------------------
// scrollup
-------------------------------------------------*/
function _scrollUp(){
	$(function () {
	  $.scrollUp({
		scrollName: 'scrollUp', // Element ID
		topDistance: '1000', // Distance from top before showing element (px)
		topSpeed: 800, // Speed back to top (ms)
		easingType: 'easeInOutExpo', // Scroll to top easing (see http://easings.net/)
		animation: 'fade', // Fade, slide, none
		animationInSpeed: 200, // Animation in speed (ms)
		animationOutSpeed: 200, // Animation out speed (ms)
		scrollText: 'Top', // Text for element
		activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'

	  });
	});
}





/*-------------------------------------------------
// placeholder clear
-------------------------------------------------*/

function _formsClear(){
	$('input[type="text"]').focus(function() {
		$(this).attr('placeholder' , '');
	});

/*	$('input[type="text"]').blur(function() {
		$(this).attr('placeholder', $(this).attr('placeholder'));
	});*/

}







/*-------------------------------------------------
// set width
-------------------------------------------------*/

function _setWidth(){
	var x = $(window).width();
	switch (true) {
	case (x < 760):
		$('html').addClass('mobile');
		break;
	case (x < 1100):
		$('#thumb .item').removeClass().addClass('item block-grid two');
		$('html').removeClass('mobile');
		break;
	case (x < 1500):
		$('#thumb .item').removeClass().addClass('item block-grid three');
		$('html').removeClass('mobile');
		break;
	default:
		$('#thumb .item').removeClass().addClass('item block-grid four');
		$('html').removeClass('mobile');
		break;
	}
}



/*-------------------------------------------------
// modal box
-------------------------------------------------*/

function _modalBox(){
	$(".modal-open").on('click', function (e){
		e.preventDefault();
		e.stopPropagation();

		var modtype = $(this).attr('data-link');
		console.log(modtype)
		$('.modal-box.'+modtype).fadeIn("fast");
	});
	$(".modal-box .close").on('click', function (){
		$(this).parent().parent().fadeOut("fast");
	});

}


/*-------------------------------------------------
// hover
-------------------------------------------------*/

function _hoverBarsHome(){
	$('.bar a').hover(
		function () {
			$(this).find('.title, .desc').addClass("on");
		},
		function () {
			$(this).find('.title , .desc').removeClass("on");
		}
	);
}





/*-------------------------------------------------
// appear animation / example: jasonweaver.name
-------------------------------------------------*/

function _appearAnimation(){
	function navMenu(){
		$(".nav-button").on('click', function (e){
			e.preventDefault();
			e.stopPropagation();
			$(".nav li").each(function(index){
				setTimeout(function() {
					console.log( 'bla '+ index)
					$(this).addClass('');
				}, index * 300);
			})
		})
	}
}








/*-------------------------------------------------
// nice scroll
-------------------------------------------------*/
/*
$(document).ready(
	function() {
		$("html").niceScroll();
	}
);
*/









/*-------------------------------------------------
// animations
-------------------------------------------------*/
function _appear(){

	jQuery('.animated-ed').appear();
	$(document.body).on('appear', '.bounceInRight', function() {
		$(this).each(function(){jQuery(this).addClass('animated-bounceInRight') });
	});
	$(document.body).on('appear', '.flip', function() {
		$(this).each(function(){jQuery(this).addClass('animated-flip') });
	});
	$(document.body).on('appear', '.slide', function() {
		$(this).each(function(){jQuery(this).addClass('animated-slide') });
	});
	$(document.body).on('appear', '.bounceInDown', function() {
		$(this).each(function(){jQuery(this).addClass('animated-bounceInDown') });
	});
	$(document.body).on('appear', '.bounceInLeft', function() {
		$(this).each(function(){jQuery(this).addClass('animated-bounceInLeft') });
	});
	$(document.body).on('appear', '.bounceIn', function() {
		$(this).each(function(){jQuery(this).addClass('animated-bounceIn') });
	});
	$(document.body).on('appear', '.puffIn', function() {
		$(this).each(function(){jQuery(this).addClass('animated-puffIn') });
	});
	$(document.body).on('appear', '.holeIn', function() {
		$(this).each(function(){jQuery(this).addClass('animated-holeIn') });
	});

}






/*-------------------------------------------------
// One Page Navigation
-------------------------------------------------*/

function _onePageNav(){
	$('#menu').onePageNav({
		currentClass: 'current',
		changeHash: false
	});
}



/*-------------------------------------------------
// TOGGLE
-------------------------------------------------*/
$('#toggle-view li .panel').hide();
function _toggle(){
	$('#toggle-view li').click(function () {

		var text = $(this).children('ul.panel');
		if (text.is(':hidden')) {
			text.slideDown('10');
			$(this).children('.accordion-head').addClass('accordion-head-active');
		} else {
			text.slideUp('10');
			$(this).children('.accordion-head').removeClass('accordion-head-active');
		}

	});

}


/*-------------------------------------------------
// Accordion
-------------------------------------------------*/

function _accordion(){

	$('#faqs .accordion > dd.active').show();

	$('.accordion > dt > a').click(function() {
		if( $(this).parent().hasClass('active') ){
			$(this).parents('.accordion').find('dt').removeClass('active');
			$(this).parents('.accordion').find('dd').removeClass('active').slideUp();

			return false;
		} else {
			$(this).parents('.accordion').find('dt').removeClass('active');
			$(this).parents('.accordion').find('dd').removeClass('active').slideUp();
			$(this).parent().addClass('active').next().addClass('active').slideDown();

			return false;
		}
	});

}


/*-------------------------------------------------
// Menu
-------------------------------------------------*/
function _nav(){
  $("#nav > li > a.menu").on("click", function(e){
	if($(this).parent().has("ul")) {
	  e.preventDefault();
	}
	if(!$(this).hasClass("open")) {
	  $("#nav li ul").slideUp(350);
	  $("#nav li a").removeClass("open");

	  $(this).next("ul").slideDown(350);
	  $(this).addClass("open");
	}

	else if($(this).hasClass("open")) {
	  $(this).removeClass("open");
	  $(this).next("ul").slideUp(350);
	}
  });
}





/*-------------------------------------------------
// flexslider
-------------------------------------------------*/

function _flexslider(){
	jQuery('.flexslider').flexslider({
		animation: "slide",
		controlNav:"false"
  });
}





/*-------------------------------------------------
// reorder
-------------------------------------------------*/

 function _reorder() {
	  var container = $('.all-works'); // Container
	  var nodes = container.children('.one-work'); // All children
	  for (var i = 1; i < nodes.length; i++) {
			// Move random child to the end
			container.append(nodes.eq(Math.floor(Math.random() * nodes.length)));
	  }
}





/*-------------------------------------------------
// isotope filter
-------------------------------------------------*/

function _filter(){
	(function($) {
		var container = $('.all-works');

		function getNumbColumns() {
			var winWidth = $(window).width(),
				columnNumb = 1;

			if (winWidth > 1500) {
				columnNumb = 3;
			} else if (winWidth > 1200) {
				columnNumb = 3;
			} else if (winWidth > 900) {
				columnNumb = 2;
			} else if (winWidth > 600) {
				columnNumb = 1;
			} else if (winWidth > 300) {
				columnNumb = 1;
			}

			return columnNumb;
		}

		function setColumnWidth() {
			var winWidth = $(window).width(),
				columnNumb = getNumbColumns(),
				postWidth = Math.floor(winWidth / columnNumb);
		}

		$('#portfolio-filter #filter a').click(function() {
			var selector = $(this).attr('data-filter');

			$(this).parent().parent().find('a').removeClass('current');
			$(this).addClass('current');

			container.isotope({
				filter: selector
			});
			setTimeout(function() {
				reArrangeProjects();
			}, 300);

			return false;
		});

		function reArrangeProjects() {
			setColumnWidth();
			container.isotope('reLayout');
		}
		container.imagesLoaded(function() {
			setColumnWidth();


			container.isotope({
				itemSelector: '.one-work',
				layoutMode: 'masonry',
				resizable: false,
				filter: ':nth-child(-n+16)',
				//sortBy:'random'
			});


/*			setTimeout(function() {
				container.isotope({
					filter: ':nth-child(-n+16)'
				});
				}, 1000);

			});
*/


		});



		$(window).on('debouncedresize', function() {
			reArrangeProjects();
		});
	})(jQuery);

}




/*-------------------------------------------------
// _browseButton
-------------------------------------------------*/

function _browseButton(){
	$('.browse .btn.browse-01').on('click' , function(){
		$('.browse .input-01').click();
	})

	$('input[type="file"]').change( function(){
		var filepath = $(this).val().replace(/\s/g, "");
		var filename= filepath.split('\\').pop();
		if (filename.length === 0){
			filename = "No file selected";
		}
		$(this).next('input').val(filename);
	});
}


/*

	$('.btn.browse-01').on('click' , function(){
		$('input.hiddenx.browse-01').click();
	})

	$('input.browse-01.hiddenx').change( function(){
		var filepath = $(this).val().replace(/\s/g, "");
		var filename= filepath.split('\\').pop();

		if (filename.length === 0){
			filename = "";
		}

		switch( $(this).prop("id")){

			case "file-01":
				$('.btn.browse-01').next('p').text(filename);
				alert('dddd')
			break;

			case "inputvideo":
				$("input[name='entryVideo']").val(filename);
				$('.btnvideo').next('p').text(filename);
			break;

			case "inputsdk":
				$("input[name='entrySdk']").val(filename);
				$('.btnsdk').next('p').text(filename);
			break;
		}

	});*/





/*--------------------------- close -----------------------*/

});