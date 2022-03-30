const main = window.document.querySelector("main#main");

const dataDevs = [{
    id: "dev1",
    backgroundColor: "#7A54E5",
    directionAOSCard: "fade-right",
    sourceImage: "../../img/exampleDev.png",
    name: "Pedro Paulo",
    description: "Um desenvolvedor Web e Mobile apaixonado pelo o que faz e em estado de evolução constante, enquanto minha sede de conhecimento existir irei decolar para além das minha barreiras que me impedem de voar, <span style='color: #7A54E5;'>Hora de decolar!!!</span>",
    mediaSocials: [{
        name: "facebook",
        href: "https://www.facebook.com/Pyedrown/",
        source: "../../img/icon-facebook-info.svg",
        alt: "icon facebook icon"
      },
      {
        name: "github",
        href: "https://github.com/AstronautoLunar.png",
        source: "../../img/icon-github-info.svg",
        alt: "icon github icon"
      },
      {
        name: "instagram",
        href: "https://www.instagram.com/astronautolunar/",
        source: "../../img/icon-instagram-info.svg",
        alt: "icon instagram icon"
      }
    ]
  },
  {
    id: "dev2",
    backgroundColor: "#000000",
    directionAOSCard: "fade-left",
    sourceImage: "../../img/exampleDev.png",
    name: "Alexandre",
    description: "Desenvolvedor Web focado na área de backend em PHP... E praticamente ou estou programando ou jogando alguma coisa ae... E tamo junto :)",
    mediaSocials: [{
      name: "github",
      source: "../../img/icon-github-info.svg",
      alt: "icon github icon"
    }]
  },
  {
    id: "dev3",
    backgroundColor: "#000000",
    directionAOSCard: "fade-right",
    sourceImage: "../../img/exampleDev.png",
    name: "Josefino Pimposo",
    description: "lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum",
    mediaSocials: [{
        name: "facebook",
        href: "",
        source: "../../img/icon-facebook-info.svg",
        alt: "icon facebook icon"
      },
      {
        name: "github",
        href: "",
        source: "../../img/icon-github-info.svg",
        alt: "icon github icon"
      },
      {
        name: "instagram",
        href: "",
        source: "../../img/icon-instagram-info.svg",
        alt: "icon instagram icon"
      },
      {
        name: "twitter",
        href: "",
        source: "../../img/icon-twitter-info.svg",
        alt: "icon twitter icon"
      },
    ]
  },
  {
    id: "dev4",
    backgroundColor: "#000000",
    directionAOSCard: "fade-left",
    sourceImage: "../../img/exampleDev.png",
    name: "Josefino Pimposo",
    description: "lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum",
    mediaSocials: [{
        name: "facebook",
        href: "",
        source: "../../img/icon-facebook-info.svg",
        alt: "icon facebook icon"
      },
      {
        name: "github",
        href: "",
        source: "../../img/icon-github-info.svg",
        alt: "icon github icon"
      },
      {
        name: "instagram",
        href: "",
        source: "../../img/icon-instagram-info.svg",
        alt: "icon instagram icon"
      },
      {
        name: "twitter",
        href: "",
        source: "../../img/icon-twitter-info.svg",
        alt: "icon twitter icon"
      },
    ]
  }
]

dataDevs.forEach(item => {
  let mediaSocialsRender = "";

  item.mediaSocials.forEach(social => {
    mediaSocialsRender += `
                <a href="${social.href}" target="__blank">
                  <img
                      class="icon-social-media-info"
                      src="${social.source}"
                      alt="${social.alt}"
                  />
                </a>
            `
  })

  main.innerHTML += `

        <div id="${item.id}" class="area-cards">
            <div class="card" data-aos="${item.directionAOSCard}">
                <div
                    class="backgroundColor"
                    style="background-color: ${item.backgroundColor}"
                ></div>
                <div class="dev-details">
                    <img
                        class="image-user"
                        src="${item.sourceImage}"
                        alt="Web Developer Image"
                    />
                    <div class="social-media">
                        ${mediaSocialsRender}
                    </div>
                    <strong class="title-dev">${item.name}</strong>
                    <span class="description-dev">${item.description}</span>
                </div>
            </div>
        </div>
    `
})
