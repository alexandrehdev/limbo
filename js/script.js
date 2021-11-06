// const btn = document.querySelector(".title-name");
// btn.addEventListener("click", function () {
// 	window.location.href = "index.php";
// });

// document.querySelector('.btn-account').addEventListener('click',function(){
// 	window.location.href = "../pages/registerLogin/index.php";
// });

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
