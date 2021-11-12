const btn = document.querySelector(".title-name");
btn.addEventListener("click", function () {
  window.location.href = "index.php";
})

const logout = document.querySelector(".logout").addEventListener('click',function() {
  window.location.href = "../../logout.php"
});