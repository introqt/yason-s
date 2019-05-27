/* eslint-disable no-unused-vars */
function scrollFunction() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    document.getElementById('myBtn').style.display = 'block';
  } else {
    document.getElementById('myBtn').style.display = 'none';
  }
}

window.onscroll = () => scrollFunction();

function up() {
  const top = Math.max(document.body.scrollTop,
      document.documentElement.scrollTop);
  let t;
  if (top > 0) {
    window.scrollBy(0, ((top + 100) / -10));
    // eslint-disable-next-line no-implied-eval
    t = setTimeout('up()', 20);
  } else clearTimeout(t);
  return false;
}

// Smooth scrolling
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
  anchor.addEventListener('click', function scroll(e) {
    e.preventDefault();

    document.querySelector(this.getAttribute('href')).scrollIntoView({
      behavior: 'smooth',
    });
  });
});

// grayscale off on hover
const grayscalesList = document.getElementsByClassName('grayscale');
[].forEach.call(grayscalesList, (el) => {
  el.addEventListener('mouseover', () => {
    el.classList.remove('grayscale');
  });

  el.addEventListener('mouseout', () => {
    el.classList.add('grayscale');
  });
});

$('#send-order-button').click(() => {
  $.ajax({
    url: '/send-order',
    type: 'POST',
    data: $('#contact-us-form').serialize(),
    success: (result) => {
      $('#contact-us-form')[0].reset();

      if (!result.errors) {
        Swal.fire({
          title: 'Успешно!',
          text: 'Мы получили Ваш заказ!',
          type: 'success',
        });
      }
    },
    error: () => {
      Swal.fire({
        title: 'Заполните форму!',
        text: 'Поля Email и Тема обязательны к заполнению!',
        type: 'error',
      });
    },
  });
});
