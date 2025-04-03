let whitemode = localStorage.getItem("whitemode");
const themeSwitch = document.getElementById("theme-switch");

const enableWhitemode = () => {
    document.body.classList.add("whitemode");
    localStorage.setItem("whitemode", "active");
};

const disableWhitemode = () => {
    document.body.classList.remove("whitemode");
    localStorage.setItem("whitemode", null);
};

if (whitemode === "active") enableWhitemode();

themeSwitch.addEventListener("click", () => {
    whitemode = localStorage.getItem("whitemode");
    whitemode !== "active" ? enableWhitemode() : disableWhitemode();
});
