"use strict"

/*--- слайд-шоу ---*/

const slide = Array.from(document.querySelectorAll(".slide"));
const plus = document.querySelector(".next");
const min = document.querySelector(".prev");
let activeSlide = 0;
min.classList.add("none");


function plusSlide() {
    if (activeSlide >= 0) {
    min.classList.remove("none");
    slide[activeSlide].classList.remove("slide__active");
    activeSlide++; 
    slide[activeSlide].classList.add("slide__active");
    } 
    if (activeSlide == 5) {
    plus.classList.add("none");
    } 
}

function minSlide() {
    if(activeSlide <= 5) {
    plus.classList.remove("none");
    slide[activeSlide].classList.remove("slide__active");
    activeSlide--; 
    slide[activeSlide].classList.add("slide__active");
    }
    if (activeSlide == 0) {
    min.classList.add("none");
    }
}

slide[activeSlide].classList.add("slide__active");


/* ---- бургер-меню -----*/
const burgerMenu = document.querySelector(".menu-burger__slide")


function activeBurgerMenu() {

    const burgerMenu = document.querySelector(".menu-burger__slide")
    burgerMenu.classList.toggle('active')
}
