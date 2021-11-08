const erro = document.getElementById('msgerro');
const login = document.getElementById('login');

function testeMsgErr(){
	erro.classList.toggle('active');
	$('#msgerro > span').remove();
	$('#msgerro').append(
		'<span>' + 'aoba' + '</span>'
	);
	console.log('adicionando');
}

login.addEventListener('click', testeMsgErr)