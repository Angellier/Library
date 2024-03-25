let burger = document.querySelector('.burger');
let menu = document.querySelector('.menu');
let login = document.querySelector('.login');
let logout = document.querySelector('.logout');
let logo = document.querySelector('.div-logo');

burger.addEventListener('click', function() {
    if (burger.classList.contains("menu-opened")) {
        burger.style.transform = 'rotate(0deg)';
        menu.style.display = 'none';
        burger.classList.remove('menu-opened');
    }
    else {
        burger.style.transform = 'rotate(90deg)';
        menu.style.display = 'grid';
        burger.classList.add('menu-opened');
    }
})

logo.addEventListener('click', function() {
    document.location = '../src/index.php';
})







