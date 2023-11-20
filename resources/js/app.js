import "./bootstrap";
import "flowbite";

// nav js
const button = document.querySelector("#menu-button");
const menu = document.querySelector("#menu");

button.addEventListener("click", () => {
    menu.classList.toggle("hidden");
});

// dark mode

// Start by getting the current theme value in localStorage
let theme = localStorage.getItem("theme");
console.log(theme);

// Grab the class of the element that you want users to click to toggle dark and light theme/modes
const themeToggle = document.querySelector(".js-theme-toggle");

// Adds ".dark" to the <html> element, and adds "theme: dark" to localStorage
const goDark = function () {
    document.documentElement.classList.add("dark");
    localStorage.setItem("theme", "dark");
};

// Adds ".dark" to the <html> element, and adds "theme: dark" to localStorage
const goLight = function () {
    document.documentElement.classList.remove("dark");
    localStorage.setItem("theme", "light");
};

// Toggling the theme when the element with `.js-theme-toggle` is clicked
themeToggle.addEventListener("click", function () {
    if (
        localStorage.theme === "dark" ||
        (!("theme" in localStorage) &&
            window.matchMedia("(prefers-color-scheme: dark)").matches)
    ) {
        goLight();
    } else {
        goDark();
    }
});
