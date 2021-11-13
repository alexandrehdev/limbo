const buttonFieldAll = window.document.querySelectorAll("button.change-field");
const divAreaInput = window.document.querySelectorAll(".input-area");
const TIMERMILISECONDS = 300;

buttonFieldAll.forEach((button, index) => {
	button.style.transitionProperty = "transform";
	button.style.transitionDuration = `${TIMERMILISECONDS}ms`;

	const value = divAreaInput[index].children[0];
	const divInput = divAreaInput[index].children[1];

	button.addEventListener('click', () => {
		button.style.transform = "scale(1)";

		let timer
		clearTimeout(timer);
		timer = setTimeout(() => {
			button.style.transform = "scale(1.2)";
		}, TIMERMILISECONDS);
	
		value.classList.toggle("change");
		divInput.classList.toggle("show-input");
	}, false);

	button.addEventListener("mouseenter", () => {
		button.style.transform = "scale(1.2)";
	}, false);

	button.addEventListener("mouseleave", () => {
		button.style.transform = "scale(1)";
	}, false);
});

// divAreaInput.forEach((item, index) => {
	
// })