var splide = new Splide( '.splide' );
splide.mount();


ScrollReveal().reveal('.card', {delay: 600,distance: '100px'});




var swiper = new Swiper(".mySwiper", {
spaceBetween: 30,
centeredSlides: true,
autoplay: {
    delay: 15000,
    disableOnInteraction: false,
},
pagination: {
    el: ".swiper-pagination",
    clickable: true,
},

});

$( function() {
    $( "#datepicker" ).datepicker();
} );

$( function() {
    $( "#datepicker2" ).datepicker();
} );

