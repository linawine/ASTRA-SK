<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ASTRA-SK</title>
    <link rel="stylesheet" href="./css/reset.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./css/index.css" />
    <link rel="stylesheet" href="./css/base.css" />
</head>

<body>
    <div class="header open header-banner" id="header">
        <main class="container">
            <div class="header-inner">
                <a href="index.php" class="header-logo">
                    <img src="./img/header/logo.svg" alt="Логотип Астра-Ск">
                </a>
                <nav class="header-menu">
                    <nav class="header-menu-nav">
                        <ul class="header-menu-list">
                            <li class="header-menu-item">
                                <a href="company.php" class="header-menu-link">
                                    О компании
                                </a>
                            </li>
                            <li class="header-menu-item">
                                <a href="object.php" class="header-menu-link">
                                    Объекты
                                </a>
                            </li>
                            <li class="header-menu-item">
                                <a href="contact.php" class="header-menu-link">
                                    Контакты
                                </a>
                            </li>
                        </ul>
                    </nav>

                    <nav class="header-menu-contact">
                        <ul class="header-menu-contact-list">
                            <li class="header-menu-contact-item">
                                <img src="./img/header/Phone.svg" alt="Номер телефона" width="20px" height="20px">
                                <a href="tel:+79195698988">
                                    <p>8 (919) 569 8988</p>
                                </a>
                            </li>
                            <li class="header-menu-contact-item">
                                <img src="./img/header/Letter.svg" alt="Почта" width="20px" height="20px">
                                <a href="mailto:zsmstroika@mail.ru">
                                    <p>zsmstroika@mail.ru</p>
                                </a>
                            </li>
                            <li class="header-menu-contact-item">
                                <button class="header-menu-contact-link" id="openModalBtn1">
                                    Заказать звонок
                                </button>
                            </li>
                        </ul>
                    </nav>

                    <nav class="header-social-contact">
                        <ul class="header-social-contact-list">
                            <li class="header-social-contact-item">
                                <a href="#" class="header-social-contact-link">
                                    Вконтакте
                                </a>
                            </li>
                            <li class="header-social-contact-item">
                                <a href="#" class="header-social-contact-link">
                                    Telegram
                                </a>
                            </li>
                            <li class="header-social-contact-item">
                                <a href="#" class="header-social-contact-link">
                                    WhatsApp
                                </a>
                            </li>
                        </ul>
                    </nav>
                </nav>
                <button class="burger-menu-button" title="Title" type="button" id="burger">
                </button>
            </div>
        </main>
    </div>

    <section class="banner">
        <nav class="banner-nav">
            <ul class="banner-list">
                <li class="banner-item">
                    <a href="#" class="banner-link"> Вконтакте </a>
                </li>
                <li class="banner-item">
                    <a href="#" class="banner-link"> Telegram </a>
                </li>
                <li class="banner-item">
                    <a href="#" class="banner-link"> WhatsApp </a>
                </li>
            </ul>
        </nav>

        <div class="banner-slider">
            <div class="swiper mySwiperBanner">
                <div class="swiper-wrapper">
                    <div class="swiper-slide swiper-slide-banner swiper-slide-banner-one">
                        <div class="swiper-content">
                            <h1 class="swiper-slide__title">
                                Строим ваше будущее <span>уже сейчас</span>
                            </h1>
                            <div class="swiper-slide__text">
                                <P>СК «Астра» работает в сфере строительства 2015 года.  За это время мы собрали команду
                                    специалистов. Создали обширную материально-техническую базу и накопили большой опыт.
                                    Всё
                                    вместе
                                    это позволяет  нам успешно реализовывать даже самые сложные и нестандартные проекты.
                                </P>
                            </div>
                            <button class="swiper-slide__button white-btn" type="button" autofocus id="openModalBtn2">
                                Записаться на консультацию
                            </button>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-banner swiper-slide-banner-two">
                        <div class="swiper-content">
                            <h1 class="swiper-slide__title">
                                Строим ваше будущее <span>уже сейчас</span>
                            </h1>
                            <div class="swiper-slide__text">
                                <P>СК «Астра» работает в сфере строительства 2015 года.  За это время мы собрали команду
                                    специалистов. Создали обширную материально-техническую базу и накопили большой опыт.
                                    Всё
                                    вместе
                                    это позволяет  нам успешно реализовывать даже самые сложные и нестандартные проекты.
                                </P>
                            </div>
                            <button class="swiper-slide__button white-btn" type="button" autofocus>
                                Записаться на консультацию
                            </button>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-banner swiper-slide-banner-free">
                        <div class="swiper-content">
                            <h1 class="swiper-slide__title">
                                Строим ваше будущее <span>уже сейчас</span>
                            </h1>
                            <div class="swiper-slide__text">
                                <P>СК «Астра» работает в сфере строительства 2015 года.  За это время мы собрали команду
                                    специалистов. Создали обширную материально-техническую базу и накопили большой опыт.
                                    Всё
                                    вместе
                                    это позволяет  нам успешно реализовывать даже самые сложные и нестандартные проекты.
                                </P>
                            </div>
                            <button class="swiper-slide__button white-btn" type="button" autofocus>
                                Записаться на консультацию
                            </button>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination swiper-pagination-banner"></div>
            </div>
        </div>
    </section>

    <section class="company">
        <div class="container">
            <div class="company-wrapper">
                <div class="company-card">
                    <div class="company__img">
                        <img src="./img/company/company.svg" alt="О компании">
                    </div>
                    <div id="tabs" class="company__tabs">
                        <h2 class="company-tabs-title">О компании</h2>
                        <ul class="company-tabs-list">
                            <li class="company-tabs-item"><a href="#tabs-1">О нас</a></li>
                            <li class="company-tabs-item"><a href="#tabs-2">История</a></li>
                            <li class="company-tabs-item"><a href="#tabs-3">Команда</a></li>
                        </ul>
                        <div class="company-tabs-block" id="tabs-1">
                            <p>
                                СК «Астра» работает в сфере строительства 2015 года.  За это
                                время мы собрали команду специалистов. Создали обширную
                                материально-техническую базу и накопили большой опыт. Всё вместе
                                это позволяет  нам успешно реализовывать даже самые сложные и
                                нестандартные проекты.
                            </p>

                            <p>
                                На сегодняшний день СК «Астра»- это динамично развивающаяся
                                копания, за плечами которой участия более чем десятке крупных
                                проектов по строительству и реконструкции объектов в Кургане и
                                Курганской обл., Тюмени, Тобольске, Екатеринбургская обл..
                            </p>

                            <button class="company-tabs-btn blue-btn" type="button"
                                onclick="location.href='./company.php'" autofocus>
                                Больше информации о команде
                            </button>
                        </div>
                        <div class="company-tabs-block" id="tabs-2">
                            <p>
                                СК «Астра» работает в сфере строительства 2015 года.  За это
                                время мы собрали команду специалистов. Создали обширную
                                материально-техническую базу и накопили большой опыт. Всё вместе
                                это позволяет  нам успешно реализовывать даже самые сложные и
                                нестандартные проекты.
                            </p>

                            <p>
                                На сегодняшний день СК «Астра»- это динамично развивающаяся
                                копания, за плечами которой участия более чем десятке крупных
                                проектов по строительству и реконструкции объектов в Кургане и
                                Курганской обл., Тюмени, Тобольске, Екатеринбургская обл..
                            </p>

                            <button class="company-tabs-btn blue-btn" type="button"
                                onclick="location.href='./company.php'">
                                Больше информации о команде
                            </button>
                        </div>
                        <div class="company-tabs-block" id="tabs-3">
                            <p>
                                СК «Астра» работает в сфере строительства 2015 года.  За это
                                время мы собрали команду специалистов. Создали обширную
                                материально-техническую базу и накопили большой опыт. Всё вместе
                                это позволяет  нам успешно реализовывать даже самые сложные и
                                нестандартные проекты.
                            </p>

                            <p>
                                На сегодняшний день СК «Астра»- это динамично развивающаяся
                                копания, за плечами которой участия более чем десятке крупных
                                проектов по строительству и реконструкции объектов в Кургане и
                                Курганской обл., Тюмени, Тобольске, Екатеринбургская обл..
                            </p>

                            <p>
                                Мы гордимся своими достижениями и стремимся к дальнейшему
                                развитии и партнерству.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="company-slider">
                    <div class="swiper mySwiperCompany">
                        <div class="swiper-wrapper swiper-slide-company">
                            <div class="swiper-slide swiper-slide-company">
                            </div>
                            <div class="swiper-slide swiper-slide-company">
                            </div>
                            <div class="swiper-slide swiper-slide-company">
                            </div>
                        </div>
                        <div class="swiper-pagination swiper-pagination-company"></div>
                        <div class="swiper-button-next swiper-button-next-company"></div>
                        <div class="swiper-button-prev swiper-button-prev-company"></div>
                    </div>
                </div>
            </div>
    </section>

    <section class="project">
        <div class="container">
            <div class="project-wrapper">
                <div class="comapny-object__nav">
                    <h2 class="company-object__title">
                        Наши проекты
                    </h2>
                    <ul class="company-object__list list">
                        <li class="company-object__item list__item" data-id="commercial">Коммерческая недвижимость</li>
                        <li class="company-object__item list__item" data-id="low-rise">Малоэтажные дома</li>
                        <li class="company-object__item list__item active" data-id="all">Все проекты</li>
                    </ul>
                </div>
                <div class="project-slider">
                    <div class="swiper mySwiperProject">
                        <div class="swiper-wrapper swiper-wrapper-project">
                            <div class="swiper-slide swiper-slide-project commercial">
                                <img src="./img/project/project-1.jpg" class="img-slide" />
                                <h4 class="swiper-slide-object-title">
                                    <a href="#">Ледовая арена "Юность"</a>
                                </h4>
                                <ul class="swiper-slide-object-list">
                                    <li class="swiper-slide-object-item">
                                        594 кв.м.
                                    </li>
                                    <li class="swiper-slide-object-item">
                                        Длина: 39,6 м; Ширина: 15 м; Высота: 5,5 м
                                    </li>
                                </ul>
                                <button class="slide-project-btn">
                                    <p>Курган</p>
                                </button>
                            </div>
                            <div class="swiper-slide swiper-slide-project commercial">
                                <img src="./img/project/project-2.jpg" class="img-slide" />
                                <h4 class="swiper-slide-object-title">
                                    <a href="#">Автобусный вокзал</a>
                                </h4>
                                <ul class="swiper-slide-object-list">
                                    <li class="swiper-slide-object-item">
                                        594 кв.м.
                                    </li>
                                    <li class="swiper-slide-object-item">
                                        Длина: 39,6 м; Ширина: 15 м; Высота: 5,5 м
                                    </li>
                                </ul>
                                <button class="slide-project-btn">
                                    <p>Курган</p>
                                </button>
                            </div>
                            <div class="swiper-slide swiper-slide-project commercial">
                                <img src="./img/project/project-3.jpg" class="img-slide" />
                                <h4 class="swiper-slide-object-title">
                                    <a href="#">Спортивный комплекс “Велес”</a>
                                </h4>
                                <ul class="swiper-slide-object-list">
                                    <li class="swiper-slide-object-item">
                                        594 кв.м.
                                    </li>
                                    <li class="swiper-slide-object-item">
                                        Длина: 39,6 м; Ширина: 15 м; Высота: 5,5 м
                                    </li>
                                </ul>
                                <button class="slide-project-btn">
                                    <p>Курган</p>
                                </button>
                            </div>
                            <div class="swiper-slide swiper-slide-project commercial">
                                <img src="./img/project/project-1.jpg" class="img-slide" />
                                <h4 class="swiper-slide-object-title">
                                    <a href="#">Ледовая арена "Юность"</a>
                                </h4>
                                <ul class="swiper-slide-object-list">
                                    <li class="swiper-slide-object-item">
                                        594 кв.м.
                                    </li>
                                    <li class="swiper-slide-object-item">
                                        Длина: 39,6 м; Ширина: 15 м; Высота: 5,5 м
                                    </li>
                                </ul>
                                <button class="slide-project-btn">
                                    <p>Курган</p>
                                </button>
                            </div>
                            <div class="swiper-slide swiper-slide-project low-rise">
                                <img src="./img/project/project-2.jpg" class="img-slide" />
                                <h4 class="swiper-slide-object-title">
                                    <a href="#">Автобусный вокзал</a>
                                </h4>
                                <ul class="swiper-slide-object-list">
                                    <li class="swiper-slide-object-item">
                                        594 кв.м.
                                    </li>
                                    <li class="swiper-slide-object-item">
                                        Длина: 39,6 м; Ширина: 15 м; Высота: 5,5 м
                                    </li>
                                </ul>
                                <button class="slide-project-btn">
                                    <p>Курган</p>
                                </button>
                            </div>
                            <div class="swiper-slide swiper-slide-project low-rise">
                                <img src="./img/project/project-3.jpg" class="img-slide" />
                                <h4 class="swiper-slide-object-title">
                                    <a href="#">Спортивный комплекс “Велес”</a>
                                </h4>
                                <ul class="swiper-slide-object-list">
                                    <li class="swiper-slide-object-item">
                                        594 кв.м.
                                    </li>
                                    <li class="swiper-slide-object-item">
                                        Длина: 39,6 м; Ширина: 15 м; Высота: 5,5 м
                                    </li>
                                </ul>
                                <button class="slide-project-btn">
                                    <p>Курган</p>
                                </button>
                            </div>
                            <div class="swiper-slide swiper-slide-project low-rise">
                                <img src="./img/project/project-3.jpg" class="img-slide" />
                                <h4 class="swiper-slide-object-title">
                                    <a href="#">Спортивный комплекс “Велес”</a>
                                </h4>
                                <ul class="swiper-slide-object-list">
                                    <li class="swiper-slide-object-item">
                                        594 кв.м.
                                    </li>
                                    <li class="swiper-slide-object-item">
                                        Длина: 39,6 м; Ширина: 15 м; Высота: 5,5 м
                                    </li>
                                </ul>
                                <button class="slide-project-btn">
                                    <p>Курган</p>
                                </button>
                            </div>
                            <div class="swiper-slide swiper-slide-project low-rise">
                                <img src="./img/project/project-3.jpg" class="img-slide" />
                                <h4 class="swiper-slide-object-title">
                                    <a href="#">Спортивный комплекс “Велес”</a>
                                </h4>
                                <ul class="swiper-slide-object-list">
                                    <li class="swiper-slide-object-item">
                                        594 кв.м.
                                    </li>
                                    <li class="swiper-slide-object-item">
                                        Длина: 39,6 м; Ширина: 15 м; Высота: 5,5 м
                                    </li>
                                </ul>
                                <button class="slide-project-btn">
                                    <p>Курган</p>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-prev swiper-button-prev-project"></div>
                        <div class="swiper-button-next swiper-button-next-project"></div>
                </div>
            </div>
        </div>
    </section>

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
    <script defer src="./js/index.js"></script>
    <script defer src="./js/base.js"></script>
</body>

</html>