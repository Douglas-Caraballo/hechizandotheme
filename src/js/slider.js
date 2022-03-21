const slider = document.querySelector('#slider');
let sliderSection = document.querySelectorAll('.featured-item');
let sliderSectionLast = sliderSection[sliderSection.length-1];
const btnLeft = document.querySelector('#button-left');
const btnRight = document.querySelector('#button-right');

slider.insertAdjacentElement("afterbegin", sliderSectionLast);

function next(){
    let sliderSectionFirst = document.querySelectorAll('.featured-item')[0];
    slider.classList.add('move-right');
    setTimeout(function(){
        slider.classList.remove('move-right');
        slider.insertAdjacentElement("beforeend",sliderSectionFirst);
    },700);
}

function prev(){
    let sliderSection = document.querySelectorAll('.featured-item');
    let sliderSectionLast = sliderSection[sliderSection.length-1];
    slider.classList.add('move-left');
    setTimeout(function(){
        slider.classList.remove('move-left');
        slider.insertAdjacentElement("afterbegin", sliderSectionLast);
    },700);
}

btnRight.addEventListener('click',(e)=>{
    next();
});
btnLeft.addEventListener('click',(e)=>{
    prev();
});

setInterval((e)=>{
    next();
},4000);