//menu
const menu = document.querySelector('#menu');
const navbarmenu = document.querySelector('#navbarmenu');

menu.addEventListener('click', function(){
    menu.classList.toggle('menu-active');
    navbarmenu.classList.toggle('hidden');
}); 
