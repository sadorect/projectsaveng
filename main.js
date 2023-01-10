const hamburger = document.querySelector(".hamburger");
hamburger.onclick = function() {
    const menu = document.querySelector(".menu");
    menu.classList.toggle("is-active");
}