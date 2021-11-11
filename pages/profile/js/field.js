const buttonFieldAll = window.document.querySelectorAll("button.change-field");

buttonFieldAll.forEach(button => {
	button.addEventListener("mouseenter", ({ target }) => {
		target.style.transform = "scale(1.2)";
	})

	button.addEventListener('click', ({ target }) => {
		target.style.transform = "scale(1)";

		let timer
		clearTimeout(timer);
		timer = setTimeout(() => {
			target.style.transform = "scale(1.2)";
		}, 500);
	}, false);

	button.addEventListener("mouseenter", ({ target }) => {
		target.style.transform = "scale(1)";
	})
})