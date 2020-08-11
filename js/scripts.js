///--------------//
function pieChart() {

	//circle progress bar
	if (jQuery().easyPieChart) {

		jQuery('.chart').each(function(){

			var $currentChart = jQuery(this);
			var imagePos = $currentChart.offset().top;
			var topOfWindow = jQuery(window).scrollTop();
			if (imagePos < topOfWindow+900) {

				var size = $currentChart.data('size') ? $currentChart.data('size') : 270;
				var line = $currentChart.data('line') ? $currentChart.data('line') : 20;
				var bgcolor = $currentChart.data('bgcolor') ? $currentChart.data('bgcolor') : '#ffffff';
				var trackcolor = $currentChart.data('trackcolor') ? $currentChart.data('trackcolor') : '#c14240';
				var speed = $currentChart.data('speed') ? $currentChart.data('speed') : 3000;


				$currentChart.easyPieChart({
					barColor: trackcolor,
					trackColor: bgcolor,
					scaleColor: false,
					scaleLength: false,
					lineCap: 'butt',
					lineWidth: line,
					size: size,
					rotate: 0,
					animate: speed,
					onStep: function(from, to, percent) {
						jQuery(this.el).find('.percent').text(Math.round(percent));
					}
				});
			}

		});
	}
}

// Burger actions
$(document).ready(function() {
  $('.header__burger').click(function(event) {
    $('.header__burger,.header__menu').toggleClass('active');
    $('body').toggleClass('lock');
  })
  $('.header__list').click(function(event) {
        $('.header__burger,.header__menu').removeClass('active');
        $('body').removeClass('lock');})
});

// Slider
$(function() {
  // Owl Carousel
  var owl = $(".owl-carousel");
  owl.owlCarousel({
    items: 1,
    loop: true,
    nav: false,
    autoplay: true,
    autoplayTimeout: 5000,
    smartSpeed: 3000,
    animateOut: "slideOutRight",
    animateIn: "slideInLeft",
  });
});

// nav color change
var a = $("header").offset().top;

$(document).scroll(function(){
       if($(this).scrollTop() > a)
       {
          $('header').css({"background":"white", 'border-bottom' : '1px solid gray'});
					$('.header__link').css('color', 'black');
       } else {
          $('header').css({"background":"rgba(0,0,0,0.1)", 'border-bottom' : 'none'});
					$('.header__link').css({'color' : 'rgb(240,240,240)'});
       }
});
// About

//bootstrap animated progressbar
	if (jQuery().appear) {
		if (jQuery().progressbar) {
			jQuery('.progress .progress-bar').appear();
			jQuery('.progress .progress-bar').filter(':appeared').each(function(index){
				jQuery(this).progressbar({
					transition_delay: 300
				});
			});
			jQuery('body').on('appear', '.progress .progress-bar', function(e, $affected ) {
				jQuery($affected).each(function(index){
					jQuery(this).progressbar({
						transition_delay: 300
					});
				});
			});
			//animate progress bar inside bootstrap tab
			jQuery('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
				jQuery(jQuery(e.target).attr('href')).find('.progress .progress-bar').progressbar({
					transition_delay: 300
				});
			});
		}
	}

  jQuery(window).scroll(function() {
	//circle progress bar
	pieChart();
});
  // ------------------- //

// init Isotope
jQuery('.isotope_container').each(function(index) {
	var $container = jQuery(this);
	var layoutMode = ($container.hasClass('masonry-layout')) ? 'masonry' : 'fitRows';
	$container.isotope({
		// itemSelector: '.isotope-item',
		percentPosition: true,
		layoutMode: layoutMode,
		masonry: {
		}
	});


	var $filters = jQuery(this).attr('data-filters') ? jQuery(jQuery(this).attr('data-filters')) : $container.prev().find('.filters');
	// bind filter click
	if ($filters.length) {
		$filters.on( 'click', 'a', function( e ) {
		e.preventDefault();
		var filterValue = jQuery( this ).attr('data-filter');
		// use filterFn if matches value
		// filterValue = filterFns[ filterValue ] || filterValue;
		$container.isotope({ filter: filterValue });
		jQuery(this).siblings().removeClass('selected active');
		jQuery(this).addClass('selected active');
	});
	}
});

// ---------------- ??

