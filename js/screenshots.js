$(function() {
	$("#pdn-screenshot-carousel-container").show();
	$(".pdn-screenshot-carousel").jCarouselLite({
		btnNext: ".next",
		btnPrev: ".prev",
		visible: 1,
		speed: 1000,
		auto: 15000,
		easing: "easeOutBounce" /* easeOutElastic, easeOutBack, easeOutBounce */
	});
});