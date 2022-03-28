const itemsAllHeader = window.document.querySelectorAll("li.item-nav");
const itemsAllDropdown = window.document.querySelectorAll("li.item-list-dropdown");

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

applyLineAnimation({
    items: itemsAllHeader
});