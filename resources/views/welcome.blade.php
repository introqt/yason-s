<html lang="en">
<!doctype html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/png">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <title>Yason's</title>
</head>

<body>
<header class="text-white">
    <div class="container">
        <div class="row align-items-center justify-content-around  nav-section">
            <div class="logo col-2">
                <img class="img-fluid" src="{{ asset('images/logo.png') }}" /><i class="logo-text">YASON'S</i>
            </div>

            <nav class="col-8">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#why-we">О нас</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio">Портфолио</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#footer">Контакты</a>
                    </li>
                </ul>
            </nav>

            <div class="letter col-2">
                <a class="nav-link" href="#contact-us">&nbsp;</a>
            </div>
        </div>
    </div>
    <section class="container">
        <div class="row space-above">
            <div class="heading-block col-md-6 col-lg-8">
                <h1 class="heading">Yason's workshop</h1>
                <h2 class="subheading">Это опытная студия, которая состоит из профессиональных графических и видео
                    дизайнеров. Мы поможем вам реализовать ваши идеи и прекрасные решения.</h2>
            </div>
            <div class="heading-animated-images col-lg-4" data-aos="fade-left">
                <div class="cup">&nbsp;</div>
                <div class="laptop">&nbsp;</div>
            </div>
        </div>
        <div class="row">
            <button class="order-button">Оформить заказ</button>
        </div>
    </section>
</header>

<section class="bg-red">
    <div class="container">
        <div class="row why-we justify-content-center" id="why-we">
            <div class="col-lg-2 col-sm-3">
                <img src="{{ asset('images/planet.png') }}" alt="Why we" class="why-we--planet">
            </div>
            <div class="col-lg-4 col-sm-7">
                <h1 class="why-we--heading">Почему<br>именно мы?</h1>
            </div>
        </div>

        <div class="row pluses" data-aos="fade-up">
            <div class="col-4 pluses--block pluses--block-1">
                <h3 class="heading">Планирование работы</h3>
                <p class="text">Мы оптимально распределяем ресурсы для достижения ваших целей в кратчайшие сроки</p>
            </div>
            <div class="col-4 pluses--block pluses--block-2">
                <h3 class="heading">Лучшее качество</h3>
                <p class="text">Чтобы обеспечить наилучшее качество работы, мы используем современные методологии
                </p>
            </div>
            <div class="col-4 pluses--block pluses--block-3">
                <h3 class="heading">Доступные цены</h3>
                <p class="text">Для каждого проекта мы используем экономичные методы калькуляции затрат, что
                    обеспечивает максимально точную и прозрачную стоимость
                </p>
            </div>
        </div>

        <div class="row" style="position: relative;" data-aos="fade-up-left">
            <div class="col-4 offset-8 raketa">&nbsp;</div>
        </div>

        <div class="row portfolio" id="portfolio">
            <div class="portfolio-heading col-5">
                <h3 class="portfolio--heading">Наши работы</h3>
                <div class="portfolio--cosmonaute">&nbsp;</div>
            </div>
        </div>

        <div class="row portfolio-parts justify-content-between">
            <div class="portfolio-part col-4">
                <img src="{{ asset('images/portfolio/example1.png') }}" alt="Portfolio example"
                     class="portfolio-image grayscale">
            </div>
            <div class="portfolio-part col-4">
                <img src="{{ asset('images/portfolio/neorust.jpg') }}" alt="Portfolio example"
                     class="portfolio-image grayscale">
            </div>
            <div class="portfolio-part col-4">
                <img src="{{ asset('images/portfolio/example1.png') }}" alt="Portfolio example"
                     class="portfolio-image grayscale">
            </div>
            <div class="portfolio-part col-4">
                <img src="{{ asset('images/portfolio/example1.png') }}" alt="Portfolio example"
                     class="portfolio-image grayscale">
            </div>
            <div class="portfolio-part col-4">
                <img src="{{ asset('images/portfolio/example1.png') }}" alt="Portfolio example"
                     class="portfolio-image grayscale">
            </div>
            <div class="portfolio-part col-4">
                <img src="{{ asset('images/portfolio/example1.png') }}" alt="Portfolio example"
                     class="portfolio-image grayscale">
            </div>
        </div>

        <div class="row more-examples">
            <button class="more-examples-button">Оформить заказ</button>
        </div>
    </div>

    <div class="container socials">
        <a target="_blank" href="https://www.youtube.com/channel/UCZ0XQth9pMmHF5GTOktvnEA"
           class="youtube-white-border">
            <p><strong>Ищите нас в космосе<br>и на Youtube</strong></p>
            <div class="youtube-icon">
                <img src="{{ asset('images/youtube.png') }}" alt="Youtube" class="youtube-icon-image">
            </div>
            <div class="youtube-cosmonaute">
                <img src="{{ asset('images/cosmonaut2.png') }}" alt="Cosmonaute">
            </div>
        </a>
        <div class="vk-how">
            <p class="bluelarge">ИЛИ</p>
            <p>в других<br>социальных сетях</p>
            <a href="https://vk.com/webdesigns" data-fancybox="" class="large-blue-but"><img
                        src="{{ asset('images/vk_ico.png') }}" alt="Vk"></a>
        </div>
    </div>

    <div class="moon">&nbsp;</div>
    <div class="mars">&nbsp;</div>
