// * Mudança de imagem de perfil

// Selecionar os elementos que compõem a área da imagem
const profileImage = window.document.querySelector(".profile-image");
const buttonChangeImage = window.document.querySelector("#button-change-image");
const fileInput = window.document.querySelector("#file");
const buttonSubmitImageUser = window.document.querySelector("#submit-image-user");

function applyFadeElement({
    element,
    type
}) {
    if (!element) {
        throw new Error("Elemento inexistente ou indefinido");
    }

    switch (type) {
        default:
        case "out":
            element.style.display = "block";
            element.style.opacity = 1;

            break;
        case "in":
            element.style.opacity = 0;
            let timer;
            timer = setTimeout(() => {
                element.style.display = "none";
            }, 520);
            clearTimeout(timer);

            break;
    }
}

/**
 * Os dois eventos abaixo fazem o efeito de blur
 * na imagem e também faz com que apareça o 
 * botão de selecionar imagem
 */
profileImage.addEventListener("mousemove", () => {
    /**
     * Extrai o primeiro dado do array de 
     * elementos filhos da área da imagem de 
     * perfil selecionada e armazenada na 
     * variável profileImage
     */
    const [image] = profileImage.children;

    /**
     * Seta filtro de blur de 3px na imagem
     * 
     * Altera o display do botão de alterar 
     * imagem
     */
    image.style.filter = "blur(3px)";


    applyFadeElement({
        element: buttonChangeImage,
        type: "out"
    });
}, true);


/**
 * Faz o mesmo mas inverte o evento e os valores
 * de estilos das variáveis de elementos
 */
profileImage.addEventListener("mouseout", () => {
    const [image] = profileImage.children;

    image.style.filter = "blur(0px)";

    applyFadeElement({
        element: buttonChangeImage,
        type: "in"
    });
}, true);

/**
 * Aqui ele monitora o input que armazena o 
 * arquivo de imagem e se o valor dele for
 * alterado automaticamente ele captura um evento
 * e faz a interação de desativar o botão de
 * botão de enviar a imagem do usuário
 */
fileInput.addEventListener("change", ({
    target
}) => {
    if (target.value) {
        buttonSubmitImageUser.removeAttribute("disabled");
    } else {
        buttonSubmitImageUser.setAttribute("disabled", "");
    }
});

// * Accordion

/**
 * Seleciona todos os elementos que possuam a
 * classe accordion
 */
const accordions = window.document.querySelectorAll(".accordion");

function setAccordion({
    element,
    contentHeight = 100
} = {}) {
    // Pega os elementos filhos de cada accordion
    const [
        buttonInfoAccount,
        contentInfoAccount
    ] = element;

    // Seleciona a seta do botão do accordion
    const [arrowImage] = buttonInfoAccount.children;

    /**
     * As 5 linhas seguintes corrige um problema
     * que quando a página era carregada, pelo
     * fato do conteúdo do accordion ter uma 
     * transição acabava sendo carregada
     * 
     * Então para impedir isso apenas mudei
     * a transição do conteúdo do accordion para
     * none e setei um tempo de 200 milissegundos
     * para a transição voltar novamente
     */
    contentInfoAccount.style.transition = "none";

    setTimeout(() => {
        contentInfoAccount.style.transition = "";
    }, 200);

    /**
     * A explicação para o qual criei essa 
     * variável e essa condição dentro do evento
     * de clique abaixo foi para criar um 
     * alternador, quando o botão do accordion 
     * fosse clicado ele abri-se o conteúdo e 
     * quando fosse clicado novamente
     * automaticamente fosse fechado
     */
    let isActiveAccordion = true;

    buttonInfoAccount.addEventListener("click", () => {

        if (isActiveAccordion) {
            contentInfoAccount.style.height = `${contentHeight}px`;
            arrowImage.style.transform = "rotate(90deg)";

            isActiveAccordion = false;
        } else {
            contentInfoAccount.style.height = "0";
            arrowImage.style.transform = "rotate(0deg)";

            isActiveAccordion = true;
        }
    }, true);

}

// Seleciona cada elemento de accordion da interface
const [
    informacaoContaAccordion,
    configuracaoContaAccordion
] = accordions;

// Aplica lógica do accordion nos elementos selecionados de "accordions"

setAccordion({
    element: informacaoContaAccordion.children,
    contentHeight: 100
});

setAccordion({
    element: configuracaoContaAccordion.children,
    contentHeight: 200
});

// * Modal Change Status

/*
    Selecionado todos o elementos necessários 
    para a interação do modal
*/
const buttonUpdateStatus = window.document.querySelector(".button-update-status");
const modalChangeStatus = window.document.querySelector("#modal-change-status");
const buttonLeaveModal = window.document.querySelector("#icon-leave-modal");
const buttonApplyStatus = window.document.querySelector("#apply-status");
const statusOptions = window.document.querySelectorAll(".status-clickable");
const currentStatus = window.document.querySelector(".status-current");
const statusSaveProfile = window.document.querySelector(".status-save");

const [textStatus] = currentStatus.children;

let showModal = true;

/**
 * Esse é a função responsavel por seta
 * o comportamento de desaparecer e aparecer
 * de qualquer elemento de forma mais lenta
 */
function setElementBehavior({
    mode,
    element,
    displayDefault = "block"
} = {}) {
    let timer;

    switch (mode) {
        default:
        case "show":
            element.style.display = displayDefault;

            clearTimeout(timer);
            timer = setTimeout(() => {
                element.style.opacity = 1;
            }, 200);

            break;
        case "hidden":
            element.style.opacity = 0;

            clearTimeout(timer);
            timer = setTimeout(() => {
                element.style.display = "none";
            }, 200);

            break;
    }
}

