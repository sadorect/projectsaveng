const hamburger = document.querySelector(".hamburger");
hamburger.onclick = function () {
    const menu = document.querySelector(".menu");
    menu.classList.toggle("is-active");
    hamburger.classList.toggle("is-active");
}




// const hamburger = document.querySelector(".hamburger");
// const menu = document.querySelector(".menu");

// function addMenu (e ){
//     if(e.target.click){
//         menu.classList.toggle('dispNone')
//     }
// }

// hamburger.addEventListener('click', addMenu)
