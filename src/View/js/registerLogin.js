// Register
const inputUsernameRegister = window.document.querySelector("#input-username-register");
const inputEmailRegister = window.document.querySelector("#input-email-register");
const messageCapslockRegister = window.document.querySelector("#message-capslock-warning");
const sectionRegister = window.document.querySelector("#register-account");
const inputPasswordRegister = window.document.querySelector("#input-password-register");
const inputConfirmPasswordRegister = window.document.querySelector("#input-confirm-password-register");

// Login
const messageCapslockLogin = window.document.querySelector("#message-capslock-danger");
const sectionLogin = window.document.querySelector("#login-account");
const inputEmailLogin = window.document.querySelector("#input-email-login");
const inputPasswordLogin = window.document.querySelector("#input-password-login");

// Others
let isCapslockActive = false;
let quantityPressCapslock = 0;

// Arrays
const inputsRegister = [
    inputUsernameRegister,
    inputEmailRegister,
    inputPasswordRegister,
    inputConfirmPasswordRegister
];

const inputsLogin = [
    inputEmailLogin,
    inputPasswordLogin
];

// Functions

function captureKeyCapslockLogin({ key }) {
    if(key === "CapsLock") {
        messageCapslockLogin.style.display = "block"

        isCapslockActive = true;
        quantityPressCapslock += 1;
    }

    if(quantityPressCapslock === 2) {
        messageCapslockLogin.style.display = "none";

        isCapslockActive = false;
        quantityPressCapslock = 0;
    }
}


function captureKeyCapslockRegister({ key }) {
    if(key === "CapsLock") {
        messageCapslockRegister.style.display = "block"

        isCapslockActive = true;
        quantityPressCapslock += 1;
    }

    if(quantityPressCapslock === 2) {
        messageCapslockRegister.style.display = "none";

        isCapslockActive = false;
        quantityPressCapslock = 0;
    }
}

function activeEventsSectionRegister() {
    sectionRegister.addEventListener("mousemove", () => {
        window.document.addEventListener("keyup", captureKeyCapslockRegister);

        messageCapslockLogin.style.display = "none";

        if(isCapslockActive) {
            messageCapslockRegister.style.display = "block";
        } else {
            messageCapslockRegister.style.display = "none";
        }
    })

    sectionRegister.addEventListener("mouseout", () => {
        window.document.removeEventListener("keyup", captureKeyCapslockRegister);

        messageCapslockRegister.style.display = "none";
    });
}

function activeEventsSectionLogin() {
    sectionLogin.addEventListener("mousemove", () => {
        window.document.addEventListener("keyup", captureKeyCapslockLogin);

        messageCapslockRegister.style.display = "none";

        if(isCapslockActive) {
            messageCapslockLogin.style.display = "block";
        } else {
            messageCapslockLogin.style.display = "none";
        }
    });

    sectionLogin.addEventListener("mouseout", () => {
        window.document.removeEventListener("keyup", captureKeyCapslockLogin);

        messageCapslockLogin.style.display = "none";
    });
}

function addCaptureCapslockOfRegister() {
    window.document.addEventListener("keyup", captureKeyCapslockRegister);
}

function addCaptureCapslockOfLogin() {
    window.document.addEventListener("keyup", captureKeyCapslockLogin);
}

// Execute Functions

activeEventsSectionRegister();
activeEventsSectionLogin();

for(let input of inputsRegister) {
    input.addEventListener("focus", () => {
        addCaptureCapslockOfRegister();
    })
}

for(let input of inputsLogin) {
    input.addEventListener("focus", () => {
        addCaptureCapslockOfLogin();
    })
}

/**
 * Algoritmo que quando o usuário clicar em 
 * qualquer parte do input, a janela focar no 
 * input
 */

(() => {
    const areaInputs = window.document.querySelectorAll(".area-input");

    for(let areaInput of areaInputs) {
        areaInput.addEventListener("click", () => {
            const input = areaInput.children[1];

            input.focus();
        });
    }
})()

function setScrollSections(height) {
    if(height <= 530) {
        sectionRegister.style.overflowY = "scroll";
        sectionRegister.style.paddingTop = "100px"
        sectionRegister.style.paddingBottom = "100px"
        sectionLogin.style.overflowY = "scroll";
        sectionLogin.style.paddingTop = "100px"
        sectionLogin.style.paddingBottom = "100px"
    } else {
        sectionRegister.style.overflowY = "";
        sectionRegister.style.paddingTop = ""
        sectionRegister.style.paddingBottom = ""
        sectionLogin.style.overflowY = "";
        sectionLogin.style.paddingTop = ""
        sectionLogin.style.paddingBottom = ""
    }
}

window.addEventListener("resize", () => {
    setScrollSections(window.innerHeight);
});

window.addEventListener("load", () => {
    setScrollSections(window.innerHeight);
});

(() => {
    let mailResponse = document.querySelector("#mail-response");
    let buttonOkeyModal = document.querySelector(".modal-register-login-button");

    if(mailResponse.value === "duplicated_email") {
        createModal("#background-black-modal", "show");

        buttonOkeyModal.onclick = () => {
            createModal("#background-black-modal", "hidden");
        }
    }

})()

