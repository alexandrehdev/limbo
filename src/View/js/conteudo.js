// HORIZONTAL SCROLL
var swiper = new Swiper(".horizontalBlock", {
	slidesPerView: 4,
	spaceBetween: 30,
	centeredSlides: false,
	pagination: {
		// el: ".swiper-pagination",
		clickable: true,
	},
	navigation: {
		nextEl: ".horizontalBlock .swiper-button-next",
		prevEl: ".horizontalBlock .swiper-button-prev",
	}
});