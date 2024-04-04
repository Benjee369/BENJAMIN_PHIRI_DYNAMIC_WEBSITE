document.addEventListener("DOMContentLoaded", () => {
    const burgerMenu = document.querySelector(".burger-menu");
const navLinks = document.querySelector(".nav-buttons");

burgerMenu.addEventListener("click", () => {
    navLinks.classList.toggle("show-links");
});

});