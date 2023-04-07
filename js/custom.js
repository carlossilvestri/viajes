const changeColorLetterToBlack = () => {
    const blackLetters = document.querySelectorAll('.black-letters');
    blackLetters.forEach((blackLetter) => {
        blackLetter.style.color = "#000";
    })
}
// Get query parameters
let params = new Proxy(new URLSearchParams(window.location.search), {
    get: (searchParams, prop) => searchParams.get(prop),
});
let {
    company
} = params;
if (company) {
    company = company.toLowerCase();
    switch (company) {
        case "red":
            useRed();
            break;
        case "blue":
            useBlue();
            break;
        case "orange":
            useOrange();
            break;
        case "yellow":
            useYellow();
            break;
        case "purple":
            usePurple();
            break;
        case "gray":
            useGray();
            break;
        case "green":
            useGreen();
            break;
        default:
            break;
    }
}

function useBlue() {
    $("body").get(0).style.setProperty("--primary-color", "#3c61ff");
}

function useRed() {
    $("body").get(0).style.setProperty("--primary-color", "#ff3c3c");
}

function useGreen() {
    $("body").get(0).style.setProperty("--primary-color", "#008000");
}

function usePurple() {
    $("body").get(0).style.setProperty("--primary-color", "#800080");
}
function useYellow() {
    $("body").get(0).style.setProperty("--primary-color", "#fad201");

}
function useOrange() {
    $("body").get(0).style.setProperty("--primary-color", "#ff8000");
}
function usePurple() {
    $("body").get(0).style.setProperty("--primary-color", "#800080");
}

function useGray() {
    $("body").get(0).style.setProperty("--primary-color", "#808080");
}
function useYellow() {
    $("body").get(0).style.setProperty("--primary-color", "#FFFF00");
    changeColorLetterToBlack();
}
function useGreen() {
    $("body").get(0).style.setProperty("--primary-color", "#008000");
}
const actualDomain = window.location.hostname;
const hostname = window.location.hostname.split(".")[0];
console.log("hostname ", hostname);

const domains = document.querySelectorAll('.domain');
domains.forEach((domain) => {
    domain.textContent = `${hostname}`;
})
const actualLinks = document.querySelectorAll('.actual-link');
actualLinks.forEach((actualLink) => {
    actualLink.textContent = `https://${actualDomain} `;
})

const actualYears = document.querySelectorAll('.actual-year');
actualYears.forEach((actualYear) => {
    actualYear.textContent = new Date().getFullYear();
})