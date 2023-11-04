var openBool;
var showMenu;
var divider = document.getElementById("navDivider");
const xs = window.matchMedia("(max-width:1180px)");

function navControl() {
    const panneau = document.getElementById("panneau");
    const menu = document.getElementById("menu");
    var mesForms = document.getElementById("mesForms");
    var navOpen = document.querySelector(".navOpen");

    if ((panneau.classList.contains("d-block") && menu.classList.contains("d-none")) || openBool == 0) {
        panneau.classList.replace("d-block", "d-none");
        menu.classList.replace("d-none", "d-flex");
        navOpen.classList.add("navOpenNew");
        divider.classList.replace("navOpenDivider","navOpenDividerNew");
        openBool = 1;
        if (xs.matches) {
            mesForms.classList.add("d-none");
        }
    } else {
        panneau.classList.replace("d-none", "d-block");
        menu.classList.replace("d-flex", "d-none");
        navOpen.classList.remove("navOpenNew");
        divider.classList.replace("navOpenDividerNew", "navOpenDivider");
        openBool = 0;
        if (xs.matches) {
            mesForms.classList.remove("d-none");
        }
    }
}

function toggleNav() {
    var navigation = document.getElementById("navigation");
    var overlay = document.getElementById("overlayNav");
    var hamburger = document.querySelector(".menu-btn");
    const menu = document.querySelector(".menu");
    
    if (xs.matches) {
        if (navigation.classList.contains("d-none")) {
            navigation.classList.replace("d-none", "d-flex");
            overlay.classList.replace("d-none", "d-flex");
            divider.classList.add("navOpenDivider");
            hamburger.classList.add("close");
        } else {
            navigation.classList.replace("d-flex", "d-none");
            overlay.classList.replace("d-flex", "d-none");
            divider.classList.remove("navOpenDivider");
            hamburger.classList.remove("close");
            if(openBool == 1) {
                navControl();
            }     
        }    
    }
}