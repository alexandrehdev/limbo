
// * Mudança de imagem de perfil

// Selecionar os elementos que compõem a área da imagem
const profileImage = window.document.querySelector(".profile-image");
const buttonChangeImage = window.document.querySelector("#button-change-image");
const fileInput = window.document.querySelector("#file");
const buttonSubmitImageUser = window.document.querySelector("#submit-image-user");

/**
 * Os dois eventos abaixo fazem o efeito de blur
 * na imagem e também faz com que apareça o 
 * botão de selecionar imagem
 */
profileImage.addEventListener("mousemove", ({ target }) => {
    /**
     * Extrai o primeiro dado do array de 
     * elementos filhos da área da imagem de 
     * perfil selecionada e armazenada na 
     * variável profileImage
     */
    const [ image ] = profileImage.children;

    /**
     * Seta filtro de blur de 3px na imagem
     * 
     * Altera o display do botão de alterar 
     * imagem
     */
    image.style.filter = "blur(3px)";
    buttonChangeImage.style.display = "block";
}, true);


/**
 * Faz o mesmo mas inverte o evento e os valores
 * de estilos das variáveis de elementos
 */
profileImage.addEventListener("mouseout", () => {
    const [ image ] = profileImage.children;
    
    image.style.filter = "blur(0px)";
    buttonChangeImage.style.display = "none";
}, true);

/**
 * Aqui ele monitora o input que armazena o 
 * arquivo de imagem e se o valor dele for
 * alterado automaticamente ele captura um evento
 * e faz a interação de desativar o botão de
 * botão de enviar a imagem do usuário
 */
fileInput.addEventListener("change", ({ target }) => {
    if(target.value) {
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
    const [ arrowImage ] = buttonInfoAccount.children;

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

    buttonInfoAccount.addEventListener("click",eventButton => {

        if(isActiveAccordion) {
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
const buttonUpdateStatus = window.document.querySelector(".button-update-status");
const modalChangeStatus = window.document.querySelector("#modal-change-status");
// Code...