/**
 * Esse é a função de alternador do modal,
 * Ao chamar ele, se a variável "showModal" for
 * positiva o modal irá aparecer e 
 * automaticamente a variável irá ficar 
 * negativa, ao contrário, o modal irá 
 * desaparecer e a variável ficará positiva, irá 
 * alternar a cada vez que chama a função
 */

function alternatorModalConditional() {
    if (showModal) {
        setElementBehavior({
            element: modalChangeStatus,
            mode: "show",
            displayDefault: "flex"
        });

        showModal = false;
    } else {
        setElementBehavior({
            element: modalChangeStatus,
            mode: "hidden",
        });

        showModal = true;
    }
}

/**
 * Adiciona uma interação no botão de atualizar o 
 * status que irá abrir o modal, clicar novamente
 * irá fechar o modal
 */
buttonUpdateStatus.addEventListener("click", () => {
    alternatorModalConditional();
});

/**
 * Adiciona uma interação no botão de sair do 
 * modal que como o nome já diz ele irá fechar o 
 * modal
 */
buttonLeaveModal.addEventListener("click", () => {
    showModal = false;
    alternatorModalConditional();
});

/**
 * Esse seleciona o tipo de status e executa uma 
 * ação para os 4 tipos
 * 
 * online: Online
 * absent: Ausente
 * occupied: Ocupado
 * offline: Offline
 */
function addInteractionButtonStatus(type, action) {
    switch (type) {
        case "online":
            return action.online();

        case "absent":
            return action.absent();

        case "occupied":
            return action.occupied();

        case "offline":
            return action.offline();
        default:
    }
}

/**
 * Seta o modo do status atual
 * 
 * Basicamente essa função modifica o 
 * identificador e o texto do elemento
 */
function setModeCurrentStatus({
    mode,
    text
}) {
    currentStatus.setAttribute("id", mode);
    textStatus.innerText = text;
}

/**
 * Seleciona cada botão de status no modal e 
 * adiciona um evento de clique
 * 
 * selecionei o atributo "data-type" de cada um
 * e adicionei a interação a cada botão de 
 * acordo com esse atributo, então se eu clicar
 * no botão de status offline, automaticamente o 
 * status atual muda para status offline
 */
for (let statusOption of statusOptions) {
    statusOption.addEventListener("click", () => {
        const type = statusOption.dataset.type;

        addInteractionButtonStatus(type, {
            online() {
                setModeCurrentStatus({
                    mode: "status-online",
                    text: "Online"
                });
            },
            absent() {
                setModeCurrentStatus({
                    mode: "status-absent",
                    text: "Ausente"
                });
            },
            occupied() {
                setModeCurrentStatus({
                    mode: "status-occupied",
                    text: "Ocupado"
                });
            },
            offline() {
                setModeCurrentStatus({
                    mode: "status-offline",
                    text: "Offline"
                });
            }
        });
    });
}

/**
 * Esse é o código para aplicar o status do 
 * usuário que basicamente ele só faz mudar a
 * cor do plano de fundo e o texto do elemento 
 * de status na tela de perfil do usuário
 */
buttonApplyStatus.addEventListener("click", () => {
    const [textStatusSave] = statusSaveProfile.children;

    const modeStatusCurrent = currentStatus.getAttribute("id");
    const textStatusCurrent = textStatus.innerText;

    statusSaveProfile.setAttribute("id", modeStatusCurrent);

    textStatusSave.innerText = textStatusCurrent;
});

// Imagem de usuário - Adicionar imagem padrão

function getFullDirectorySrcImage({
    image,
    directoryName
}) {
    const directoryString = `${directoryName}/`;
    const indexOfDirectoryInSrcImage = image.src.indexOf(directoryString);

    const directorySrc = image.src.substring(0, indexOfDirectoryInSrcImage + directoryString.length);

    return directorySrc;
}

window.addEventListener("load", () => {
    const [image] = profileImage.children;

    const srcUserProfileEmpty = getFullDirectorySrcImage({
        image,
        directoryName: "selectedImages"
    });

    if (srcUserProfileEmpty === image.src) {
        image.src = "../../img/userprofile/systemProfileImageDefault/no-image-profile.png";
    }
});

// Modal para apagar a conta do usuário

(
    () => {
        const modalDeleteAccount = window.document.querySelector(".modal-delete-account");
        const buttonDeleteAccount = window.document.querySelector(".button-delete-account");
        // const modalButtonDeleteAccount = window.document.querySelector(".modal-button-delete-account");
        const modalButtonCancelDeleteAccount = window.document.querySelector(".modal-button-cancel-delete-account");
        const HALFSECONDSINMILISECONDS = 500 + 20;
        const FIFTYMILISECONDS = 50;

        function timeout(callback, timer) {
            try {
                let timerShow
                clearTimeout(timerShow);
                timerShow = setTimeout(() => {
                    callback();
                }, timer);
            } catch (error) {
                throw new Error(error.message);
            }
        }

        function showModal() {
            modalDeleteAccount.style.display = "block";

            timeout(() => {
                modalDeleteAccount.style.opacity = "1";
                modalDeleteAccount.style.transform = "translate(-50%, -50%)";

            }, FIFTYMILISECONDS);
        }

        function hiddenModal() {
            modalDeleteAccount.style.transform = "";
            modalDeleteAccount.style.opacity = "";
            
            timeout(() => {
                modalDeleteAccount.style.display = "";

            }, HALFSECONDSINMILISECONDS);
        }

        buttonDeleteAccount.addEventListener("click", showModal);

        modalButtonCancelDeleteAccount.addEventListener("click", hiddenModal);
    }
)()