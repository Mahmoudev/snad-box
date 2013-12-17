$(document).ready(function() {


/*-------------------------------------------------
// at start
-------------------------------------------------*/

// _addClass();
_fullBackground();
_scrollTo();
_onePageNav();
_scrollUp();
_appear();
//_accordion();
//_setWidth();
//_addClassAnimated();
//_mPlace();
//_toolTips();
//_appearAnimation();
//_prettyPhoto();
//_toggle();
//_nav();
//_filter();
//_oneWorkWidth();
//_gMap();
//_gMap3();
//_forceWidth_1();
//_forceHeight_map();
//_forceWidth_slide();
//_hideMenu();
//_cycleAfter();
//_mouseTeamHover();
//_mouseLangHover();
//_tooTips();
//_flexslider();
//_reorder();
//_lazyLoad();
//_distanceCalc();
_browseButton();





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
// tooltips
-------------------------------------------------*/

function _tooTips(){
	$(".teamPhoto").tooltip({
	  'selector': '',
	  'placement': 'top'
	});

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

function _placeholderClear(){
	$('input[type="text"]').focus(function() {
		$(this).attr('data-restore', $(this).attr('placeholder'));
		$(this).attr('placeholder' , '');
	});

	$('input[type="text"]').blur(function() {
		$(this).attr('placeholder', $(this).attr('data-restore'));
	});

}




/*-------------------------------------------------
// Mplace
-------------------------------------------------*/

function _mPlace(){
	function gMap() {
		new Maplace({
			show_markers: true,
			locations: [{
				lat: 25.34352 ,
				lon: 55.38560,
				zoom: 10,
				controls_on_map: false,
				html: [
					//'<h5>The Regulation & Supervision Bureau</h5>',
					'<p>Al Sila Tower 19th floor<br />Sowwah Square<br />Al Maryah Island, Abu Dhabi</p>'
				].join(''),
				icon: 'http://maps.google.com/mapfiles/markerA.png',
			}]
		}).Load();

	}
}

/*
if (document.location.href.match(/(contact-us)/)) {
	googleMap();
}
*/

/*-------------------------------------------------
// Gmap3
-------------------------------------------------*/
function _gMap3(){

	$("#map").gmap3({
		marker:{
		latLng:[25.34352,55.38560],  options:{icon: "assets/images/css/marker.png"}
	},
		map:{
		  options:{
		styles: [ {
		stylers: [
		{ "visibility": "on" }, { "saturation": -90 }, { "gamma": 1 }]
		}],
		zoom: 15,
		scrollwheel: false,
		mapTypeControl: false,
		streetViewControl: false,
		scalControl: false,
		draggable: true}
		}

	});
}


/*-------------------------------------------------
// Gmap
-------------------------------------------------*/
function _gMap(){
		var map;
		  map = new GMaps({
		disableDefaultUI: true,
		scrollwheel: false,
			el: '#map',
			lat: 25.34352,
			lng: 55.38560
		  });
		  map.drawOverlay({
			lat: map.getCenter().lat(),
			lng: map.getCenter().lng(),
			layer: 'overlayLayer',
			content: '<div class="overlay"></div>',
			verticalAlign: 'center',
			horizontalAlign: 'center'
		  });
			var styles = [
	  {
		"featureType": "poi",
		"stylers": [
		  { "visibility": "on" },
		  { "weight": 0.9 },
		  { "lightness": 37 },
		  { "gamma": 0.62 },
		  { "hue": "#ff0000" },
		  { "saturation": -93 }
		]
	  },{
		"featureType": "poi",
		"stylers": [
		  { "hue": "#ff0000" },
		  { "saturation": -1 },
		  { "color": "#ffffff" },
		  { "weight": 0.2 }
		]
	  },{
		"featureType": "road",
		"stylers": [
		  { "hue": "#ff0000" },
		  { "saturation": -98 }
		]
	  },{
		"featureType": "landscape",
		"stylers": [
		  { "hue": "#ff0000" },
		  { "saturation": -89 }
		]
	  },{
		"featureType": "water",
		"stylers": [
		  { "weight": 0.4 },
		  { "saturation": -38 }
		]
	  }
	];

	map.addStyle({
		styledMapName:"Styled Map",
		styles: styles,
		mapTypeId: "map_style"
	});

	map.setStyle("map_style");

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
		changeHash: true,
/*		scrollSpeed: 1,
		scrollOffset: 30,
		scrollThreshold: 0.5,
		filter: '',
		easing: 'swing',
		begin: function() {
			//I get fired when the animation is starting
		},
		end: function() {
			//I get fired when the animation is ending
		},
		scrollChange: function($currentListItem) {
			//I get fired when you enter a section and I pass the list item of the section
		}*/
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