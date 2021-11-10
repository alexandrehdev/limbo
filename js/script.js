// const btn = document.querySelector(".title-name");
// btn.addEventListener("click", function () {
// 	window.location.href = "index.php";
// });

document.querySelector('.btn-account').addEventListener('click',function(){
	window.location.href = "../pages/registerLogin/index.php";
});

// window.scroll({
// 	top:20,
// 	left:0,
// 	behavior:'smooth'
// });

// window.addEventListener("scroll", function(){
	// var cards = document.getElementsByClassName('cards');

	// cards.forEach(
	// 	window.scrollTo({ top: cards, behavior: 'smooth'})
	// );
	// cards.scrollIntoView(true);

	// window.location.href = "cards";
	// var scrollCard = document.querySelector(".card-info").offsetTop;
	// window.scrollTo({ top: cards, behavior: 'smooth'});
// });


const sectionsPage = [
	{
		name: "businessman",
		value: 0
	},
	{
		name: "newspaper",
		value: 700
	},
	{
		name: "console",
		value: 1351
	},
	{
		name: "rocket",
		value: 2051
	},
	{
		name: "coding",
		value: 2709
	},
]

const circleArrow = new ElementArrow();

console.log(circleArrow);

circleArrow.render();

let id = 0;
let direction = "bottom";

circleArrow.click(target => {
	const svg = target.path[1];

	switch(direction) {
		case "bottom":
			id++;

			if(id === 4 || window.scrollY === 2709) {
				direction = "top";

				svg.style.transform = "rotate(180deg)";
			}
			break;
		case "top":
			id--;

			if(id === 0  || window.scrollY === 0) {
				direction = "bottom";

				svg.style.transform = "rotate(0deg)";
			}
			break;
	}

	window.scroll(0, sectionsPage[id].value);
});

// window.document.addEventListener("scroll", () => {
// 	console.log(window.scrollY);
// });

const [ svg, circle ] = circleArrow.getElements();
console.log(svg);
console.log(circle);