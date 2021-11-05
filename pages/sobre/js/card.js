const main = window.document.querySelector("main#main");

const dataDevs = [
    {
        backgroundColor: "#000000",
        sourceImage: "./img/exampleDev.png",
        name: "Josefino Pimposo",
        description: "lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum",
        mediaSocials: [
            {
                name: "facebook",
                source: "./img/icon-facebook-info.svg",
                alt: "icon facebook icon"
            },
            {
                name: "github",
                source: "./img/icon-github-info.svg",
                alt: "icon github icon"
            },
            {
                name: "instagram",
                source: "./img/icon-instagram-info.svg",
                alt: "icon instagram icon"
            },
            {
                name: "twitter",
                source: "./img/icon-twitter-info.svg",
                alt: "icon twitter icon"
            },
        ]
    },
    {
        backgroundColor: "#000000",
        sourceImage: "./img/exampleDev.png",
        name: "Josefino Pimposo",
        description: "lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum",
        mediaSocials: [
            {
                name: "facebook",
                source: "./img/icon-facebook-info.svg",
                alt: "icon facebook icon"
            },
            {
                name: "github",
                source: "./img/icon-github-info.svg",
                alt: "icon github icon"
            },
            {
                name: "instagram",
                source: "./img/icon-instagram-info.svg",
                alt: "icon instagram icon"
            },
            {
                name: "twitter",
                source: "./img/icon-twitter-info.svg",
                alt: "icon twitter icon"
            },
        ]
    },
    {
        backgroundColor: "#000000",
        sourceImage: "./img/exampleDev.png",
        name: "Josefino Pimposo",
        description: "lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum",
        mediaSocials: [
            {
                name: "facebook",
                source: "./img/icon-facebook-info.svg",
                alt: "icon facebook icon"
            },
            {
                name: "github",
                source: "./img/icon-github-info.svg",
                alt: "icon github icon"
            },
            {
                name: "instagram",
                source: "./img/icon-instagram-info.svg",
                alt: "icon instagram icon"
            },
            {
                name: "twitter",
                source: "./img/icon-twitter-info.svg",
                alt: "icon twitter icon"
            },
        ]
    },
    {
        backgroundColor: "#000000",
        sourceImage: "./img/exampleDev.png",
        name: "Josefino Pimposo",
        description: "lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum",
        mediaSocials: [
            {
                name: "facebook",
                source: "./img/icon-facebook-info.svg",
                alt: "icon facebook icon"
            },
            {
                name: "github",
                source: "./img/icon-github-info.svg",
                alt: "icon github icon"
            },
            {
                name: "instagram",
                source: "./img/icon-instagram-info.svg",
                alt: "icon instagram icon"
            },
            {
                name: "twitter",
                source: "./img/icon-twitter-info.svg",
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
        <div class="card">
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
                <strong class="title-dev">${item.name}</strong>
                <span class="description-dev">${item.description}</span>
                <div class="social-media">
                    ${mediaSocialsRender}
                </div>
            </div>
        </div>
    `
})