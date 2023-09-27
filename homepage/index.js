var loader=document.getElementById("preloader");
window.addEventListener("load",function(){
    loader.style.display="none";
})



const swiper = new Swiper('.js-testimonials-slider', {
    grabCursor: true,
    spaceBetween:30,
    pagination:{
     el: '.js-testimonials-pagination',
     clickable: true,
    },
    breakpoints:{
     767:{
         slidesPerView: 2
     }
    } 
 });