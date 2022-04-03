// HORIZONTAL SCROLL
var swiperImprovements = new Swiper(".cards-destaques", {
	slidesPerView: 1,
	spaceBetween: 30,
	// centeredSlides: true,
	loop: true,
	navigation: {
		nextEl: ".swiper-button-next",
		prevEl: ".swiper-button-prev"
	}
});

var swiperOthers = new Swiper(".cards-normal", {
	slidesPerView: 3.5,
	spaceBetween: 30,
	centeredSlides: false,
	pagination: {
		el: ".swiper-pagination",
		type: "progressbar",
		
	},
});