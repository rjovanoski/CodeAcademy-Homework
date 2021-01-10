require('./bootstrap');


let button = document.querySelector(".menu");
let navList = document.querySelector(".nav-list");
let dropdownRecipes = document.querySelector(".dropdown-recipes");
let dropdownContent = document.querySelector(".dropdown-content");
let dropdownUser = document.querySelector(".dropdown-user");
let userLinks = document.querySelector(".user-links");

button.addEventListener("click", () =>{
navList.classList.toggle("open");

});

dropdownRecipes.addEventListener("click", () => {
    dropdownContent.classList.toggle("show");

})

dropdownUser.addEventListener("click", () => {
    userLinks.classList.toggle("show");

})