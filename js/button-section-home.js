// Botão section
const sectionsPage = [
	"businessman",
	"newspaper",
	"console",
	"rocket",
	"coding"
]

const circleArrow = new ElementArrow();
circleArrow.render();

let id = 0;
let direction = "bottom";

const elements = circleArrow.getElements();
const circle = elements[1];
const svg = circle.children[0];

circleArrow.click(target => {
	switch(direction) {
		case "bottom":
			id++;

			if(id === 4) {
				direction = "top";

				svg.style.transform = "rotate(180deg)";
			}
			break;
		case "top":
			id--;

			if(id === 0) {
				direction = "bottom";

				svg.style.transform = "rotate(0deg)";
			}
			break;
		default:
	}
	window.location.href = `${window.location.origin}/#${sectionsPage[id]}`;
});

