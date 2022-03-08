function openSearch(){
    document.getElementById("my-search").style.display="block";
    document.body.classList.toggle('scroll-desactivate');
}

function closeSearch(){
    document.getElementById("my-search").style.display="none";
    document.body.classList.toggle('scroll-desactivate');
}

document.querySelector('.open-btn').addEventListener( 'click',()=>{
    openSearch();
});

document.querySelector('.overlay__close-btn').addEventListener('click', ()=>{
    closeSearch();
});
