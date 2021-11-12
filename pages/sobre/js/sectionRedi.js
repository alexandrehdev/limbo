const buttonSection = new ElementArrow({
	backgroundColor: "#000000",
	colorArrow: "#ffffff"
});

buttonSection.render();

// Botão section
const sectionsDev = [
	"dev1",
	"dev2",
	"dev3",
	"dev4"
]

let id = 0;
let direction = "bottom";

const elements = buttonSection.getElements();
const circle = elements[1];
const svg = circle.children[0];

buttonSection.click(target => {
	switch(direction) {
		case "bottom":
			id++;

			if(id === (sectionsDev.length - 1)) {
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
	window.location.href = `${window.location.origin}/pages/sobre/#${sectionsDev[id]}`;
});
