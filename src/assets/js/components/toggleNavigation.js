const navIcon = document.getElementById("js-navIcon");
const nav = document.getElementById("js-nav");
const navLinks = document.querySelectorAll(".js-navLink");

const toggleNavigation = () => {
    navIcon.addEventListener("click", () => {
        navIcon.classList.toggle("is-opened");
        nav.classList.toggle("is-opened");
        document.body.classList.toggle("ov-hidden");
    });

    navLinks.forEach((navLink) => {
        navLink.addEventListener("click", () => {
            navIcon.classList.remove("is-opened");
            nav.classList.remove("is-opened");
            document.body.classList.toggle("ov-hidden");
        });
    });
};

export { toggleNavigation };
