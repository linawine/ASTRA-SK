<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASTRA-SK</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./css/company.css">
    <link rel="stylesheet" href="./css/base.css">
</head>

<body>

    <?php require_once "block/header.php"; ?>

    <section class="company-tab">
        <div class="company-card">
            <div id="tabs" class="company__tabs">
                <div class="container">
                    <div class="location-str">
                        <div class="location-str-base">
                            <a href="index.html">Главная</a>
                        </div>
                        <div class="location-str-accent">
                            <a href="company.html">О компании</a>
                        </div>
                    </div>
                    <ul class="company-tabs-list">
                        <li class="company-tabs-item"><a href="#tabs-1">О компании</a></li>
                        <li class="company-tabs-item"><a href="#tabs-2">Наша команда</a></li>
                        <li class="company-tabs-item"><a href="#tabs-3">Вакансии</a></li>
                        <li class="company-tabs-item"><a href="#tabs-4">Новости</a></li>
                        <li class="company-tabs-item"><a href="#tabs-5">Лицензии и сертификаты</a></li>
                    </ul>
                </div>
                <div class="company-block-company" id="tabs-1">
                    <div class="container">
                        <div class="company-block-slider">
                            <div class="company-block__img">
                                <img src="./img/company/company.svg" alt="О компании">
                            </div>
                            <div class="company-block-text">
                                <h2 class="company-tabs-title">О компании</h2>
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
                            <div class="company-slider">
                                <div class="swiper mySwiperCompany">
                                    <div class="swiper-wrapper">
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
                    </div>
                    <div class="production">
                        <div class="container-production">
                            <div class="block1">
                                <div class="production-left">
                                    <h2 class="production-title">
                                        Производство
                                    </h2>
                                    <div class="production-text">
                                        <p>
                                            Собственное производство и штат высококвалифицированных сотрудников
                                            различного профиля –
                                            это позволяет вести строительство надежных и экономичных объектов в сжатые
                                            сроки.
                                        </p>
                                        <p>
                                            У нас имеется собственный отдел ОТК, поэтому мы гарантируем качество наших
                                            конструкций на всех
                                            этапах их строительства.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="block2">
                                <div class="production-right">
                                    <div class="production-right-text">
                                        <h3 class="production-right-title">
                                            20 000 м2
                                        </h3>
                                        <p class="production-right-p">
                                            территория собственного производства
                                        </p>
                                        <h3 class="production-right-title">
                                            1000 тонн
                                        </h3>
                                        <p class="production-right-p">
                                            в месяц производственные мощности завода
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="specialists">
                        <div class="container">
                            <h2 class="specialists-title">
                                Высококвалифицированные специалисты
                            </h2>
                            <div class="specialists-block">
                                <div class="specialists-block-text">
                                    <p>
                                        Наш штат высококвалифицированных сотрудников различного профиля – позволяет
                                        вести строительство
                                        надежных и экономичных объектов в сжатые сроки.
                                    </p>
                                </div>
                                <button class="specialists-block-btn blue-btn">
                                    Посмотреть всю команду
                                </button>
                            </div>
                            <div class="specialists-slider">
                                <div class="swiper mySwiperSpecialists">
                                    <div class="swiper-wrapper swiper-wrapper-slide-specialists">
                                        <div class="swiper-slide swiper-slide-specialists">
                                            <div class="specialists-card-block">
                                                <h3 class="specialists-card-block-title">
                                                    Инженер
                                                </h3>
                                                <div class="specialists-card-block-img">
                                                    <img src="./img/specialists-card-block/specialists-card-block.svg"
                                                        alt="">
                                                </div>
                                                <div class="specialists-card-block-name">
                                                    Александр
                                                </div>
                                                <div class="specialists-card-block-p">
                                                    32+ реализованных проектов
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-specialists">
                                            <div class="specialists-card-block">
                                                <h3 class="specialists-card-block-title">
                                                    Инженер
                                                </h3>
                                                <div class="specialists-card-block-img">
                                                    <img src="./img/specialists-card-block/specialists-card-block.svg"
                                                        alt="">
                                                </div>
                                                <div class="specialists-card-block-name">
                                                    Александр
                                                </div>
                                                <div class="specialists-card-block-p">
                                                    32+ реализованных проектов
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-specialists">
                                            <div class="specialists-card-block">
                                                <h3 class="specialists-card-block-title">
                                                    Инженер
                                                </h3>
                                                <div class="specialists-card-block-img">
                                                    <img src="./img/specialists-card-block/specialists-card-block.svg"
                                                        alt="">
                                                </div>
                                                <div class="specialists-card-block-name">
                                                    Александр
                                                </div>
                                                <div class="specialists-card-block-p">
                                                    32+ реализованных проектов
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-specialists">
                                            <div class="specialists-card-block">
                                                <h3 class="specialists-card-block-title">
                                                    Инженер
                                                </h3>
                                                <div class="specialists-card-block-img">
                                                    <img src="./img/specialists-card-block/specialists-card-block.svg"
                                                        alt="">
                                                </div>
                                                <div class="specialists-card-block-name">
                                                    Александр
                                                </div>
                                                <div class="specialists-card-block-p">
                                                    32+ реализованных проектов
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-specialists">
                                            <div class="specialists-card-block">
                                                <h3 class="specialists-card-block-title">
                                                    Инженер
                                                </h3>
                                                <div class="specialists-card-block-img">
                                                    <img src="./img/specialists-card-block/specialists-card-block.svg"
                                                        alt="">
                                                </div>
                                                <div class="specialists-card-block-name">
                                                    Александр
                                                </div>
                                                <div class="specialists-card-block-p">
                                                    32+ реализованных проектов
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-specialists">
                                            <div class="specialists-card-block">
                                                <h3 class="specialists-card-block-title">
                                                    Инженер
                                                </h3>
                                                <div class="specialists-card-block-img">
                                                    <img src="./img/specialists-card-block/specialists-card-block.svg"
                                                        alt="">
                                                </div>
                                                <div class="specialists-card-block-name">
                                                    Александр
                                                </div>
                                                <div class="specialists-card-block-p">
                                                    32+ реализованных проектов
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-specialists">
                                            <div class="specialists-card-block">
                                                <h3 class="specialists-card-block-title">
                                                    Инженер
                                                </h3>
                                                <div class="specialists-card-block-img">
                                                    <img src="./img/specialists-card-block/specialists-card-block.svg"
                                                        alt="">
                                                </div>
                                                <div class="specialists-card-block-name">
                                                    Александр
                                                </div>
                                                <div class="specialists-card-block-p">
                                                    32+ реализованных проектов
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-specialists">
                                            <div class="specialists-card-block">
                                                <h3 class="specialists-card-block-title">
                                                    Инженер
                                                </h3>
                                                <div class="specialists-card-block-img">
                                                    <img src="./img/specialists-card-block/specialists-card-block.svg"
                                                        alt="">
                                                </div>
                                                <div class="specialists-card-block-name">
                                                    Александр
                                                </div>
                                                <div class="specialists-card-block-p">
                                                    32+ реализованных проектов
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-specialists">
                                            <div class="specialists-card-block">
                                                <h3 class="specialists-card-block-title">
                                                    Инженер
                                                </h3>
                                                <div class="specialists-card-block-img">
                                                    <img src="./img/specialists-card-block/specialists-card-block.svg"
                                                        alt="">
                                                </div>
                                                <div class="specialists-card-block-name">
                                                    Александр
                                                </div>
                                                <div class="specialists-card-block-p">
                                                    32+ реализованных проектов
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-button-next swiper-button-next-project hidden"></div>
                                <div class="swiper-button-prev swiper-button-prev-project hidden"></div>
                            </div>
                        </div>
                    </div>
                    <div class="advantages">
                        <div class="container">
                            <h2 class="advantages-title">
                                Почему ASTRACK
                            </h2>
                            <div class="advantages-slider">
                                <div class="swiper mySwiperAdvantages">
                                    <div class="swiper-wrapper swiper-wrapper-advantages">
                                        <div class="swiper-slide swiper-slide-advantages">
                                            <div class="advantages-card-block">
                                                <h3 class="advantages-card-block-title">
                                                    Преимущество
                                                </h3>
                                                <p class="advantages-card-block-text">
                                                    Задача организации, в особенности же новая модель организационной
                                                    деятельности обеспечивает
                                                    актуальность кластеризации усилий.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-advantages">
                                            <div class="advantages-card-block">
                                                <h3 class="advantages-card-block-title">
                                                    Преимущество
                                                </h3>
                                                <p class="advantages-card-block-text">
                                                    Задача организации, в особенности же новая модель организационной
                                                    деятельности обеспечивает
                                                    актуальность кластеризации усилий.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-advantages">
                                            <div class="advantages-card-block">
                                                <h3 class="advantages-card-block-title">
                                                    Преимущество
                                                </h3>
                                                <p class="advantages-card-block-text">
                                                    Задача организации, в особенности же новая модель организационной
                                                    деятельности обеспечивает
                                                    актуальность кластеризации усилий.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-advantages">
                                            <div class="advantages-card-block">
                                                <h3 class="advantages-card-block-title">
                                                    Преимущество
                                                </h3>
                                                <p class="advantages-card-block-text">
                                                    Задача организации, в особенности же новая модель организационной
                                                    деятельности обеспечивает
                                                    актуальность кластеризации усилий.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-advantages">
                                            <div class="advantages-card-block">
                                                <h3 class="advantages-card-block-title">
                                                    Преимущество
                                                </h3>
                                                <p class="advantages-card-block-text">
                                                    Задача организации, в особенности же новая модель организационной
                                                    деятельности обеспечивает
                                                    актуальность кластеризации усилий.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-advantages">
                                            <div class="advantages-card-block">
                                                <h3 class="advantages-card-block-title">
                                                    Преимущество
                                                </h3>
                                                <p class="advantages-card-block-text">
                                                    Задача организации, в особенности же новая модель организационной
                                                    деятельности обеспечивает
                                                    актуальность кластеризации усилий.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-advantages">
                                            <div class="advantages-card-block">
                                                <h3 class="advantages-card-block-title">
                                                    Преимущество
                                                </h3>
                                                <p class="advantages-card-block-text">
                                                    Задача организации, в особенности же новая модель организационной
                                                    деятельности обеспечивает
                                                    актуальность кластеризации усилий.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-advantages">
                                            <div class="advantages-card-block">
                                                <h3 class="advantages-card-block-title">
                                                    Преимущество
                                                </h3>
                                                <p class="advantages-card-block-text">
                                                    Задача организации, в особенности же новая модель организационной
                                                    деятельности обеспечивает
                                                    актуальность кластеризации усилий.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="company-tabs-specialists" id="tabs-2">
                    <div class="specialists-tabs-block">
                        <div class="container">
                            <h2 class="specialists-title">
                                Высококвалифицированные специалисты
                            </h2>
                            <div class="specialists-block-text">
                                <p>
                                    Наш штат высококвалифицированных сотрудников различного профиля – позволяет вести
                                    строительство
                                    надежных и экономичных объектов в сжатые сроки.
                                </p>
                            </div>
                            <div class="specialists-slider">
                                <div class="swiper mySwiperSpecialists">
                                    <div class="swiper-wrapper swiper-wrapper-slide-specialists">
                                        <div class="swiper-slide swiper-slide-specialists">
                                            <div class="specialists-card-block">
                                                <h3 class="specialists-card-block-title">
                                                    Инженер
                                                </h3>
                                                <div class="specialists-card-block-img">
                                                    <img src="./img/specialists-card-block/specialists-card-block.svg"
                                                        alt="">
                                                </div>
                                                <div class="specialists-card-block-name">
                                                    Александр
                                                </div>
                                                <div class="specialists-card-block-p">
                                                    32+ реализованных проектов
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-specialists">
                                            <div class="specialists-card-block">
                                                <h3 class="specialists-card-block-title">
                                                    Инженер
                                                </h3>
                                                <div class="specialists-card-block-img">
                                                    <img src="./img/specialists-card-block/specialists-card-block.svg"
                                                        alt="">
                                                </div>
                                                <div class="specialists-card-block-name">
                                                    Александр
                                                </div>
                                                <div class="specialists-card-block-p">
                                                    32+ реализованных проектов
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-specialists">
                                            <div class="specialists-card-block">
                                                <h3 class="specialists-card-block-title">
                                                    Инженер
                                                </h3>
                                                <div class="specialists-card-block-img">
                                                    <img src="./img/specialists-card-block/specialists-card-block.svg"
                                                        alt="">
                                                </div>
                                                <div class="specialists-card-block-name">
                                                    Александр
                                                </div>
                                                <div class="specialists-card-block-p">
                                                    32+ реализованных проектов
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-specialists">
                                            <div class="specialists-card-block">
                                                <h3 class="specialists-card-block-title">
                                                    Инженер
                                                </h3>
                                                <div class="specialists-card-block-img">
                                                    <img src="./img/specialists-card-block/specialists-card-block.svg"
                                                        alt="">
                                                </div>
                                                <div class="specialists-card-block-name">
                                                    Александр
                                                </div>
                                                <div class="specialists-card-block-p">
                                                    32+ реализованных проектов
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-specialists">
                                            <div class="specialists-card-block">
                                                <h3 class="specialists-card-block-title">
                                                    Инженер
                                                </h3>
                                                <div class="specialists-card-block-img">
                                                    <img src="./img/specialists-card-block/specialists-card-block.svg"
                                                        alt="">
                                                </div>
                                                <div class="specialists-card-block-name">
                                                    Александр
                                                </div>
                                                <div class="specialists-card-block-p">
                                                    32+ реализованных проектов
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-specialists">
                                            <div class="specialists-card-block">
                                                <h3 class="specialists-card-block-title">
                                                    Инженер
                                                </h3>
                                                <div class="specialists-card-block-img">
                                                    <img src="./img/specialists-card-block/specialists-card-block.svg"
                                                        alt="">
                                                </div>
                                                <div class="specialists-card-block-name">
                                                    Александр
                                                </div>
                                                <div class="specialists-card-block-p">
                                                    32+ реализованных проектов
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-specialists">
                                            <div class="specialists-card-block">
                                                <h3 class="specialists-card-block-title">
                                                    Инженер
                                                </h3>
                                                <div class="specialists-card-block-img">
                                                    <img src="./img/specialists-card-block/specialists-card-block.svg"
                                                        alt="">
                                                </div>
                                                <div class="specialists-card-block-name">
                                                    Александр
                                                </div>
                                                <div class="specialists-card-block-p">
                                                    32+ реализованных проектов
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-specialists">
                                            <div class="specialists-card-block">
                                                <h3 class="specialists-card-block-title">
                                                    Инженер
                                                </h3>
                                                <div class="specialists-card-block-img">
                                                    <img src="./img/specialists-card-block/specialists-card-block.svg"
                                                        alt="">
                                                </div>
                                                <div class="specialists-card-block-name">
                                                    Александр
                                                </div>
                                                <div class="specialists-card-block-p">
                                                    32+ реализованных проектов
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-specialists">
                                            <div class="specialists-card-block">
                                                <h3 class="specialists-card-block-title">
                                                    Инженер
                                                </h3>
                                                <div class="specialists-card-block-img">
                                                    <img src="./img/specialists-card-block/specialists-card-block.svg"
                                                        alt="">
                                                </div>
                                                <div class="specialists-card-block-name">
                                                    Александр
                                                </div>
                                                <div class="specialists-card-block-p">
                                                    32+ реализованных проектов
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-button-next swiper-button-next-project"></div>
                                <div class="swiper-button-prev swiper-button-prev-project"></div>
                            </div>
                        </div>
                    </div>
                    <div class="best-worker">
                        <div class="container">
                            <div class="best-worker-wrapper">
                                <h2 class="best-worker-title">
                                    Лучшие сотрудники месяца
                                </h2>
                                <div class="best-worker-subtitle">
                                    <p>
                                        Наш штат высококвалифицированных сотрудников различного профиля – позволяет
                                        вести строительство
                                        надежных и экономичных объектов в сжатые сроки.
                                    </p>
                                </div>
                                <div class="specialists-cards">
                                    <div class="swiper mySwiperBest-worker">
                                        <div class="swiper-wrapper swiper-wrapper-best-worker">
                                            <div class="swiper-slide swiper-slide-best-worker">
                                                <div class="card-block-best-worker">
                                                    <div class="card-block-best-worker-img">
                                                        <img class="card-block-best-worker-img"
                                                            src="./img/specialists-card-block/specialists-card-block.svg"
                                                            alt="">
                                                    </div>
                                                    <div class="card-block-best-worker-info">
                                                        <h3 class="card-block-title-best-worker">
                                                            Инженер
                                                        </h3>
                                                        <div class="best-worker-card-block-name">
                                                            Александр
                                                        </div>
                                                        <div class="best-worker-card-block-p">
                                                            32+ реализованных проектов
                                                        </div>
                                                        <div class="specialista-card-block-info">
                                                            <p>Мы вынуждены отталкиваться от того, что выбранный нами
                                                                инновационный путь однозначно
                                                                фиксирует необходимость существующих финансовых и
                                                                административных условий. Наше дело не
                                                                так однозначно, как может показаться:
                                                                высокотехнологичная концепция общественного уклада
                                                                создаёт предпосылки для соответствующих условий
                                                                активизации.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide swiper-slide-best-worker">
                                                <div class="card-block-best-worker">
                                                    <div class="card-block-best-worker-img">
                                                        <img class="card-block-best-worker-img"
                                                            src="./img/specialists-card-block/specialists-card-block.svg"
                                                            alt="">
                                                    </div>
                                                    <div class="card-block-best-worker-info">
                                                        <h3 class="card-block-title-best-worker">
                                                            Инженер
                                                        </h3>
                                                        <div class="best-worker-card-block-name">
                                                            Александр
                                                        </div>
                                                        <div class="best-worker-card-block-p">
                                                            32+ реализованных проектов
                                                        </div>
                                                        <div class="specialista-card-block-info">
                                                            <p>Мы вынуждены отталкиваться от того, что выбранный нами
                                                                инновационный путь однозначно
                                                                фиксирует необходимость существующих финансовых и
                                                                административных условий. Наше дело не
                                                                так однозначно, как может показаться:
                                                                высокотехнологичная концепция общественного уклада
                                                                создаёт предпосылки для соответствующих условий
                                                                активизации.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide swiper-slide-best-worker">
                                                <div class="card-block-best-worker">
                                                    <div class="card-block-best-worker-img">
                                                        <img class="card-block-best-worker-img"
                                                            src="./img/specialists-card-block/specialists-card-block.svg"
                                                            alt="">
                                                    </div>
                                                    <div class="card-block-best-worker-info">
                                                        <h3 class="card-block-title-best-worker">
                                                            Инженер
                                                        </h3>
                                                        <div class="best-worker-card-block-name">
                                                            Александр
                                                        </div>
                                                        <div class="best-worker-card-block-p">
                                                            32+ реализованных проектов
                                                        </div>
                                                        <div class="specialista-card-block-info">
                                                            <p>Мы вынуждены отталкиваться от того, что выбранный нами
                                                                инновационный путь однозначно
                                                                фиксирует необходимость существующих финансовых и
                                                                административных условий. Наше дело не
                                                                так однозначно, как может показаться:
                                                                высокотехнологичная концепция общественного уклада
                                                                создаёт предпосылки для соответствующих условий
                                                                активизации.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="swiper-button-next swiper-button-next-project"></div>
                                        <div class="swiper-button-prev swiper-button-prev-project"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vacancy-tabs-block" id="tabs-3">
                    <div class="container">
                        <div class="vacancy-tab">
                            <div class="vacancy-tab-content" id="content-1">
                                <img src="./img/vacancy/vacancy.jpg" alt="">
                                <button class="vacancy-tab-content-header-btn blue-btn">
                                    Откликнуться
                                </button>
                                <div class="vacancy-tab-wrapper-content">
                                    <h4 class="vacancy-tab-content-title">
                                        Строитель
                                    </h4>
                                    <div class="vacancy-tab-content-list">
                                        <h5 class="vacancy-tab-content-list-title">Что вам предстоит делать
                                        </h5>
                                        <ol class="vacancy-tab-list">
                                            <li>Задача организации, в особенности же новая модель организационной
                                                деятельности
                                                обеспечивает актуальность кластеризации усилий.</li>
                                            <li>Задача организации, в особенности же новая модель организационной
                                                деятельности
                                                обеспечивает актуальность кластеризации усилий.</li>
                                        </ol>
                                    </div>
                                    <div class="vacancy-tab-content-list">
                                        <h5 class="vacancy-tab-content-list-title">Что нужно знать и уметь
                                        </h5>
                                        <ol class="vacancy-tab-list">
                                            <li>Задача организации, в особенности же новая модель организационной
                                                деятельности
                                                обеспечивает актуальность кластеризации усилий.</li>
                                        </ol>
                                    </div>
                                    <div class="vacancy-tab-content-list">
                                        <h5 class="vacancy-tab-content-list-title">Что мы предлагаем
                                        </h5>
                                        <ol class="vacancy-tab-list">
                                            <li>Задача организации, в особенности же новая модель организационной
                                                деятельности
                                                обеспечивает актуальность кластеризации усилий.</li>
                                            <li>Задача организации, в особенности же новая модель организационной
                                                деятельности
                                                обеспечивает актуальность кластеризации усилий.</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="vacancy-tab-content" id="content-2">
                                <img src="./img/vacancy/vacancy.jpg" alt="">
                                <button class="vacancy-tab-content-header-btn blue-btn">
                                    Откликнуться
                                </button>
                                <div class="vacancy-tab-wrapper-content">
                                    <h4 class="vacancy-tab-content-title">
                                        Строитель
                                    </h4>
                                    <div class="vacancy-tab-content-list">
                                        <h5 class="vacancy-tab-content-list-title">Что вам предстоит делать
                                        </h5>
                                        <ol class="vacancy-tab-list">
                                            <li>Задача организации, в особенности же новая модель организационной
                                                деятельности
                                                обеспечивает актуальность кластеризации усилий.</li>
                                            <li>Задача организации, в особенности же новая модель организационной
                                                деятельности
                                                обеспечивает актуальность кластеризации усилий.</li>
                                        </ol>
                                    </div>
                                    <div class="vacancy-tab-content-list">
                                        <h5 class="vacancy-tab-content-list-title">Что нужно знать и уметь
                                        </h5>
                                        <ol class="vacancy-tab-list">
                                            <li>Задача организации, в особенности же новая модель организационной
                                                деятельности
                                                обеспечивает актуальность кластеризации усилий.</li>
                                        </ol>
                                    </div>
                                    <div class="vacancy-tab-content-list">
                                        <h5 class="vacancy-tab-content-list-title">Что мы предлагаем
                                        </h5>
                                        <ol class="vacancy-tab-list">
                                            <li>Задача организации, в особенности же новая модель организационной
                                                деятельности
                                                обеспечивает актуальность кластеризации усилий.</li>
                                            <li>Задача организации, в особенности же новая модель организационной
                                                деятельности
                                                обеспечивает актуальность кластеризации усилий.</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="vacancy-tab-content" id="content-3">
                                <img src="./img/vacancy/vacancy.jpg" alt="">
                                <button class="vacancy-tab-content-header-btn blue-btn">
                                    Откликнуться
                                </button>
                                <div class="vacancy-tab-wrapper-content">
                                    <h4 class="vacancy-tab-content-title">
                                        Строитель
                                    </h4>
                                    <div class="vacancy-tab-content-list">
                                        <h5 class="vacancy-tab-content-list-title">Что вам предстоит делать
                                        </h5>
                                        <ol class="vacancy-tab-list">
                                            <li>Задача организации, в особенности же новая модель организационной
                                                деятельности
                                                обеспечивает актуальность кластеризации усилий.</li>
                                            <li>Задача организации, в особенности же новая модель организационной
                                                деятельности
                                                обеспечивает актуальность кластеризации усилий.</li>
                                        </ol>
                                    </div>
                                    <div class="vacancy-tab-content-list">
                                        <h5 class="vacancy-tab-content-list-title">Что нужно знать и уметь
                                        </h5>
                                        <ol class="vacancy-tab-list">
                                            <li>Задача организации, в особенности же новая модель организационной
                                                деятельности
                                                обеспечивает актуальность кластеризации усилий.</li>
                                        </ol>
                                    </div>
                                    <div class="vacancy-tab-content-list">
                                        <h5 class="vacancy-tab-content-list-title">Что мы предлагаем
                                        </h5>
                                        <ol class="vacancy-tab-list">
                                            <li>Задача организации, в особенности же новая модель организационной
                                                деятельности
                                                обеспечивает актуальность кластеризации усилий.</li>
                                            <li>Задача организации, в особенности же новая модель организационной
                                                деятельности
                                                обеспечивает актуальность кластеризации усилий.</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="vacancy-tab-content" id="content-4">
                                <img src="./img/vacancy/vacancy.jpg" alt="">
                                <button class="vacancy-tab-content-header-btn blue-btn">
                                    Откликнуться
                                </button>
                                <div class="vacancy-tab-wrapper-content">
                                    <h4 class="vacancy-tab-content-title">
                                        Строитель
                                    </h4>
                                    <div class="vacancy-tab-content-list">
                                        <h5 class="vacancy-tab-content-list-title">Что вам предстоит делать
                                        </h5>
                                        <ol class="vacancy-tab-list">
                                            <li>Задача организации, в особенности же новая модель организационной
                                                деятельности
                                                обеспечивает актуальность кластеризации усилий.</li>
                                            <li>Задача организации, в особенности же новая модель организационной
                                                деятельности
                                                обеспечивает актуальность кластеризации усилий.</li>
                                        </ol>
                                    </div>
                                    <div class="vacancy-tab-content-list">
                                        <h5 class="vacancy-tab-content-list-title">Что нужно знать и уметь
                                        </h5>
                                        <ol class="vacancy-tab-list">
                                            <li>Задача организации, в особенности же новая модель организационной
                                                деятельности
                                                обеспечивает актуальность кластеризации усилий.</li>
                                        </ol>
                                    </div>
                                    <div class="vacancy-tab-content-list">
                                        <h5 class="vacancy-tab-content-list-title">Что мы предлагаем
                                        </h5>
                                        <ol class="vacancy-tab-list">
                                            <li>Задача организации, в особенности же новая модель организационной
                                                деятельности
                                                обеспечивает актуальность кластеризации усилий.</li>
                                            <li>Задача организации, в особенности же новая модель организационной
                                                деятельности
                                                обеспечивает актуальность кластеризации усилий.</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="vacancy-tab-content" id="content-5">
                                <img src="./img/vacancy/vacancy.jpg" alt="">
                                <button class="vacancy-tab-content-header-btn blue-btn">
                                    Откликнуться
                                </button>
                                <div class="vacancy-tab-wrapper-content">
                                    <h4 class="vacancy-tab-content-title">
                                        Строитель
                                    </h4>
                                    <div class="vacancy-tab-content-list">
                                        <h5 class="vacancy-tab-content-list-title">Что вам предстоит делать
                                        </h5>
                                        <ol class="vacancy-tab-list">
                                            <li>Задача организации, в особенности же новая модель организационной
                                                деятельности
                                                обеспечивает актуальность кластеризации усилий.</li>
                                            <li>Задача организации, в особенности же новая модель организационной
                                                деятельности
                                                обеспечивает актуальность кластеризации усилий.</li>
                                        </ol>
                                    </div>
                                    <div class="vacancy-tab-content-list">
                                        <h5 class="vacancy-tab-content-list-title">Что нужно знать и уметь
                                        </h5>
                                        <ol class="vacancy-tab-list">
                                            <li>Задача организации, в особенности же новая модель организационной
                                                деятельности
                                                обеспечивает актуальность кластеризации усилий.</li>
                                        </ol>
                                    </div>
                                    <div class="vacancy-tab-content-list">
                                        <h5 class="vacancy-tab-content-list-title">Что мы предлагаем
                                        </h5>
                                        <ol class="vacancy-tab-list">
                                            <li>Задача организации, в особенности же новая модель организационной
                                                деятельности
                                                обеспечивает актуальность кластеризации усилий.</li>
                                            <li>Задача организации, в особенности же новая модель организационной
                                                деятельности
                                                обеспечивает актуальность кластеризации усилий.</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="vacancy-tab-content" id="content-6">
                                <img src="./img/vacancy/vacancy.jpg" alt="">
                                <button class="vacancy-tab-content-header-btn blue-btn">
                                    Откликнуться
                                </button>
                                <div class="vacancy-tab-wrapper-content">
                                    <h4 class="vacancy-tab-content-title">
                                        Строитель
                                    </h4>
                                    <div class="vacancy-tab-content-list">
                                        <h5 class="vacancy-tab-content-list-title">Что вам предстоит делать
                                        </h5>
                                        <ol class="vacancy-tab-list">
                                            <li>Задача организации, в особенности же новая модель организационной
                                                деятельности
                                                обеспечивает актуальность кластеризации усилий.</li>
                                            <li>Задача организации, в особенности же новая модель организационной
                                                деятельности
                                                обеспечивает актуальность кластеризации усилий.</li>
                                        </ol>
                                    </div>
                                    <div class="vacancy-tab-content-list">
                                        <h5 class="vacancy-tab-content-list-title">Что нужно знать и уметь
                                        </h5>
                                        <ol class="vacancy-tab-list">
                                            <li>Задача организации, в особенности же новая модель организационной
                                                деятельности
                                                обеспечивает актуальность кластеризации усилий.</li>
                                        </ol>
                                    </div>
                                    <div class="vacancy-tab-content-list">
                                        <h5 class="vacancy-tab-content-list-title">Что мы предлагаем
                                        </h5>
                                        <ol class="vacancy-tab-list">
                                            <li>Задача организации, в особенности же новая модель организационной
                                                деятельности
                                                обеспечивает актуальность кластеризации усилий.</li>
                                            <li>Задача организации, в особенности же новая модель организационной
                                                деятельности
                                                обеспечивает актуальность кластеризации усилий.</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="vacancy-tab-content" id="content-7">
                                <img src="./img/vacancy/vacancy.jpg" alt="">
                                <button class="vacancy-tab-content-header-btn blue-btn">
                                    Откликнуться
                                </button>
                                <div class="vacancy-tab-wrapper-content">
                                    <h4 class="vacancy-tab-content-title">
                                        Строитель
                                    </h4>
                                    <div class="vacancy-tab-content-list">
                                        <h5 class="vacancy-tab-content-list-title">Что вам предстоит делать
                                        </h5>
                                        <ol class="vacancy-tab-list">
                                            <li>Задача организации, в особенности же новая модель организационной
                                                деятельности
                                                обеспечивает актуальность кластеризации усилий.</li>
                                            <li>Задача организации, в особенности же новая модель организационной
                                                деятельности
                                                обеспечивает актуальность кластеризации усилий.</li>
                                        </ol>
                                    </div>
                                    <div class="vacancy-tab-content-list">
                                        <h5 class="vacancy-tab-content-list-title">Что нужно знать и уметь
                                        </h5>
                                        <ol class="vacancy-tab-list">
                                            <li>Задача организации, в особенности же новая модель организационной
                                                деятельности
                                                обеспечивает актуальность кластеризации усилий.</li>
                                        </ol>
                                    </div>
                                    <div class="vacancy-tab-content-list">
                                        <h5 class="vacancy-tab-content-list-title">Что мы предлагаем
                                        </h5>
                                        <ol class="vacancy-tab-list">
                                            <li>Задача организации, в особенности же новая модель организационной
                                                деятельности
                                                обеспечивает актуальность кластеризации усилий.</li>
                                            <li>Задача организации, в особенности же новая модель организационной
                                                деятельности
                                                обеспечивает актуальность кластеризации усилий.</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="vacancy-tab-nav">
                                <a class="vacancy-tab-link" href="#content-1">
                                    <h4 class="vacancy-tab-nav-title">
                                        Строитель
                                    </h4>
                                    <div class="vacancy-tab-nav-subtitle">
                                        Курган
                                    </div>
                                    <div class="vacancy-tab-nav-text">
                                        <p>
                                            Обновлено 16.07.2024
                                        </p>
                                    </div>
                                </a>
                                <a class="vacancy-tab-link" href="#content-2">
                                    <h4 class="vacancy-tab-nav-title">
                                        Строитель
                                    </h4>
                                    <div class="vacancy-tab-nav-subtitle">
                                        Курган
                                    </div>
                                    <div class="vacancy-tab-nav-text">
                                        <p>
                                            Обновлено 16.07.2024
                                        </p>
                                    </div>
                                </a>
                                <a class="vacancy-tab-link" href="#content-3">
                                    <h4 class="vacancy-tab-nav-title">
                                        Строитель
                                    </h4>
                                    <div class="vacancy-tab-nav-subtitle">
                                        Курган
                                    </div>
                                    <div class="vacancy-tab-nav-text">
                                        <p>
                                            Обновлено 16.07.2024
                                        </p>
                                    </div>
                                </a>
                                <a class="vacancy-tab-link" href="#content-4">
                                    <h4 class="vacancy-tab-nav-title">
                                        Строитель
                                    </h4>
                                    <div class="vacancy-tab-nav-subtitle">
                                        Курган
                                    </div>
                                    <div class="vacancy-tab-nav-text">
                                        <p>
                                            Обновлено 16.07.2024
                                        </p>
                                    </div>
                                </a>
                                <a class="vacancy-tab-link" href="#content-5">
                                    <h4 class="vacancy-tab-nav-title">
                                        Строитель
                                    </h4>
                                    <div class="vacancy-tab-nav-subtitle">
                                        Курган
                                    </div>
                                    <div class="vacancy-tab-nav-text">
                                        <p>
                                            Обновлено 16.07.2024
                                        </p>
                                    </div>
                                </a>
                                <a class="vacancy-tab-link" href="#content-6">
                                    <h4 class="vacancy-tab-nav-title">
                                        Строитель
                                    </h4>
                                    <div class="vacancy-tab-nav-subtitle">
                                        Курган
                                    </div>
                                    <div class="vacancy-tab-nav-text">
                                        <p>
                                            Обновлено 16.07.2024
                                        </p>
                                    </div>
                                </a>
                                <a class="vacancy-tab-link" href="#content-7">
                                    <h4 class="vacancy-tab-nav-title">
                                        Строитель
                                    </h4>
                                    <div class="vacancy-tab-nav-subtitle">
                                        Курган
                                    </div>
                                    <div class="vacancy-tab-nav-text">
                                        <p>
                                            Обновлено 16.07.2024
                                        </p>
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="news-tabs-block" id="tabs-4">
                    <div class="news">
                        <div class="container">
                            <div class="news-grid">
                                <div class="news-content">
                                    <a href="news.html"><img src="./img/news/news.svg" alt=""></a>
                                    <h6 class="news-content-title">
                                        Название новости
                                    </h6>
                                    <div class="news-content-subtitle">
                                        Задача организации, в особенности же новая модель организационной...
                                    </div>
                                    <button class="news-content-btn">
                                        <p>14.07.2024</p>
                                    </button>
                                </div>
                                <div class="news-content">
                                    <a href="news.html"><img src="./img/news/news.svg" alt=""></a>

                                    <h6 class="news-content-title">
                                        Название новости
                                    </h6>
                                    <div class="news-content-subtitle">
                                        Задача организации, в особенности же новая модель организационной...
                                    </div>
                                    <button class="news-content-btn">
                                        <p>14.07.2024</p>
                                    </button>
                                </div>
                                <div class="news-content">
                                    <a href="news.html"><img src="./img/news/news.svg" alt=""></a>

                                    <h6 class="news-content-title">
                                        Название новости
                                    </h6>
                                    <div class="news-content-subtitle">
                                        Задача организации, в особенности же новая модель организационной...
                                    </div>
                                    <button class="news-content-btn">
                                        <p>14.07.2024</p>
                                    </button>
                                </div>
                                <div class="news-content">
                                    <a href="news.html"><img src="./img/news/news.svg" alt=""></a>

                                    <h6 class="news-content-title">
                                        Название новости
                                    </h6>
                                    <div class="news-content-subtitle">
                                        Задача организации, в особенности же новая модель организационной...
                                    </div>
                                    <button class="news-content-btn">
                                        <p>14.07.2024</p>
                                    </button>
                                </div>
                                <div class="news-content">
                                    <a href="news.html"><img src="./img/news/news.svg" alt=""></a>

                                    <h6 class="news-content-title">
                                        Название новости
                                    </h6>
                                    <div class="news-content-subtitle">
                                        Задача организации, в особенности же новая модель организационной...
                                    </div>
                                    <button class="news-content-btn">
                                        <p>14.07.2024</p>
                                    </button>
                                </div>
                                <div class="news-content">
                                    <a href="news.html"><img src="./img/news/news.svg" alt=""></a>

                                    <h6 class="news-content-title">
                                        Название новости
                                    </h6>
                                    <div class="news-content-subtitle">
                                        Задача организации, в особенности же новая модель организационной...
                                    </div>
                                    <button class="news-content-btn">
                                        <p>14.07.2024</p>
                                    </button>
                                </div>
                                <div class="news-content">
                                    <a href="news.html"><img src="./img/news/news.svg" alt=""></a>

                                    <h6 class="news-content-title">
                                        Название новости
                                    </h6>
                                    <div class="news-content-subtitle">
                                        Задача организации, в особенности же новая модель организационной...
                                    </div>
                                    <button class="news-content-btn">
                                        <p>14.07.2024</p>
                                    </button>
                                </div>
                                <div class="news-content">
                                    <a href="news.html"><img src="./img/news/news.svg" alt=""></a>

                                    <h6 class="news-content-title">
                                        Название новости
                                    </h6>
                                    <div class="news-content-subtitle">
                                        Задача организации, в особенности же новая модель организационной...
                                    </div>
                                    <button class="news-content-btn">
                                        <p>14.07.2024</p>
                                    </button>
                                </div>
                                <div class="news-content">
                                    <a href="news.html"><img src="./img/news/news.svg" alt=""></a>

                                    <h6 class="news-content-title">
                                        Название новости
                                    </h6>
                                    <div class="news-content-subtitle">
                                        Задача организации, в особенности же новая модель организационной...
                                    </div>
                                    <button class="news-content-btn">
                                        <p>14.07.2024</p>
                                    </button>
                                </div>
                                <div class="news-content">
                                    <a href="news.html"><img src="./img/news/news.svg" alt=""></a>

                                    <h6 class="news-content-title">
                                        Название новости
                                    </h6>
                                    <div class="news-content-subtitle">
                                        Задача организации, в особенности же новая модель организационной...
                                    </div>
                                    <button class="news-content-btn">
                                        <p>14.07.2024</p>
                                    </button>
                                </div>
                                <div class="news-content">
                                    <a href="news.html"><img src="./img/news/news.svg" alt=""></a>

                                    <h6 class="news-content-title">
                                        Название новости
                                    </h6>
                                    <div class="news-content-subtitle">
                                        Задача организации, в особенности же новая модель организационной...
                                    </div>
                                    <button class="news-content-btn">
                                        <p>14.07.2024</p>
                                    </button>
                                </div>
                                <div class="news-content">
                                    <a href="news.html"><img src="./img/news/news.svg" alt=""></a>

                                    <h6 class="news-content-title">
                                        Название новости
                                    </h6>
                                    <div class="news-content-subtitle">
                                        Задача организации, в особенности же новая модель организационной...
                                    </div>
                                    <button class="news-content-btn">
                                        <p>14.07.2024</p>
                                    </button>
                                </div>
                            </div>
                            <button class="show-more-btn blue-btn">Смотреть больше</button>
                        </div>
                        <template id="news-template">
                            <div class="news-content">
                                <a href="news.html"><img src="./img/news/news.svg" alt=""></a>

                                <h6 class="news-content-title">
                                    Название новости
                                </h6>
                                <div class="news-content-subtitle">
                                    Задача организации, в особенности же новая модель организационной...
                                </div>
                                <button class="news-content-btn">
                                    <p>14.07.2024</p>
                                </button>
                            </div>
                        </template>
                    </div>
                </div>
                <div class="licenses-tabs-block" id="tabs-5">
                    <div class="licenses">
                        <div class="container">
                            <h2 class="licenses-title">
                                Работаем по стандартам
                            </h2>
                            <div class="licenses-text">
                                <p>А также сторонники тоталитаризма в науке, которые представляют собой яркий пример
                                    континентально-европейского типа политической культуры, будут разоблачены. Есть над
                                    чем
                                    задуматься:
                                    стремящиеся вытеснить традиционное производство, нанотехнологии, вне зависимости от
                                    их уровня,
                                    должны
                                    быть
                                    призваны к ответу.</p>
                            </div>
                            <div class="licenses-slider">
                                <div class="swiper mySwiperLicenses">
                                    <div class="swiper-wrapper swiper-wrapper-slide-licenses">
                                        <div class="swiper-slide swiper-slide-licenses">
                                        </div>
                                        <div class="swiper-slide swiper-slide-licenses">
                                        </div>
                                        <div class="swiper-slide swiper-slide-licenses">
                                        </div>
                                        <div class="swiper-slide swiper-slide-licenses">
                                        </div>
                                        <div class="swiper-slide swiper-slide-licenses">
                                        </div>
                                        <div class="swiper-slide swiper-slide-licenses">
                                        </div>
                                        <div class="swiper-slide swiper-slide-licenses">
                                        </div>
                                        <div class="swiper-slide swiper-slide-licenses">
                                        </div>
                                        <div class="swiper-slide swiper-slide-licenses">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-button-next swiper-button-next-project"></div>
                                <div class="swiper-button-prev swiper-button-prev-project"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <?php require_once "block/footer.php"; ?>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://code.jquery.com/ui/1.14.0/jquery-ui.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script defer src="./js/company.js"></script>
    <script defer src="./js/base.js"></script>

</body>

</html>