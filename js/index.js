/ Слайдер на главной странице /

let swiperBanner = new Swiper(".mySwiperBanner", {
  spaceBetween: 30,
  loop: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  mousewhell: true,
  Keyboard: true,
  autoplay: {
    delay: 4500,
    disableOnInteraction: false,
  },
});

/ Слайдер секция о компании /

var swiperCompany = new Swiper(".mySwiperCompany", {
  navigation: {
    prevEl: document.querySelector('.company-slider .swiper-button-prev-company'),
    nextEl: document.querySelector('.company-slider .swiper-button-next-company'),
  },
  spaceBetween: 30,
  loop: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  mousewhell: true,
  Keyboard: true,
  freeMode: true,
});

/ Слайдер из раздела проекты компании /

const swiperProject = new Swiper('.mySwiperProject', {
  loop: false,
  spaceBetween: 20,
  navigation: {
    prevEl: document.querySelector('.project-slider .swiper-button-prev-project'),
    nextEl: document.querySelector('.project-slider .swiper-button-next-project'),
  },
  slidesPerView: 1,   // When the window width is less than 600
  breakpoints: {
    480: {
      slidesPerView: 1
    },
    600: {
      // When the window width is 600 or more
      slidesPerView: 2
    },
    960: {
      // When the window width is 960 or more
      slidesPerView: 3
    },
  },
});

const filterItems = document.querySelectorAll('.company-object__item');
    const slides = document.querySelectorAll('.swiper-slide-project');

    filterItems.forEach(item => {
        item.addEventListener('click', () => {
            // Удаляем класс 'active' у всех элементов фильтра
            filterItems.forEach(filterItem => filterItem.classList.remove('active'));
            // Добавляем класс 'active' к текущему элементу
            item.classList.add('active');

            // Фильтруем слайды
            const filterId = item.dataset.id;
            slides.forEach(slide => {
                if (filterId === 'all') {
                    slide.style.display = 'block'; // Показывать все слайды
                } else {
                    slide.style.display = slide.classList.contains(filterId) ? 'block' : 'none'; // Показывать только слайды с нужным классом
                }
            });

            // Обновляем слайдер
            swiper.update();
        });
    });
