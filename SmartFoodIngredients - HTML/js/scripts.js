function myFunction(x) {
    x.classList.toggle("change");
}

const toggle = document.querySelector(".toggle");
const navItems = document.querySelector(".nav-items");

toggle.addEventListener("click", () =>{
navItems.classList.toggle("open");
          
});
