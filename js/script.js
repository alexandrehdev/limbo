const btn = document.querySelector(".title-name");
btn.addEventListener("click", function () {
	window.location.href = "index.php";
})

document.querySelector(".user-area").addEventListener('click', function(){
	window.location.href = "../pages/registerLogin/index.php";
});