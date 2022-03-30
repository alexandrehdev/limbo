// Tools

function getFullMergeSrcImage({
    image,
    directoryName
}) {
    const directoryString = `${directoryName}/`;
    const indexOfDirectoryInSrcImage = image.src.indexOf(directoryString);

    const directorySrc = image.src.substring(0, indexOfDirectoryInSrcImage + directoryString.length);

    return directorySrc;
}

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
        });
    }

    // Image Default Profile

    const profileHeader = window.document.querySelector(".small-profile");

    if(profileHeader) {
        const [ image ] = profileHeader.children;
        
        const directorySrc = getFullMergeSrcImage({
            image,
            directoryName: "selectedImages"
        });
        
        if(directorySrc === image.src) {
            image.src = "../../img/userprofile/systemProfileImageDefault/no-image-profile.png";
        }
    }
})()