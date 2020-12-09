let header = document.querySelector('.header');
let menu = document.querySelector('.menu');

menu.addEventListener('click', function (){
    header.classList.toggle('open');
})

window.addEventListener('scroll', function () {
    let position = window.scrollY > 0;

    header.classList.toggle('active', position)

})
