/ Бургер меню /

document.addEventListener("DOMContentLoaded", function () {
  document.querySelector("#burger").addEventListener("click", function () {
    let header = document.querySelector("#header");
    if (header.classList.contains('open')) {
      header.classList.remove('open');
    } else {
      header.classList.add('open');
    };
  });
});

/ Табуляция /

$(function () {
  $("#tabs").tabs();
});

$("#tabs li a").click(function () {
  var index = $(this).parent().index(); // Получаем индекс заголовка
  $("#tabs ul").prepend($(this).closest("li")); // Перемещаем заголовок в начало списка
  $("#tabs").tabs("option", "active", index); // Активируем вкладку с этим заголовком
});

document.addEventListener('DOMContentLoaded', () => {
  const openRegistrationModalBtn = document.getElementById('openRegistrationModalBtn');
  const registrationModal = document.getElementById('registrationModal');
  const closeModalBtn = document.querySelector('.close', registrationModal);
  const registrationForm = document.getElementById('registrationForm');
  const nameInput = document.getElementById('name');
  const phoneInput = document.getElementById('phone');
  const privacyPolicyCheckbox = document.getElementById('privacyPolicy');
  const nameError = document.getElementById('nameError');
  const phoneError = document.getElementById('phoneError');
  const privacyPolicyError = document.getElementById('privacyPolicyError');
  const successModal = document.getElementById('successModal');

  // Открытие модального окна
  openRegistrationModalBtn.addEventListener('click', () => {
    registrationModal.style.display = 'block';
  });

  // Закрытие модального окна
  closeModalBtn.addEventListener('click', () => {
    registrationModal.style.display = 'none';
  });

  // Закрытие модального окна success
  function closeSuccessModal() {
    successModal.style.display = 'none';
  }

  // Отправка формы
  registrationForm.addEventListener('submit', (event) => {
    event.preventDefault(); 

    // Валидация формы
    let isValid = true;

    // Проверка имени
    if (nameInput.value.trim() === '') {
      nameError.textContent = 'Введите имя';
      nameError.style.display = 'block';
      isValid = false;
    } else {
      nameError.style.display = 'none';
    }

    // Проверка телефона
    if (phoneInput.value.trim() === '') {
      phoneError.textContent = 'Введите номер телефона';
      phoneError.style.display = 'block';
      isValid = false;
    } else {
      phoneError.style.display = 'none';
    }

    // Проверка согласия
    if (!privacyPolicyCheckbox.checked) {
      privacyPolicyError.textContent = 'Согласитесь с обработкой данных';
      privacyPolicyError.style.display = 'block';
      isValid = false;
    } else {
      privacyPolicyError.style.display = 'none';
    }

    // Если форма валидна, отправляем данные на сервер
    if (isValid) {
      // Получаем данные из формы
      const formData = new FormData(registrationForm);

      // Отправляем данные формы (AJAX или другая технология)
      console.log('Отправляю данные формы:', formData);
      // ... код для отправки данных формы на сервер

      // Покажем модальное окно success
      registrationModal.style.display = 'none';
      successModal.style.display = 'block';
    }
  });
});
