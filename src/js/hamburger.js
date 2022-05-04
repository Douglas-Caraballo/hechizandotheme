const hamburger =document.querySelector('#hamburger'),
    menu = document.querySelector('#menu'),
    close = document.querySelector('#close');

if(hamburger){

    hamburger.addEventListener('click', (e)=>{
        menu.classList.toggle('aside-activate');
    });
    close.addEventListener('click', (e)=>{
        menu.classList.toggle('aside-activate');
    });
}