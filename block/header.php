<div class="header open header-normal" id="header">
    <main class="container">
        <div class="header-inner header-inner-normal">
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
                            <button class="header-menu-contact-link" id="openRegistrationModalBtn">
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

<div id="registrationModal" class="modal">
  <div class="modal-content">
    <span class="close" onclick="closeModal()">&times;</span>
    <h2>Регистрация</h2>
    <form id="registrationForm">
      <div>
        <label for="name">Имя:</label>
        <input type="text" id="name" name="name" required>
        <span id="nameError" class="error"></span>
      </div>
      <div>
        <label for="phone">Телефон:</label>
        <input type="tel" id="phone" name="phone" required>
        <span id="phoneError" class="error"></span>
      </div>
      <div>
        <input type="checkbox" id="privacyPolicy" name="privacyPolicy" required>
        <label for="privacyPolicy">Я согласен с обработкой персональных данных</label>
        <span id="privacyPolicyError" class="error"></span>
      </div>
      <button type="submit">Зарегистрироваться</button>
    </form>
  </div>
</div>

<div id="successModal" class="modal">
  <div class="modal-content">
    <span class="close" onclick="closeSuccessModal()">&times;</span>
    <h2>Форма отправлена!</h2>
    <p>Спасибо за заявку! Мы свяжемся с вами в ближайшее время.</p>
  </div>
</div>
</div>