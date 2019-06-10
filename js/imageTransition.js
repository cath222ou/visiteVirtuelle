
var swiper = new Swiper('.swiper-container', {
    spaceBetween: 100,
    speed: 2000,
    loop: true,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
        // stopOnLastSlide: false,
    },
    effect: 'coverflow',
    coverflowEffect: {
        rotate: 50,
        slideShadows: false,
        stretch: 20,
        modifier: 1,
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
        dynamicBullets: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});

