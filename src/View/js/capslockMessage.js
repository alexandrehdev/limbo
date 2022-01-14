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
const buttonTest = window.document.querySelector("#button-test");

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

inputUsernameRegister.addEventListener("focus", () => {
    window.document.addEventListener("keyup", captureKeyCapslockRegister);
});

inputEmailRegister.addEventListener("focus", () => {
    window.document.addEventListener("keyup", captureKeyCapslockRegister);
});

inputPasswordRegister.addEventListener("focus", () => {
    window.document.addEventListener("keyup", captureKeyCapslockRegister);
});

inputConfirmPasswordRegister.addEventListener("focus", () => {
    window.document.addEventListener("keyup", captureKeyCapslockRegister);
});

inputEmailLogin.addEventListener("focus", () => {
    window.document.addEventListener("keyup", captureKeyCapslockLogin);
});

inputPasswordLogin.addEventListener("focus", () => {
    window.document.addEventListener("keyup", captureKeyCapslockLogin);
});
