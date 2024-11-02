document.addEventListener('DOMContentLoaded', () => {
    const todayElement = document.querySelector('.today');
    const workHoursElement = document.querySelector('.work-hours');
    const dropdownMenu = document.querySelector('.dropdown-menu');
    const dropdownItems = dropdownMenu.querySelectorAll('li');
    const dropdownImage = document.querySelector('.dropdown-image');

    // Обработка клика по элементам меню
    dropdownItems.forEach(item => {
        item.addEventListener('click', () => {
            const selectedDay = item.dataset.day;
            const selectedHours = item.dataset.hours;
            todayElement.textContent = selectedDay;
            todayElement.dataset.day = selectedDay;
            workHoursElement.textContent = selectedHours;
            workHoursElement.dataset.hours = selectedHours;
            dropdownMenu.style.display = 'none'; // Скрываем меню после выбора 
        });
    });

    // Показ меню при наведении
    dropdownImage.addEventListener('mouseover', () => {
        dropdownMenu.style.display = 'block';
    });

    // Скрытие меню при отпускании кнопки мыши
    document.addEventListener('mouseup', (event) => { 
        if (!dropdownImage.contains(event.target) && !dropdownMenu.contains(event.target)) {
            dropdownMenu.style.display = 'none'; // Скрываем меню
        }
    });
});