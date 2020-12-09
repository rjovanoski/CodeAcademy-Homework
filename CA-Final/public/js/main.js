let header = document.querySelector('.header');
let menu = document.querySelector('.menu');

window.addEventListener('scroll', function () {
    let position = window.scrollY > 900;

    header.classList.toggle('active', position)

})

menu.addEventListener('click', function (){
    header.classList.toggle('open');
})