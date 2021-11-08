// window.document.addEventListener('scroll', event => {
// 	const sectionsPage = [
// 		{
// 			name: "newspaper",
// 			startLogic: window.scrollY > 500,
// 			startNumber: 500,
// 			endLogic: window.scrollY < 900,
// 			endNumber: 900
// 		},
// 		{
// 			name: "console",
// 			startLogic: window.scrollY > 1100,
// 			startNumber: 1100,
// 			endLogic: window.scrollY < 1600,
// 			endNumber: 1600
// 		},
// 		{
// 			name: "rocket",
// 			startLogic: window.scrollY > 1800,
// 			startNumber: 1800,
// 			endLogic: window.scrollY < 2200,
// 			endNumber: 2200
// 		},
// 		{
// 			name: "coding",
// 			startLogic: window.scrollY > 2400,
// 			startNumber: 2400,
// 			endLogic: window.scrollY < 2800,
// 			endNumber: 2800
// 		},
// 	]

// 	// console.log(window.scrollY);

// 	sectionsPage.forEach(item => {
// 		const centerY = (item.startNumber + item.endNumber) / 2;

// 		if(item.startLogic && item.endLogic) {
// 			window.scroll(0, centerY);
// 		}

// 		// setTimeout(() => {
// 		// 	sectionsPage.forEach(item => {
// 		// 		item.passed = false;
// 		// 	})
// 		// }, 2000);
// 	});
// });

const sectionsPage = [
	{
		name: "newspaper",
		startLogic: window.scrollY > 500,
		startNumber: 500,
		endLogic: window.scrollY < 900,
		endNumber: 900
	},
	{
		name: "console",
		startLogic: window.scrollY > 1100,
		startNumber: 1100,
		endLogic: window.scrollY < 1600,
		endNumber: 1600
	},
	{
		name: "rocket",
		startLogic: window.scrollY > 1800,
		startNumber: 1800,
		endLogic: window.scrollY < 2200,
		endNumber: 2200
	},
	{
		name: "coding",
		startLogic: window.scrollY > 2400,
		startNumber: 2400,
		endLogic: window.scrollY < 2800,
		endNumber: 2800
	},
]

class ElementArrow {
	constructor({ 
		backgroundColor = "#ffffff", 
		colorArrow = "#000000", 
		opacity = 0.5,
		velocityTransitionAllMiliseconds = 500,
		animation = {
			name: "",
			duration: "",
			direction: "",
			delay: "",
			iterationCount: "",
			FillMode: "",
			timingFunction: ""
		},
		positionElement = {
			top: "",
			right: "20px",
			bottom: "20px",
			left: ""
		}
	} = {}) {
		this._backgroundColor = backgroundColor;
		this._colorArrow = colorArrow;
		this._opacity = opacity;
		this._velocityTransitionAllMiliseconds = velocityTransitionAllMiliseconds;
		this._element = window.document.createElement("div");
		this._animation = animation;
		this._positionElement = positionElement;
	}

	get backgroundColor() {
		return this._backgroundColor;
	}

	get colorArrow() {
		return this._colorArrow;
	}

	get x() {
		return this._x;
	}

	get y() {
		return this._y;
	}

	get element() {
		return this._element;
	}

	get opacity() {
		return this._opacity;
	}

	get velocityTransitionAllMiliseconds() {
		return this._velocityTransitionAllMiliseconds;
	}

	get animation() {
		return this._animation;
	}

	get positionElement() {
		return this._positionElement;
	}

	render() {
		const stylesCircle = [
			{
				name: "width",
				value: "100px"
			},
			{
				name: "height",
				value: "100px"
			},
			{
				name: "backgroundColor",
				value: this.backgroundColor
			},
			{
				name: "borderRadius",
				value: "100%"
			},
			{
				name: "position",
				value: "fixed"
			},
			{
				name: "left",
				value: this.positionElement.left
			},
			{
				name: "top",
				value: this.positionElement.top
			},
			{
				name: "right",
				value: this.positionElement.right
			},
			{
				name: "bottom",
				value: this.positionElement.bottom
			},
			{
				name: "opacity",
				value: this.opacity
			},
			{
				name: "transition",
				value: `all ${this.velocityTransitionAllMiliseconds}`
			},
			{
				name: "display",
				value: "flex"
			},
			{
				name: "justifyContent",
				value: "center"
			},
			{
				name: "alignItems",
				value: "center"
			},
			{
				name: "animationName",
				value: this.animation.name
			},
			{
				name: "animationDuration",
				value: this.animation.duration
			},
			{
				name: "animationDelay",
				value: this.animation.delay
			},
			{
				name: "animationIterationCount",
				value: this.animation.iterationCount
			},
			{
				name: "animationTimingFunction",
				value: this.animation.timingFunction
			},
			{
				name: "animationDirection",
				value: this.animation.direction
			},
			{
				name: "animationFillMode",
				value: this.animation.fillMode
			}
		]

		const svgHTMLPure = `
			<svg width="60px" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
				<polygon fill="${this.colorArrow}" points="2.38 7 14.38 7 8.38 14 2.38 7"/><rect x="6.38" y="2.11" width="4" height="6" transform="translate(16.75 10.22) rotate(-180)"/>
			</svg>
		`

		this.element.classList.add("circle-arrow");
		stylesCircle.forEach(item => {
			this.element.style[item.name] = item.value;
		});

		this.element.innerHTML = svgHTMLPure;
		window.document.body.appendChild(this.element);
	}
}

const circleArrow = new ElementArrow();
circleArrow.render();
console.log(circleArrow);
