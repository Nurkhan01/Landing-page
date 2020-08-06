$(window).on('scroll', function() {
	var scrollCoef = 0.0035;

	$('.navbar').css({
		opacity: 1 - $(window).scrollTop() * scrollCoef
	})
});
