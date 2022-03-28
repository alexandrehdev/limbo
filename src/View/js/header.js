const itemsAllHeader = window.document.querySelectorAll("li.item-nav");
const itemsAllDropdown = window.document.querySelectorAll("li.item-list-dropdown");
const itemOfDropdown = window.document.querySelector('[data-type-element="dropdown"]');

const HALFSECONDSINMILISECONDS = 500 + 20;

function applyLineAnimation({
    items,
    colorLineGlobals = "#ffffff",
    opacity = true
}) {
    items.forEach(item => {
        const line = item.children[1];
        
        line.style.backgroundColor = colorLineGlobals;
        line.style.transition = "all 500ms";
        line.style.height = "5px";

        if(opacity) {
            line.style.opacity = "0";
        }

        const showLine = () => {
            if (opacity) {
                line.style.opacity = "1";
            }

            line.style.width = "100%";
        }

        const hiddenLine = () => {
            if (opacity) {
                line.style.opacity = "0";
            }

            line.style.width = "0%";
        }

        item.addEventListener('mouseenter', showLine, false);

        item.addEventListener('mouseleave', hiddenLine, false);
    })
}

function createDropdownInElement({ 
    element,
    colorLine = "#ffffff",
    heightDropdown = 200
} = {}) {
    if(element) {
        const line = element.children[1];

        // Aplicar estilos para linha
        line.style.transition = "all 500ms";
        line.style.color = colorLine;
        line.style.position = "absolute";
        line.style.top = "100%";
        line.style.height = "5px";
        line.style.overflow = "hidden";

        // Aplicar estilos no próprio elemento
        element.style.display = "flex";
        element.style.flexDirection = "column";
        element.style.justifyContent = "center";
        element.style.alignItems = "center";
        element.style.position = "relative";

        const showDropdown = () => {
            line.style.width = "100%";

            /*
                Limpar o timer antes dele
                ser acionado para evitar
                bugs ao timeout ser acionado
                várias vezes
            */
            let timer;
            clearTimeout(timer);
            timer = setTimeout(() => {
                line.style.height = `${heightDropdown}px`;
            }, HALFSECONDSINMILISECONDS);
        }

        const hiddenDropdown = () => {
            line.style.width = "0%";
            line.style.height = "5px";
        }

        element.addEventListener("mouseenter", showDropdown, false);

        element.addEventListener("mouseleave", hiddenDropdown, false);

    } else {
        throw new Error("Element de 'createDropdownInElement' é do tipo undefined");
    }
};

applyLineAnimation({
    items: itemsAllHeader
});

createDropdownInElement({
    element: itemOfDropdown
});

applyLineAnimation({
    items: itemsAllDropdown,
    colorLineGlobals: "#000000"
});