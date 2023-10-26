document.getElementById("about-us-button").addEventListener("click", function () {
    changeContent('about-us');
    updateButtonState("about-us-button");
});

document.getElementById("contact-button").addEventListener("click", function () {
    changeContent('contact');
    updateButtonState("contact-button");
});

document.getElementById("useful-materials-button").addEventListener("click", function () {
    changeContent('useful-materials');
    updateButtonState("useful-materials-button");
});

document.getElementById("history-button").addEventListener("click", function () {
    changeContent('history');
    updateButtonState("history-button");
});

document.getElementById("tools-list-button").addEventListener("click", function () {
    changeContent('tools-list');
    updateButtonState("tools-list-button");
});
document.getElementById("main-page-button").addEventListener("click", function () {
    changeContent('main-page');
    updateButtonState("main-page-button");
});

function updateButtonState(selectedButtonId) {
    const buttons = ["about-us-button", "contact-button", "useful-materials-button", "history-button", "tools-list-button"];
    buttons.forEach(function (buttonId) {
        const button = document.getElementById(buttonId);
        if (buttonId === selectedButtonId) {
            button.classList.add("selected");
        } else {
            button.classList.remove("selected");
        }
    });
}