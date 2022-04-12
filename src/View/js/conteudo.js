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

// Cards de recomendação

(() => {
	function modeTextSimplified({
		element, 
		maxString = 65,
		mode = "simplified"
	} = {}) {
		const oldText = element.innerText;
		const textArray = oldText.split("");
		const textArraySimplified = textArray.slice(0, maxString);

		let newText = textArraySimplified.join("");
		
		if(element.innerText !== newText) {
			element.innerText = `${newText}...`;
		}
	}

	const cardsRecommended = document.querySelectorAll(".card-recommended");

	for (let item of cardsRecommended) {
		const cardDescription = item.children[2];
		const oldText = cardDescription.innerText;

		modeTextSimplified({
			element: cardDescription,
		});
	}
})()