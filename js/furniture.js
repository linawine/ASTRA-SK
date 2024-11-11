
var swipersaad = new Swiper(".mySwiperfurniture", {
  breakpoints: {
    200: {
      slidesPerView: 1,
    },
    600: {
      slidesPerView: 2,
    },
    720: {
      slidesPerView: 3,
    },
    1050: {
      slidesPerView: 4,
    },
  },
  slidesPerView: 4,
  spaceBetween: 20,
  loop: false,
  navigation: {
    prevEl: document.querySelector('.furniture-slider .swiper-button-prev-furniture'),
    nextEl: document.querySelector('.furniture-slider .swiper-button-next-furniture'),
},
});

const filterItemsFurniture = document.querySelectorAll(".furniture-object__item");
const slidesFurniture = document.querySelectorAll(".swiper-slide-furniture");

filterItemsFurniture.forEach((item) => {
  item.addEventListener("click", () => {
    filterItemsFurniture.forEach((el) => el.classList.remove("active"));
    item.classList.add("active");

    const filterValue = item.dataset.id; // Изменил на `dataset.id`

    slidesFurniture.forEach((slide) => {
      if (filterValue === "all" || slide.classList.contains(filterValue)) { // Проверяем, есть ли класс
        slide.style.display = "block";
      } else {
        slide.style.display = "none";
      }
    });
  });
});

var swiperdasd = new Swiper(".mySwiperPlusesWork", {
  breakpoints: {
    375: {
      slidesPerView: 1,
      grid: {
        rows: 2,
      },
      spaceBetween: 20,

    },
    780: {
      slidesPerView: 2,
      grid: {
        rows: 2,
      },
      spaceBetween: 20,

    },
    1070: {
      slidesPerView: 3,
      grid: {
        rows: 2,
      },
      spaceBetween: 20,

    },
  },
  navigation: {
    prevEl: document.querySelector('.pluses-work-slider .swiper-button-prev-advantages'),
    nextEl: document.querySelector('.pluses-work-slider .swiper-button-next-advantages'),
},
});