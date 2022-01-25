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