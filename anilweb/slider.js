const text = document.querySelector(".sec-text");

const textLoad = () => {
    setTimeout(() => {
        text.textContent = "freelancer";
    }, 0);
    setTimeout(() => {
        text.textContent = "Desginer";
    }, 4000);
    setTimeout(() => {
        text.textContent = " Developer";
    }, 8000);
}

textLoad();
setInterval(textLoad, 12000);