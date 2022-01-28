const btn = document.querySelector(".title-name");
btn.addEventListener("click", function () {
	window.location.href = "index.php";
});

const logout = document.querySelector(".logout");
logout.addEventListener('click',function(){
	window.location.href = "../../../../logout.php";
})

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
// const scrollContainer = document.querySelector(".horizontalBlock");

// scrollContainer.addEventListener("wheel", (evt) => {
// 	evt.preventDefault();
// 	scrollContainer.scrollLeft += evt.deltaY;
// });
// HORIZONTAL SCROLL


const descriptionCardNotice = window.document.querySelectorAll(".text-card-noticias > span");

descriptionCardNotice.forEach(span => {

	// Pega o conteúdo completo antes da conversão	
	const oldText = span.innerText;
	
	// Limita de 0 até 100 caracteres
	const text = span.innerText.substring(0, 100);
	
	// Incrementar "..." no final do texto convertido
	const textMark = `${text}...`;

	// Incrementa de volta para o elemento de texto
	span.innerText = textMark;

	span.addEventListener("mouseover", ({ target }) => {
		target.innerText = oldText;
	});

	span.addEventListener("mouseleave", ({ target }) => {
		target.innerText = textMark;
	})
})