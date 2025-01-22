const hamburger = document.getElementById("hamburger");
const close = document.getElementById("close");
const mobileNav = document.getElementById("mobileNav");

hamburger.addEventListener("click", () => {
    mobileNav.classList.remove("hidden");
    hamburger.classList.add("hidden");
    close.classList.remove("hidden");
});

close.addEventListener("click", () => {
    mobileNav.classList.add("hidden");
    hamburger.classList.remove("hidden");
    close.classList.add("hidden");
});