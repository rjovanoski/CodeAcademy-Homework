function userFunction(x) {
    x.classList.toggle("change");
}
const toggleUser = document.querySelector(".toggle-user");
const navItemsUser = document.querySelector(".nav-items-user");

toggleUser.addEventListener("click", () =>{
navItemsUser.classList.toggle("active");
});