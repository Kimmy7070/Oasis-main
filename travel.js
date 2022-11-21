let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
};

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    menu.classList.remove('active');
};

var swiper = new Swiper(".home-slider", {
    loop:true,
    navigation:{
        nextE1: ".swiper-button-next",
        prevE1: ".swiper-button-prev",
    },
});

var swiper = new swiper(".reviews-slider", {
    loop:true,
    spaceBetween: 20,
    grabCursor: auto,
    breakpoints:{
        640:{
            slidePerView: 1,
            spaceBetween: 20,
        },
        768:{
            slidePerView: 2,
        },
        1024:{
            slidePerView: 3,
        },
    },
    
});

