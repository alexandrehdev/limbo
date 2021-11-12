const buttonFieldAll = window.document.querySelectorAll("button.change-field");
const TIMERMILISECONDS = 300;

buttonFieldAll.forEach(button => {
	button.style.transitionProperty = "transform";
	button.style.transitionDuration = `${TIMERMILISECONDS}ms`;

	button.addEventListener('click', () => {
		button.style.transform = "scale(1)";

		let timer
		clearTimeout(timer);
		timer = setTimeout(() => {
			button.style.transform = "scale(1.2)";
		}, TIMERMILISECONDS);
	}, false);

	button.addEventListener("mouseenter", () => {
		button.style.transform = "scale(1.2)";
	}, false);

	button.addEventListener("mouseleave", () => {
		button.style.transform = "scale(1)";
	}, false);
})