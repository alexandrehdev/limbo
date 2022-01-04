const itemsAllHeader = window.document.querySelectorAll("li.item-nav");
const itemsAllDropdown = window.document.querySelectorAll("li.item-list-dropdown");

function applyLineAnimation({ 
    itemsAllNav, 
    colorLine = "#ffffff",
    selector = ".item-dropdown",
    haveChildrenElements = true,
    opacity = true
}) {
    itemsAllNav.forEach(item => {
    const line = item.children[1];
    line.style.backgroundColor = colorLine;
    if(opacity) {
        line.style.opacity = "0";
    }

    function elementChildrenApply({ 
        selector, 
        styleOpacity
    }) {
        const allItemsElementChildren = window.document.querySelectorAll(selector)
        allItemsElementChildren.forEach(item => {
            item.style.opacity = styleOpacity;
        })
    }

    item.addEventListener('mouseenter', () => {
        if(opacity) {
            line.style.opacity = "1";
        }

        line.style.width = "100%";

        setTimeout(() => {
            if(line.classList.contains("dropdown")) {
                line.style.height = "200px";
                line.style.bottom = "-200px";
                line.style.padding = "20px";
                line.style.boxShadow = "0px 8px 16px 0px rgba(0,0,0,0.2)"



                if(haveChildrenElements) {
                    elementChildrenApply({
                        selector: selector,
                        styleOpacity: "1"
                    });
                }
            }
        }
        , 500)
    }, false);

    item.addEventListener('mouseleave', () => {
        if(opacity) {
            line.style.opacity = "0";
        }

        line.style.width = "0%";
        line.style.height = "5px";
        line.style.bottom = "0";
        line.style.padding = "0"
        
        if(haveChildrenElements) {
            elementChildrenApply({
                selector: selector,
                styleOpacity: "0"
            });
        }
    }, false);
})
}

applyLineAnimation({
    itemsAllNav: itemsAllHeader
});

applyLineAnimation({
    itemsAllNav: itemsAllDropdown,
    colorLine: "#000000",
    haveChildrenElements: false
})