</section>

<section class="bg-white" id="contact-us">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="contact-us--heading">Заинтересовали наши услуги?</h1>
            </div>
            <div class="col-6 quoute" data-aos="fade-left">
                <span class="curly-brace">{</span>
                <p class="quoute--frase">Мы предлагаем полный спектр<br>услуг по гибкому ценообразованию<br>и
                    превосходному обслуживанию</p>
                <span class="curly-brace">}</span>
            </div>
        </div>

        <form action="#">
            <div class="row">
                <div class="col-6">
                    <input type="text" placeholder="Ваше имя" required="required">
                </div>
                <div class="col-6">
                    <input type="email" placeholder="Адрес электронной почты" required="required">
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <input type="text" placeholder="Услуги" required="required">
                </div>
                <div class="col-6">
                    <input type="text" placeholder="Бюджет" required="required">
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <input type="text" placeholder="Тема" required="required">
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                        <textarea name="message" cols="30" rows="10" placeholder="Сообщение" class="form-textarea"
                                  required="required"></textarea>
                </div>
            </div>

            <button class="form-submit" type="submit">
                Отправить письмо
            </button>
        </form>
    </div>
</section>

<footer class="footer" id="footer">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-4 footer-contacts">
                <h4 class="footer-contacts--heading">Связь с нами:</h4>
                <a href="mailto:yasonsworkshop@gmail.com" class="footer-email-link">
                    <img src="{{ asset('images/letter.png') }}" alt="Email me"> yasonsworkshop@gmail.com</a>

                <a href="https://api.whatsapp.com/send?phone=380933515355" class="footer-whatsapp-link">
                    <img src="{{ asset('images/whatsapp.png') }}" alt="whatsapp">
                    What's App</a>
            </div>

            <div class="col-4 footer-logo">
                <a class="navbar-brand footer-logo-link" href="#">
                    <img src="{{ asset('images/footer-logo.png') }}" alt="Footer logo"
                         class="footer-logo-image"><i>yason's</i></a>
            </div>

            <div class="col-4">
                <nav class="nav footer-nav justify-content-between">
                    <a class="nav-link" href="#">Главная</a>
                    <a class="nav-link" href="#">О нас</a>
                    <a class="nav-link" href="#">Портфолио</a>
                </nav>

                <nav class="nav social-media-icons justify-content-around">
                    <li class="social-media-icons__item social-media-icons__item--vkontakte">
                        <a href="https://vk.com/webdesigns" target="_blank"></a>
                    </li>
                    <li class="social-media-icons__item social-media-icons__item--youtube">
                        <a href="https://www.youtube.com/channel/UCZ0XQth9pMmHF5GTOktvnEA" target="_blank"></a>
                    </li>
                    <li class="social-media-icons__item social-media-icons__item--instagram">
                        <a href="https://www.instagram.com/stop_looks" target="_blank"></a>
                    </li>
                    <li class="social-media-icons__item social-media-icons__item--facebook">
                        <a href="https://www.facebook.com/profile.php?id=100013709261309" target="_blank"></a>
                    </li>
                    <li class="social-media-icons__item social-media-icons__item--behance">
                        <a href="https://www.behance.net/yaroslove" target="_blank"></a>
                    </li>
                </nav>
            </div>
        </div>
    </div>
</footer>

<button onclick="up()" id="myBtn">↑</button>
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 800,
  });
</script>
</body>

</html>
