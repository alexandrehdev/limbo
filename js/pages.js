// redirect para área de perfil
const btnPerfil = document.querySelector('.headProfile');

function addLinkPerfil(){
    const baseURL = window.location.origin;
    window.location.href = `${baseURL}/pages/profile/index.php`
    console.log('adicionando o link');
}

btnPerfil.addEventListener('click', addLinkPerfil);