const main = window.document.querySelector("main#main");

const dataDevs = [
    {
        id: "dev1",
        backgroundColor: "#000000",
        directionAOSCard: "fade-right",
        sourceImage: "../../img/exampleDev.png",
        name: "Josefino Pimposo",
        description: "lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum",
        mediaSocials: [
            {
                name: "facebook",
                source: "../../img/icon-facebook-info.svg",
                alt: "icon facebook icon"
            },
            {
                name: "github",
                source: "../../img/icon-github-info.svg",
                alt: "icon github icon"
            },
            {
                name: "instagram",
                source: "../../img/icon-instagram-info.svg",
                alt: "icon instagram icon"
            },
            {
                name: "twitter",
                source: "../../img/icon-twitter-info.svg",
                alt: "icon twitter icon"
            },
        ]
    },
    {
        id: "dev2",
        backgroundColor: "#000000",
        directionAOSCard: "fade-left",
        sourceImage: "../../img/exampleDev.png",
        name: "Alexandre",
        description: "Desenvolvedor Web focado na área de backend em PHP... E praticamente ou estou programando ou jogando alguma coisa ae... E tamo junto :)",
        mediaSocials: [
            {
                name: "github",
                source: "../../img/icon-github-info.svg",
                alt: "icon github icon"
            }
        ]
    },
    {
        id: "dev3",
        backgroundColor: "#000000",
        directionAOSCard: "fade-right",
        sourceImage: "../../img/exampleDev.png",
        name: "Josefino Pimposo",
        description: "lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum",
        mediaSocials: [
            {
                name: "facebook",
                source: "../../img/icon-facebook-info.svg",
                alt: "icon facebook icon"
            },
            {
                name: "github",
                source: "../../img/icon-github-info.svg",
                alt: "icon github icon"
            },
            {
                name: "instagram",
                source: "../../img/icon-instagram-info.svg",
                alt: "icon instagram icon"
            },
            {
                name: "twitter",
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
        mediaSocials: [
            {
                name: "facebook",
                source: "../../img/icon-facebook-info.svg",
                alt: "icon facebook icon"
            },
            {
                name: "github",
                source: "../../img/icon-github-info.svg",
                alt: "icon github icon"
            },
            {
                name: "instagram",
                source: "../../img/icon-instagram-info.svg",
                alt: "icon instagram icon"
            },
            {
                name: "twitter",
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
                <img
                    class="icon-social-media-info"
                    src="${social.source}"
                    alt="${social.alt}"
                />
            `
        }
    )

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
