const btn = document.querySelector(".title-name");
btn.addEventListener("click", function () {
	window.location.href = "index.php";
});

const logout = document.querySelector(".logout");
logout.addEventListener('click',function(){
	window.location.href = "../../logout.php";
})

const descriptionCardNotice = window.document.querySelectorAll(".text-card-noticias > span");
console.log(descriptionCardNotice);

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