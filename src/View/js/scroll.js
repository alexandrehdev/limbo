/*
	O objeto Foi feito para renderizar um botão na interface de forma mais independente
	Recebe valores que automaticamente serão armazenado caso o objeto não recebe nenhum valor
	Lhe mostrarei as configurações do objeto



	* Propriedades do objeto

	**1 - Cores 

	const elementArrow = new ElementArrow({
		backgroundColor: "#00ff00",
		colorArrow: "#0000ff"
	});

	- backgroundColor
	TIPO: String
	VALOR PADRÃO: "#ffffff" (Branco)
	RECEBE: Pode receber em qualquer formato aceitado pela propriedade de cor do css
	UTILIDADE: Usado para setar a cor de fundo do botão

	- colorArrow
	TIPO: String
	VALOR PADRÃO: "#000000" (Preto)
	RECEBE: Pode receber em qualquer formato aceitado pela propriedade de cor do css
	UTILIDADE: Usado para setar a cor da seta

	
	**2 - Opacity
	
	const elementArrow = new ElementArrow({
		opacity: 0.2
	});

	- opacity
	TIPO: Number
	VALOR PADRÃO: 0.5
	RECEBE: Recebe um valor de 1 até 0, pode ser 0.1, 0.5, 0.8 e etc
	UTILIDADE: Usado para setar a transparência do botão completamente

	
	**3 - Velocidade de transição global

	const elementArrow = new ElementArrow({
		velocityTransitionAllMiliseconds: 1000
	});

	- velocityTransitionAllMiliseconds
	TIPO: Number
	VALOR PADRÃO: 500
	RECEBE: Valor em milisegundos
	UTILIDADE: Usado para setar a velocidade de animação em todas as propriedades
	

	**4 - Posição do elemento no corpo da página

	const elementArrow = new ElementArrow({
		positionElement: {
			top: "",
			right: "50px",
			bottom: "50px",
			left: ""
		}
	});

	- positionElement
	TIPO: Object
	VALOR PADRÃO: { top: "", right: "30px", bottom: "30px", left: "" }
	RECEBE: Objeto de configuração de posição de elemento na interface
	UTILIDADE: Usado para setar a posição no documento, ele está setado como posição
	fixa



	* Funções 
	

	** new ElementArrow().render()

	const elementArrow = new ElementArrow();
	elementArrow.render();

	- render()
	RECEBE: Não recebe valor
	UTILIDADE: Usado para renderizar o botão na página

	
	** new ElementArrow().click(callback);
	
	const elementArrow = new ElementArrow();
	elementArrow.render();

	elementArrow.click(() => {
		console.log("Olá mundo");
	})
	
	- click(callback)
	RECEBE: Recebe uma callback(função de seta)
	UTILIDADE: Faz uma ação ao clicar no botão
	PARAMÊTRO CALLBACK: Pega exatamente o mesmo objeto do addEventListener para mouse
						chamado MouseEvent, Segue esse link para conhecer o objeto
						e saber manipula-lo: 
						https://developer.mozilla.org/en-US/docs/Web/API/MouseEvent


	** new ElementArrow().getElements()

	const elementArrow = new ElementArrow();
	elementArrow.render();

	const elements = elementArrow.getElements();

	const svg = elements[0];
	const elementCircle = element[1];

	console.log(svg);
	console.log(elementCircle);

	- getElements()
	RECEBE: Não recebe valor
	UTILIDADE: Retorna um array onde o primeiro dado é o svg e o segundo o circulo








	feat: Astronauto
*/

class ElementArrow {
	constructor({ 
		backgroundColor = "#ffffff",
		colorArrow = "#000000", 
		opacity = 0.5,
		velocityTransitionAllMiliseconds = 500,
		positionElement = {
			top: "",
			right: "30px",
			bottom: "30px",
			left: ""
		}
	} = {}) {
		this._backgroundColor = backgroundColor;
		this._colorArrow = colorArrow;
		this._opacity = opacity;
		this._velocityTransitionAllMiliseconds = velocityTransitionAllMiliseconds;
		this._element = window.document.createElement("div");
		this._positionElement = positionElement;
		this._svgHTML = null;
	}

	get backgroundColor() {
		return this._backgroundColor;
	}

	get colorArrow() {
		return this._colorArrow;
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

	get positionElement() {
		return this._positionElement;
	}

	set svgHTML(value) {
		this._svgHTML = value;
	}

	get svgHTML() {
		return this._svgHTML;
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
				value: `all ${this.velocityTransitionAllMiliseconds}ms`
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
				name: "cursor",
				value: "pointer"
			}
		]

		const svgHTMLPure = ` 
			<svg width="60px" fill="${this.colorArrow}" style="transition: all 200ms" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
				<polygon points="2.38 7 14.38 7 8.38 14 2.38 7"/><rect x="6.38" y="2.11" width="4" height="6" transform="translate(16.75 10.22) rotate(-180)"/>
			</svg> 
		`

		this.svgHTML = svgHTMLPure;

		this.element.classList.add("circle-arrow");

		stylesCircle.forEach(item => {
			this.element.style[item.name] = item.value;
		});

		this.element.innerHTML = svgHTMLPure;
		window.document.body.appendChild(this.element);

		this.element.addEventListener('mouseenter', ({ target }) => {
			target.style.opacity = 1;
			target.style.transform = "scale(1.2)";
		}, false);

		this.element.addEventListener('mouseleave', ({ target }) => {
			target.style.opacity = this.opacity;
			target.style.transform = "scale(1)";
		}, false);
	}

	click(event) {
		this.element.addEventListener('click', objectEvent => {
			this.element.style.transform = "scale(1)";

			let timer;
			clearTimeout(timer);
			timer = setTimeout(() => {
				this.element.style.transform = "scale(1.2)";
			}, 200);

			event(objectEvent);
		}, false);
	}

	getElements() {
		return [
			this.svgHTML,
			this.element
		]
	}
}