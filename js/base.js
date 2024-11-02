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