// Register
const messageCapslockRegister = window.document.querySelector("#message-capslock-warning");
const sectionRegister = window.document.querySelector("#register-account");
const inputUsernameRegister = window.document.querySelector("#input-username-register");
const inputEmailRegister = window.document.querySelector("#input-email-register");
const inputPasswordRegister = window.document.querySelector("#input-password-register");
const inputConfirmPasswordRegister = window.document.querySelector("#input-confirm-password-register");

// Login
const messageCapslockLogin = window.document.querySelector("#message-capslock-danger");
const sectionLogin = window.document.querySelector("#login-account");
const inputEmailLogin = window.document.querySelector("#input-email-login");
const inputPasswordLogin = window.document.querySelector("#input-password-login");

// LocalStorage

// Others
// let isCapslockActive = getIsCapslock();
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
  inputPasswordLogin,
  inputPasswordRegister
];

// Classes
class SectionPanel {
  constructor(sectionData) {
    this._sectionData = sectionData;
  }

  get sectionData() {
    return this._sectionData;
  }

  addSectionHoverListener({
    mouseenter,
    mouseleave
  }) {
    if (mouseenter) {
      this.sectionData.sectionElement.addEventListener("mouseenter", () => {
        mouseenter(this.sectionData);
      });
    }

    if (mouseleave) {
      this.sectionData.sectionElement.addEventListener("mouseleave", () => {
        mouseleave(this.sectionData);
      });
    }
  }
}

class Capslock {
  constructor(...sectionsPanel) {
    this._sectionsPanel = sectionsPanel;
  };

  get sectionsPanel() {
    return this._sectionsPanel;
  };

  create() {
    for (let item of this.sectionsPanel) {

      /**
       * I select two elements of the class that stores
       * the page section data
       * 
       * @constant {Element} messageElement
       * @constant {Element} sectionElement
       */
      const { 
        messageElement,
        sectionElement
      } = item.sectionData;
      
      /**
       * Function that will be captured by press event
       * responsible for capturing capslock of the page
       * and showing the message in the interface
       * 
       * @param {KeyboardEvent} event
       * Api: https://developer.mozilla.org/en-US/docs/web/api/keyboardevent
       * Event KeyUp: https://developer.mozilla.org/pt-BR/docs/Web/API/Document/keyup_event
       */
      const eventKeyUp = event => {
        let isCapslock = event.getModifierState && event.getModifierState("CapsLock");

        if(isCapslock) {
          messageElement.style.display = "block";

        } else {
          messageElement.style.display = "none";
          
        }
      }

      /**
       * Add hover functionality to section
       * 
       * @method  
       * @param {object} - Event Configuration
       *  @property {mouseenter} - Event fired when mouse enters section
       *  @property {mouseleave} - Event fired when mouse leaves section
       */

      item.addSectionHoverListener({
        mouseenter: () => {
          window.addEventListener("keyup", eventKeyUp);
        },
        mouseleave: () => {
          window.removeEventListener("keyup", eventKeyUp);

          messageElement.style.display = "none";
        }
      });
    }
  }
}

// Implementation execute
const sectionPanelRegister = new SectionPanel({
  name: "register",
  sectionElement: sectionRegister,
  messageElement: messageCapslockRegister,
  inputs: inputsRegister
});

const sectionPanelLogin = new SectionPanel({
  name: "login",
  sectionElement: sectionLogin,
  messageElement: messageCapslockLogin,
  inputs: inputsLogin
});

const capslock = new Capslock(sectionPanelRegister, sectionPanelLogin);

capslock.create();

/**
 * Algoritmo que quando o usuário clicar em
 * qualquer parte do input, a janela focar no
 * input
 */

(() => {
  const areaInputs = window.document.querySelectorAll(".area-input");

  for (let areaInput of areaInputs) {
    areaInput.addEventListener("click", () => {
      const input = areaInput.children[1];

      input.focus();
    });
  }
})()

function setScrollSections(height) {
  if (height <= 530) {
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

  if (mailResponse.value === "duplicated_email") {
    createModal("#background-black-modal", "show");

    buttonOkeyModal.onclick = () => {
      createModal("#background-black-modal", "hidden");
    }
  }

})()