//owl carousel//
	////////////////
	if (jQuery().owlCarousel) {
		jQuery('.testimonials-owl-carousel').each(function() {
			var $carousel = jQuery(this);
			var loop = $carousel.data('loop') ? $carousel.data('loop') : false;
			var margin = ($carousel.data('margin') || $carousel.data('margin') == 0) ? $carousel.data('margin') : 30;
			var nav = $carousel.data('nav') ? $carousel.data('nav') : false;
			var dots = $carousel.data('dots') ? $carousel.data('dots') : true;
			var themeClass = $carousel.data('themeclass') ? $carousel.data('themeclass') : 'owl-theme';
			var center = $carousel.data('center') ? $carousel.data('center') : false;
			var items = $carousel.data('items') ? $carousel.data('items') : 4;
			var autoplay = $carousel.data('autoplay') ? $carousel.data('autoplay') : false;
			var responsiveXs = $carousel.data('responsive-xs') ? $carousel.data('responsive-xs') : 1;
			var responsiveSm = $carousel.data('responsive-sm') ? $carousel.data('responsive-sm') : 2;
			var responsiveMd = $carousel.data('responsive-md') ? $carousel.data('responsive-md') : 3;
			var responsiveLg = $carousel.data('responsive-lg') ? $carousel.data('responsive-lg') : 4;
			// var responsive = $carousel.data('responsive') ? jQuery.parseJSON($carousel.data('responsive')) : {0:{items:1},767:{items:2},992:{items:2},1200:{items: 4}};

			$carousel.owlCarousel({
				loop: loop,
				margin: margin,
				nav: nav,
				autoplay: autoplay,
				dots: dots,
				themeClass: themeClass,
				center: center,
				items: items,
				responsive: {
					0:{
						items: responsiveXs
					},
					767:{
						items: responsiveSm
					},
					992:{
						items: responsiveMd
					},
					1200:{
						items: responsiveLg
					}
				},
			})
			.addClass( themeClass )
		});

	} //eof owl-carousel

// Link
jQuery(function($){
$('a[href*="#"]').on('click.smoothscroll', function( e ){
var hash    = this.hash, _hash   = hash.replace(/#/,''), theHref = $(this).attr('href').replace(/#.*/, '');
if( theHref && location.href.replace(/#.*/,'') != theHref ) return;
var $target = _hash === '' ? $('body') : $( hash + ', a[name="'+ _hash +'"]').first();
if( ! $target.length ) return;
e.preventDefault();
$('html, body').stop().animate({ scrollTop: $target.offset().top - 0 }, 1500, 'swing', function(){
window.location.hash = hash;
});
});
});

//prettyPhoto
$(document).ready(function(){
	 $("a[rel^='prettyPhoto']").prettyPhoto();
 });


// Video header
 function setVideoCenter() {
	var $box = $('.video-box');
	var height = $box.height();
	var width = $box.width();
	var new_height = width / 1.78;
	if (new_height > height) {
		$box.find('video').css({
			width: width,
			height: new_height,
			top: '-' + (new_height / 2 - height / 2) + 'px',
			left: '0',
		});
	} else {
		var new_width = height * 1.78;
		$box.find('video').css({
			width: new_width,
			height: height,
			top: '0',
			left: '-' + (new_width / 2 - width / 2) + 'px'
		});
	}
}

$(function(){
	setVideoCenter();
	$(window).resize(setVideoCenter);
});


//ajax request to server
$("#sendMail").on("click", function() {
	var name = $("#form__name").val().trim();
	var phone = $("#form__phone").val().trim();
	var message = $("#form__message").val().trim();

	$.ajax({
			url:'mail.php',
			type: 'POST',
			cache: false,
			data: { 'name': name, 'phone': phone, 'message': message },
			dataType: 'html',
			beforeSend: function() {
				$("#sendMail").prop("disabled", true);
			},
			success: function(data) {
					if(!data){
							 $('#success_message').fadeIn().html("Произошла ошибка и сообщение не отправилось!");
	 setTimeout(function() {
		 $('#success_message').fadeOut("slow");
							 }, 2000 );
					}
					 else{
							 $('#success_message').css({'color':'#3CB371'});
							 $('#success_message').fadeIn().html(data+" " +"мы приняли ваш запрос, скоро с вами свяжемся!");
	 setTimeout(function() {
		 $('#success_message').fadeOut("slow");
							 }, 2000 );
							 $("#contactForm").trigger("reset");
							 $("#sendMail").prop("disabled", false);
					 }
			}
	});
});


//toTop
if (jQuery().UItoTop) {
	jQuery().UItoTop({ easingType: 'easeOutQuart' });
}