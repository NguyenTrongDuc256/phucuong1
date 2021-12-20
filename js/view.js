var swiper = new Swiper(".Swiper-news", {
    slidesPerView: 3,
    grid: {
      rows: 2,
    },
    spaceBetween: 30,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
});
$(document).ready(function(){
    $('#slide-home').owlCarousel({
        loop:true,
        margin:0,
        nav:true,
        navText: ["<img src='img/prev.png'>","<img src='img/next.png'>"],
        items: 1,
        dots:true,
    });
   
})
