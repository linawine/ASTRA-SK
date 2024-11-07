/ Слайдер секция о компании /

var swiperCompany = new Swiper(".mySwiperCompany", {
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
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

/ Слайдер специалисты /

var swiperSpecialists = new Swiper(".mySwiperSpecialists", {
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    loop: true,
    breakpoints: {
        200: {
            slidesPerView: 1,
        },
        550: {
            slidesPerView: 2,
        },
        770: {
            spaceBetween: 20,
            slidesPerView: 3,
        },
        1045: {
            slidesPerView: 4,
        },
    },
    spaceBetween: 20
});

/ Слайдер преимущества /

let swiper = new Swiper(".mySwiperAdvantages", {  
    breakpoints: {  
        200: {  
            slidesPerView: 1,  
            grid: {  
                rows: 2,  
            },  
            spaceBetween: 20,  
            enabled: true // Включить прокрутку для меньших экранов
        },  
        670: {  
            slidesPerView: 2,  
            grid: {  
                rows: 2,  
            },  
            spaceBetween: 20,  
            enabled: true // Включить прокрутку для меньших экранов
        },  
        890: {  
            slidesPerView: 3,  
            grid: {  
                rows: 2,  
            },  
            spaceBetween: 20,  
            enabled: true // Включить прокрутку для меньших экранов
        },  
        1070: {  
            slidesPerView: 4,  
            grid: {  
                rows: 2,  
            },  
            spaceBetween: 20,  
            enabled: false // Отключить прокрутку для экрана больше 1070px
        },  
    },  
    spaceBetween: 20,  
    navigation: {  
        nextEl: ".swiper-button-next",  
        prevEl: ".swiper-button-prev",  
    }, 
});

/ Слайдер лучшие сотрудники /

document.addEventListener('DOMContentLoaded', function () {
    var swipedsdr = new Swiper('.mySwiperBest-worker', {
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        enabled: true,
        slidesPerView: 1,
        breakpoints: {
            600: {
                slidesPerView: 3,
                enabled: false
            }
        }
    });
});

/ Кнопка смотреть еще в разделе новости /

const showMoreButton = document.querySelector('.show-more-btn');
const newsGrid = document.querySelector('.news-grid');
const newsTemplate = document.querySelector('#news-template'); // Шаблон для блоков

let moreNews = [ // Массив с данными для дополнительных блоков
    { title: 'Название новости', subtitle: 'Задача организации, в особенности же новая модель организационной...', date: '14.07.2024' },
    { title: 'Название новости', subtitle: 'Задача организации, в особенности же новая модель организационной...', date: '14.07.2024' },
    { title: 'Название новости', subtitle: 'Задача организации, в особенности же новая модель организационной...', date: '14.07.2024' },
    { title: 'Название новости', subtitle: 'Задача организации, в особенности же новая модель организационной...', date: '14.07.2024' },
    { title: 'Название новости', subtitle: 'Задача организации, в особенности же новая модель организационной...', date: '14.07.2024' },
    { title: 'Название новости', subtitle: 'Задача организации, в особенности же новая модель организационной...', date: '14.07.2024' },
    { title: 'Название новости', subtitle: 'Задача организации, в особенности же новая модель организационной...', date: '14.07.2024' },
    { title: 'Название новости', subtitle: 'Задача организации, в особенности же новая модель организационной...', date: '14.07.2024' },
    // ... добавьте больше данных для других блоков
];

showMoreButton.addEventListener('click', () => {
    // Скрыть кнопку
    showMoreButton.style.display = 'none';

    // Создать новые блоки новостей из массива
    moreNews.forEach(newsItem => {
        // Клонировать шаблон
        const newsContent = document.importNode(newsTemplate.content, true);

        // Заполнить данные в шаблон
        newsContent.querySelector('.news-content-title').textContent = newsItem.title;
        newsContent.querySelector('.news-content-subtitle').textContent = newsItem.subtitle;
        newsContent.querySelector('.news-content-btn p').textContent = newsItem.date;

        // Добавить новый блок в newsGrid
        newsGrid.appendChild(newsContent);
    });
});

/ Лицензии и сертификаты /

var swiperaad = new Swiper(".mySwiperLicenses", {
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    loop: true,
    breakpoints: {
        375: {
            slidesPerView: 1,
        },
        770: {
            spaceBetween: 0,
            slidesPerView: 2,
        },
        1045: {
            spaceBetween: 10,
            slidesPerView: 3,
        },
        1240: {
            slidesPerView: 4,
        },
    },
    spaceBetween: 20
});


document.addEventListener('DOMContentLoaded', function () {
    var swipedsdr = new Swiper('.mySwiperVacancy', {
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        enabled: true,
        slidesPerView: 1,
        breakpoints: {
            900: {
                slidesPerView: 1,
                enabled: false
            }
        }
    });
});