
// Mudança de imagem de perfil
const profileImage = window.document.querySelector(".profile-image");
const buttonChangeImage = window.document.querySelector("#button-change-image");

profileImage.addEventListener("mousemove", ({ target }) => {
    const [ image ] = profileImage.children;

    image.style.filter = "blur(3px)";
    buttonChangeImage.style.display = "block";
}, true);

profileImage.addEventListener("mouseout", () => {
    const [ image ] = profileImage.children;
    
    image.style.filter = "blur(0px)";
    buttonChangeImage.style.display = "none";
}, true);

// Accordion

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

    contentInfoAccount.style.transition = "none";
    
    setTimeout(() => {
        contentInfoAccount.style.transition = "";
    }, 200);

    let isActiveAccordion = false;

    buttonInfoAccount.addEventListener("click", () => {
        console.log(isActiveAccordion);

        if(isActiveAccordion) {
            contentInfoAccount.style.height = `${contentHeight}px`;
            
            isActiveAccordion = false;
        } else {
            contentInfoAccount.style.height = "0";
            
            isActiveAccordion = true;
        }
    });
}

// Seleciona cada elemento de accordion da interface
const informacaoContaAccordion = accordions[0];

setAccordion({
    element: informacaoContaAccordion.children,
    contentHeight: 100
});