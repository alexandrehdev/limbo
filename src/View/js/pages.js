// redirect para área de perfil
const btnPerfil = document.querySelector('.headProfile');

function addLinkPerfil(){
    // const baseURL = window.location.origin;
    window.location.href = `../profile/index.php`
}

btnPerfil.addEventListener('click', addLinkPerfil);