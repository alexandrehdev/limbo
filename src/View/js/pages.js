(() => {
    // redirect para área de perfil
    const btnPerfil = document.querySelector('.headProfile');

    if (btnPerfil) {
        btnPerfil.addEventListener('click', () => {
            window.location.href = `../profile/index.php`;
        });
    };

    // Logo
    const logo = window.document.getElementsByClassName("title-name")[0];

    if (logo) {
        logo.onclick = () => {
            window.scrollTo(0, 0);
        }
    }

    // Algoritmo para o usuário sair do perfil
    const logout = document.querySelector(".logout");

    if (logout) {
        logout.addEventListener('click', function () {
            window.location.href = "../../../../logout.php";
        })
    }


    // Algoritmo para redirecionamento da tela de registro

    const btnAccount = window.document.querySelector(".btn-account");

    if (btnAccount) {
        btnAccount.addEventListener("click", () => {
            window.location.href = "../registerLogin/index.php"
        });
    }


    // pre-loader

    const backgroundColorPreloader = window.document.querySelector("#background-color-pre-loader");
    const preloaderElement = window.document.querySelector("#pre-loader-element");
    const HALFSECONDSINMILISECONDS = 500 + 20;

    if (preloaderElement) {
        window.addEventListener("load", () => {
            if(backgroundColorPreloader) {
                backgroundColorPreloader.style.filter = "blur(0)";
            }
            preloaderElement.style.opacity = 0;
            
            setTimeout(() => {
                preloaderElement.style.display = "none";

            }, HALFSECONDSINMILISECONDS);

            console.log(preloaderElement);
        });
    }
})()