<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ASTRA-SK</title>
    <link rel="stylesheet" href="./css/reset.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./css/card-object.css" />
    <link rel="stylesheet" href="./css/base.css" />
</head>

<body>
    
    <?php require_once "block/header.php"; ?>

    <div class="card-object">
        <div class="container">
            <div class="card-object-wrapper">
                <div class="location-str">
                    <div class="location-str-base">
                        <a href="index.html">Главная</a>
                    </div>
                    <div class="location-str-base">
                        <a href="index.html">Объекты</a>
                    </div>
                    <div class="location-str-accent">
                        <a href="company.html">Ледовая арена “Юность”</a>
                    </div>
                </div>
                <h2 class="card-object-title">
                    Ледовая арена “Юность”
                </h2>
                <div class="card-object-subtitle">
                    В городе Кургане была построена ледовая арена “Юность” из ЛСТК. Его площадь составит 504 кв.м.
                </div>
                <div class="card-object-info">
                    <div class="card-object-img">
                        <img src="./img/object/card-object.svg" alt="">
                        <button class="slide-project-btn">
                            <p>Курган</p>
                        </button>
                    </div>
                    <div class="card-object-parameters">
                        <h5 class="card-object-parameters-title">
                            Объем работы:
                        </h5>
                        <div class="card-object-parameters-info">
                            Проектирование, производство металлоконструкций
                        </div>
                        <h5 class="card-object-parameters-title">
                            Параметры:
                        </h5>
                        <div class="card-object-parameters-info">
                            Длина: 39,6 м; Ширина: 15 м; Высота: 5,5 м
                        </div>
                        <h5 class="card-object-parameters-title">
                            Сроки строительства:
                        </h5>
                        <div class="card-object-parameters-info">
                            Проектирование: 20 дней; Изготовление: 20 дней;
                        </div>
                        <button class="card-object-parameters-btn blue-btn">
                            Заказать проект
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="gallery-object">
        <div class="container">
            <h2 class="gallery-object-title">
                Галерея проекта
            </h2>
            <div class="gallery-object-slider">
                <div class="swiper mySwiperGalleryObject">
                    <div class="swiper-wrapper swiper-wrapper-gallery-object">
                        <div class="swiper-slide swiper-slide-gallery-object"><div class="img-gallery"><img src="./img/project/project-1.jpg" alt=""></div></div>
                        <div class="swiper-slide swiper-slide-gallery-object"><div class="img-gallery"><img src="./img/project/project-1.jpg" alt=""></div></div>
                        <div class="swiper-slide swiper-slide-gallery-object"><div class="img-gallery"><img src="./img/project/project-1.jpg" alt=""></div></div>
                        <div class="swiper-slide swiper-slide-gallery-object"><div class="img-gallery"><img src="./img/project/project-1.jpg" alt=""></div></div>
                        <div class="swiper-slide swiper-slide-gallery-object"><div class="img-gallery"><img src="./img/project/project-1.jpg" alt=""></div></div>
                        <div class="swiper-slide swiper-slide-gallery-object"><div class="img-gallery"><img src="./img/project/project-1.jpg" alt=""></div></div>
                    </div>
                </div>
                <div class="swiper-button-next swiper-button-next-project"></div>
                <div class="swiper-button-prev swiper-button-prev-project"></div>
            </div>
        </div>
    </div>

    <div class="object-description">
        <div class="container">
            <h2 class="object-description-title">
                Описание и характеристика
            </h2>
            <div id="tabs" class="object-tabs">
                <ul class="object-tabs-list">
                    <li class="object-tabs-item"><a href="#tabs-1">Описание</a></li>
                    <li class="object-tabs-item"><a href="#tabs-2">Xарактеристика</a></li>
                </ul>
                <div class="object-tabs-block" id="tabs-1">
                    <p>Современные технологии достигли такого уровня, что экономическая повестка сегодняшнего дня в
                        значительной степени обусловливает важность прогресса профессионального сообщества. Ясность
                        нашей позиции очевидна: новая модель организационной деятельности представляет собой интересный
                        эксперимент проверки позиций, занимаемых участниками в отношении поставленных задач. В рамках
                        спецификации современных стандартов, активно развивающиеся страны третьего мира освещают
                        чрезвычайно интересные особенности картины в целом, однако конкретные выводы, разумеется,
                        превращены в посмешище, хотя само их существование приносит несомненную пользу обществу.</p>
                </div>
                <div class="object-tabs-block" id="tabs-2">
                    <p>Современные технологии достигли такого уровня, что экономическая повестка сегодняшнего дня в
                        значительной степени обусловливает важность прогресса профессионального сообщества. Ясность
                        нашей позиции очевидна: новая модель организационной деятельности представляет собой интересный
                        эксперимент проверки позиций, занимаемых участниками в отношении поставленных задач. В рамках
                        спецификации современных стандартов, активно развивающиеся страны третьего мира освещают
                        чрезвычайно интересные особенности картины в целом, однако конкретные выводы, разумеется,
                        превращены в посмешище, хотя само их существование приносит несомненную пользу обществу.</p>
                </div>
            </div>
        </div>
    </div>

    <section class="feedback">
        <div class="container">
            <div class="feedback-wrapper">
                <div class="feedback-left">
                    <h2 class="feedback-title">
                        Свяжитесь с нами
                    </h2>
                    <div class="feedback-subtitle">
                        Мы перезвоним и расскажем о направлениях недвижимости.
                    </div>
                    <div class="feedback-wrapper-form">
                        <form action="">
                            <div class="input-box">
                                <input type="text" placeholder="Ваше имя" required>
                            </div>
                            <div class="input-box">
                                <input type="tel" placeholder="Номер телефона" required>
                            </div>
                            <div class="input-box" id="comment" class="comment">
                                <input type="text" placeholder="Коментарий" required>
                            </div>
                            <button class="feedback-btn blue-btn" type="submit">Отправить</button>
                            <div class="remember">
                                <label for=""><input type="checkbox">Я ознакомлен и согласен с политикой
                                    конфиденциальности</label>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="feedback-right">
                    <img src="./img/form/name-company.svg" alt="Название компании">
                    <img src="./img/form/img-form.svg" alt="">
                </div>
            </div>
        </div>
    </section>

    <?php require_once "block/footer.php"; ?>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://code.jquery.com/ui/1.14.0/jquery-ui.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script defer src="./js/card-object.js"></script>
    <script defer src="./js/base.js"></script>
</body>

</html>