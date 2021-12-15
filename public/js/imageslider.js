var slides = document.querySelectorAll(' .slide');
var btn = document.querySelectorAll(' .slide_btn');
let currentSlide = 1;

var manualNav = function(manual){
    slides.forEach((slide) =>{
        slide.classList.remove('active');

        btn.forEach((slide_btn) => {
            slide_btn.classList.remove('active');
        });
    });

    slides[manual].classList.add('active');
    btn[manual].classList.add('active');
}

btn.forEach((slide_btn, i) => {
    slide_btn.addEventListener("click", () => {
        manualNav(i);
        currentSlide = i;
    });
});
/*
// JS for Autoplay Image Slide

var repeat = function(activeClass){
    let active = document.getElementsByClassName('active');
    let i = 1;

    var repeater = () => {
        setTimeout(function(){
            [...active].forEach((activeSlide) =>{
                activeSlide.classList.remove('active');
            });

            slides[i].classList.add('active');
            btn[i].classList.add('active');
            i++;

            if(slides.length == 1){
                i=0;
            }
            if(i >= slides.length){
                return;
            }
            repeater();

        }, 5000);
    }
    repeater();
}
repeat();*/
