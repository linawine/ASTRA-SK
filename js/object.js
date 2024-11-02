const listItems = document.querySelectorAll('.company-object__item');
const objectItems = document.querySelectorAll('.swiper-slide-project');
const showMoreBtn = document.querySelector('.show-more-btn');
const objectTemplate = document.getElementById('object-Template').content;
const objectGrid = document.querySelector('.object-grid');

// Фильтрация элементов
listItems.forEach(listItem => {
  listItem.addEventListener('click', () => {
    const filter = listItem.dataset.filter;

    // Удаление активного класса у всех элементов списка
    listItems.forEach(item => item.classList.remove('active'));

    // Добавление активного класса к выбранному элементу списка
    listItem.classList.add('active');

    // Фильтрация элементов по выбранному фильтру
    objectItems.forEach(objectItem => {
      if (filter === 'all') {
        objectItem.style.display = 'block';
      } else if (objectItem.classList.contains(filter)) {
        objectItem.style.display = 'block';
      } else {
        objectItem.style.display = 'none';
      }
    });
  });
});

// Кнопка "Показать больше"
let showMoreCount = 1; // Количество элементов для показа
showMoreBtn.addEventListener('click', () => {
  showMoreCount += 1;

  // Клонирование шаблона и добавление в DOM
  for (let i = 0; i < 1; i++) {
    const objectClone = objectTemplate.cloneNode(true);
    objectGrid.appendChild(objectClone);
  }

  // Обновление количества элементов
  objectItems = document.querySelectorAll('.swiper-slide-project');

  // Скрытие кнопки, если все элементы показаны
  if (showMoreCount >= objectItems.length) {
    showMoreBtn.style.display = 'none';
  }
});

// Изначально показываем только 3 элемента
for (let i = 9; i < objectItems.length; i++) {
  objectItems[i].style.display = 'none';
}