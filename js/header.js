const itemsAllHeader = window.document.querySelectorAll("li.item-nav");

itemsAllHeader.forEach(item => {
    item.addEventListener('mouseenter', () => {
        const line = item.children[1];
        line.style.width = "100%"
    }, false);

    item.addEventListener('mouseleave', () => {
        const line = item.children[1];
        line.style.width = "0%"
    }, false);
})