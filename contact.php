<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ASTRA-SK</title>
    <link rel="stylesheet" href="./css/reset.css" />
    <link rel="stylesheet" href="./css/contact.css" />
    <link rel="stylesheet" href="./css/base.css" />
</head>

<body>
    <?php require_once "block/header.php"; ?>

    <div class="contact">
        <div class="container">
            <div class="location-str">
                <div class="location-str-base">
                    <a href="index.html">Главная</a>
                </div>
                <div class="location-str-accent">
                    <a href="contact.html">Контакты</a>
                </div>
            </div>
            <h2 class="contact-title">
                Контакты
            </h2>
            <div class="contact-wrapper">
                <div class="contact-info">
                    <div class="contact-info-card">
                        <h6 class="contact-info-title">
                            Звоните
                        </h6>
                        <a href="tel:+79195698988" class="contact-info-link">+7 (919) 569-89-88</a>
                    </div>
                    <div class="contact-info-card">
                        <h6 class="contact-info-title">
                            Шлите письма
                        </h6>
                        <a href="mailto:zsmstroika@mail.ru" class="contact-info-link">zsmstroika@mail.ru</a>
                    </div>
                    <div class="contact-info-card">
                        <h6 class="contact-info-title">
                            Пишите в мессенджер
                        </h6>
                        <a href="#" class="contact-info-link">ссылка на тг</a>
                    </div>
                    <div class="contact-info-card">
                        <h6 class="contact-info-title">
                            Следите за нами
                        </h6>
                        <button href="#" class="contact-info-btn">Новости</button>
                    </div>
                </div>
                <div class="contact-map">
                    <div class="contact-map-img">
                    </div>
                    <div class="contact-map-selector">
                        <div class="day-selector">
                            <span class="work">Заходите</span>
                            <span class="today" data-day="Сегодня">Сегодня</span>
                            <div class="dropdown-image"> <img src="./img/contact/Vector.png" alt="Изображение"></div>
                            <span class="work-hours" data-hours="с 09:00 до 18:00">с 09:00 до 18:00</span>
                            <ul class="dropdown-menu">
                                <li data-day="Понедельник" data-hours="с 09:00 до 18:00">Понедельник</li>
                                <li data-day="Вторник" data-hours="с 09:00 до 18:00">Вторник</li>
                                <li data-day="Среда" data-hours="с 09:00 до 18:00">Среда</li>
                                <li data-day="Четверг" data-hours="с 09:00 до 18:00">Четверг</li>
                                <li data-day="Пятница" data-hours="с 09:00 до 18:00">Пятница</li>
                                <li data-day="Суббота" data-hours="Выходной">Суббота</li>
                                <li data-day="Воскресенье" data-hours="Выходной">Воскресенье</li>
                            </ul>

                            <div class="contact-map-selector-adress">
                                Курган, Куйбышева 36, офис 402
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="requisites">
        <div class="container">
            <h2 class="requisites-title">
                Реквизиты
            </h2>
            <div class="requisites-wrapper">
                <div class="requisites-block-title">
                    <div class="requisites-block-title-text left">
                        <p>
                            Вы можете <a href="#" download>скачать карточку предприятия</a> или посмотреть все
                            необходимые
                            реквизиты
                        </p>
                    </div>
                    <button class="img-open" data-toggle-id="su">
                        <img src="./img/contact/open.png" alt="Toggle">
                    </button>
                </div>

                <div class="requisites-block hidden" id="su" style="display: none;">
                    <div class="block">
                        <div class="block-div left">Наименование организации</div>
                        <div class="block-div right">ООО "АСТРА-СК"</div>
                    </div>
                    <div class="block">
                        <div class="block-div left">Юридический адрес</div>
                        <div class="block-div right">640004,
                            обл. Курганская,
                            г. Курган,
                            ул. Чехова, д. 5</div>
                    </div>
                    <div class="block">
                        <div class="block-div left">ИНН / КПП</div>
                        <div class="block-div right">4501202936 / 450101001</div>
                    </div>
                    <div class="block">
                        <div class="block-div left">ОГРН</div>
                        <div class="block-div right">1154501005251</div>
                    </div>
                    <div class="block">
                        <div class="block-div left">ОКПО</div>
                        <div class="block-div right">11064049</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.onclick = function (event) {
            var target = event.target;
            // Проверяем, является ли клик по изображению
            if (target.tagName === 'IMG') {
                target = target.parentNode; // Получаем родительский элемент (кнопку)
            }

            var id = target.getAttribute('data-toggle-id');
            if (!id) return; // Если атрибут отсутствует, выходим

            var elem = document.getElementById(id);
            if (elem) {
                // Переключаем видимость элемента
                if (elem.style.display === 'none' || elem.style.display === '') {
                    elem.style.display = 'block'; // Показываем элемент
                } else {
                    elem.style.display = 'none'; // Скрываем элемент
                }
            }
        };
    </script>


    <?php require_once "block/footer.php"; ?>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://code.jquery.com/ui/1.14.0/jquery-ui.js"></script>
    <script defer src="./js/contact.js"></script>
    <script defer src="./js/base.js"></script>
</body>

</html>