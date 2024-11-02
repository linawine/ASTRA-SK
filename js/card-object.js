var swiper = new Swiper(".mySwiperGalleryObject", {
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      200: {
        slidesPerView: 1,
    spaceBetween: 20,

      },
      600: {
        slidesPerView: 2,
    spaceBetween: 20,

      },
      720: {
        slidesPerView: 3,
    spaceBetween: 20,
      },
      1000: {
        slidesPerView: 4,
      },
    },
    loop: true,
    slidesPerView: 4,
    spaceBetween: 20,
    mousewhell: true,
    Keyboard: true,
    freeMode: true,
  });