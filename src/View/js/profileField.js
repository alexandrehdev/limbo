const buttonFieldAll = window.document.querySelectorAll(".change-field");
const buttonCorrectAll = window.document.querySelectorAll(".apply-correct");

const divAreaInput = window.document.querySelectorAll(".input-area");
const TIMERMILISECONDS = 500;

buttonFieldAll.forEach((button, index) => {
	const value = divAreaInput[index].children[0];
	const divInput = divAreaInput[index].children[1];
	const divButtonCorrect = buttonCorrectAll[index];

	const arrayButtons = [
		button,
		divButtonCorrect
	]

	function setAnimationButton(button) {

		button.style.animationName = "click-button";
		button.style.animationDuration = `${TIMERMILISECONDS}ms`

		let timer
		clearTimeout(timer);
		timer = setTimeout(() => {
			button.style.animationName = "";
		}, TIMERMILISECONDS + 50);
	}

	button.addEventListener('click', () => {
		setAnimationButton(button);
	
		value.classList.toggle("change");
		divInput.classList.toggle("show-input");

		const verifyChangeField = value.classList.contains("change");
		if(verifyChangeField) {
			divButtonCorrect.style.display = "block";
		} else {
			divButtonCorrect.style.display = "none";
		}
	}, false);

	divButtonCorrect.addEventListener('click', () => {
		setAnimationButton(divButtonCorrect);
	})
});