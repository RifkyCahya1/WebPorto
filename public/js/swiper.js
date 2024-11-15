var thumbnailSlider = new Swiper(".thumbnail-slider", {
    spaceBetween: 10,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesProgress: true,
});

var mainSlider = new Swiper(".main-slider", {
    spaceBetween: 10,
    effect: 'coverflow',
    coverflowEffect: {
        rotate: 30,
        slideShadows: false,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    thumbs: {
        swiper: thumbnailSlider, // Link to thumbnailSlider
    },
});