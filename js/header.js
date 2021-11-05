const itemsAllHeader = window.document.querySelectorAll("li.item-nav");

itemsAllHeader.forEach(item => {
    const line = item.children[1];

    function elementChildrenApply({ 
        element, 
        // styleDisplay,
        styleOpacity
    }) {
        const arrayElements = [ ...element.children ];
        arrayElements.forEach(item => {
            // item.style.display = styleDisplay;
            item.style.opacity = styleOpacity;
        })
    }

    item.addEventListener('mouseenter', () => {
        line.style.width = "100%";

        setTimeout(() => {
            if(line.classList.contains("dropdown")) {
                line.style.height = "200px";
                line.style.bottom = "-200px";
                line.style.padding = "20px";

                elementChildrenApply({
                    element: line,
                    // styleDisplay: "block",
                    styleOpacity: "1"
                });
            }
        }
        , 500)
    }, false);

    item.addEventListener('mouseleave', () => {
        line.style.width = "0%";
        line.style.height = "5px";
        line.style.bottom = "0";
        line.style.padding = "0"

        elementChildrenApply({
            element: line,
            // styleDisplay: "none",
            styleOpacity: "0"
        });
    }, false);
})