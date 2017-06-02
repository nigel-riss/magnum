<?php
    // Template Name: Home Page
?>

    <!DOCTYPE html>
    <html lang="ru">

    </html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&amp;amp;subset=cyrillic,cyrillic-ext" rel="stylesheet">

        <link rel="stylesheet" href="styles.css">
        
        <title>
            <?php bloginfo('name'); ?>
        </title>
</head>

<body>
  <header class="site-header">
    <nav class="main-nav">
      <div class="wrapper">
        <div class="logo"> <img class="logo__color" src="./img/logo-h.svg"><img class="logo__white" src="./img/logo-h-white.svg"></div>
        <div class="main-nav__menu-icon">
          <div class="main-nav__menu-icon__middle"></div>
        </div>
        <div class="main-menu">
          <ul class="main-menu__list">
            <li><a href="#about">О нас</a></li>
            <li><a href="#services">Услуги</a></li>
            <li><a href="#promos">Акции</a></li>
            <li><a href="#prices">Прайс</a></li>
            <li><a href="#contacts">Контакты</a></li>
          </ul>
        </div>
        <div class="main-nav__button"><a class="button button--blue" href="tel:+79878221223">+7 987 822-12-23</a></div>
      </div>
    </nav>
    <div class="hero">
      <h1 class="hero__title">Добро пожаловать в Magnum</h1>
      <p class="hero__motto">По-настоящему<br> мужские Стрижки</p>
      <div class="hero__buttons"><a class="button button--mr-20" href="tel:+79878221223">+7 987 822-12-23</a></div>
      <div class="vert-title">Magnum Barbershop</div>
    </div>
    <nav class="scroll-spy">
      <ul class="scroll-spy__list">
        <li><a class="scroll-spy__link" id="about-link" data-label="О&nbsp;нас" href="#about">О&amp;nbsp;нас</a></li>
        <li><a class="scroll-spy__link" id="services-link" data-label="Услуги" href="#services">Услуги</a></li>
        <li><a class="scroll-spy__link" id="promos-link" data-label="Акции" href="#promos">Акции</a></li>
        <li><a class="scroll-spy__link" id="prices-link" data-label="Прайс" href="#prices">Прайс</a></li>
        <li><a class="scroll-spy__link" id="contacts-link" data-label="Контакты" href="#contacts">Контакты</a></li>
      </ul>
    </nav>
  </header>
  <section class="about">
    <div class="wrapper"><a class="nav-link" id="about"></a>
      <div class="about__hero">
        <p class="about__hero-title">Уютный интерьер, профессиональное оборудование и инструмент, бесплатный WiFi и кофе, но главное это по-настоящему мужские стрижки.</p>
        <p class="about__hero-description">Мы действительно знаем толк в мужских стрижках и «ремонте» бороды. Предлагаем тебе попробовать настоящее бритье. Приходи и убедись сам.</p>
        <p class="about__hero-description">Стрижка - это в какой-то степени отражение твоей индивидуальности. Она может рассказать несколько занятных фактов о стиле, характере, образе жизни. Мы поможем подобрать идеальную стрижку, которая подойдет именно тебе.</p>
        <div class="vert-title">About Magnum Barbershop</div>
      </div>
      <div class="about__content">
        <header class="about__header">
          <h2 class="about__title">Барбершоп<br> <strong>Magnum</strong></h2>
          <p class="about__subtitle">Барбершоп Magnum — лучшая в Саратове парикмахерская для мужчин. </p>
        </header>
        <div class="about__features">
                    <div class="feature">
                      <h3 class="feature__title">Отличная команда</h3>
                      <p class="feature__text">Команда профессиональных мастеров под руководством шеф-мастера.</p>
                    </div>
                    <div class="feature">
                      <h3 class="feature__title">Угощаем</h3>
                      <p class="feature__text">Тебе обязательно предложат чашечку свежемолотого кофе или бокал виски.</p>
                    </div>
                    <div class="feature">
                      <h3 class="feature__title">Развлекаем</h3>
                      <p class="feature__text">Время ожидания не будет скучным, WiFi и PlayStation в твоем распоряжении!</p>
                    </div>
        </div>
      </div>
    </div>
  </section>
  <section class="services">
    <div class="wrapper"><a class="nav-link" id="services"></a>
      <div class="services__hero">
        <h2 class="services__title">Услуги<br> <strong>барбершопа</strong></h2>
        <div class="vert-title vert-title--right">Services Magnum Barbershop</div>
      </div>
      <div class="services__content"><a class="service" href="price.html#haircut">
                  <div class="service__image"><img src="./img/haircut-srv.jpg"></div>
                  <div class="service__content">
                    <div class="service__icon">
                      <div class="icon icon-scissors"></div>
                    </div>
                    <h3 class="service__title">Стрижки</h3>
                    <p class="service__subtitle">Мужские и детские</p>
                  </div></a><a class="service" href="price.html#shave">
                  <div class="service__image"><img src="./img/shaving-srv.jpg"></div>
                  <div class="service__content">
                    <div class="service__icon">
                      <div class="icon icon-blade"></div>
                    </div>
                    <h3 class="service__title">Бритьё</h3>
                    <p class="service__subtitle">Классическое и Королевское</p>
                  </div></a><br><a class="service" href="price.html#beard">
                  <div class="service__image"><img src="./img/beard-srv.jpg"></div>
                  <div class="service__content">
                    <div class="service__icon">
                      <div class="icon icon-razor"></div>
                    </div>
                    <h3 class="service__title">Борода</h3>
                    <p class="service__subtitle">Стрижка и окрашивание</p>
                  </div></a><a class="service" href="price.html#tatoo">
                  <div class="service__image"><img src="./img/tatoo-srv.jpg"></div>
                  <div class="service__content">
                    <div class="service__icon">
                      <div class="icon icon-tatoo-machine"></div>
                    </div>
                    <h3 class="service__title">Татуировки</h3>
                    <p class="service__subtitle">Любой сложности</p>
                  </div></a>
      </div>
    </div>
  </section>
  <section class="promos">
    <div class="wrapper"><a class="nav-link" id="promos"></a>
      <header class="promos__header">
        <h2 class="promos__title">Наши<br> <strong>акции</strong></h2>
      </header>
      <div class="promos__content"> 
                <div class="promo-item">
                  <h3 class="promo-item__title">Первым 100 <br> клиентам</h3>
                  <p class="promo-item__subtitle">карта постоянного клиента с 10% скидкой</p>
                  <div class="promo-item__image"><img src="./img/promos/promo-1.jpg"></div>
                  <div class="promo-item__hover"><img src="./img/promos/promo-1-h.jpg"></div>
                </div>
                <div class="promo-item">
                  <h3 class="promo-item__title">Каждая 5 мужская стрижка <br> в подарок</h3>
                  <p class="promo-item__subtitle"></p>
                  <div class="promo-item__image"><img src="./img/promos/promo-2.jpg"></div>
                  <div class="promo-item__hover"><img src="./img/promos/promo-2-h.jpg"></div>
                </div>
                <div class="promo-item">
                  <h3 class="promo-item__title">10 посещений <br> (любые услуги)</h3>
                  <p class="promo-item__subtitle">карта постоянного клиента с 10% скидкой</p>
                  <div class="promo-item__image"><img src="./img/promos/promo-3.jpg"></div>
                  <div class="promo-item__hover"><img src="./img/promos/promo-3-h.jpg"></div>
                </div>
                <div class="promo-item">
                  <h3 class="promo-item__title">Скидка 20% <br> выпускникам</h3>
                  <p class="promo-item__subtitle">на любые услуги <br> (1 посещение)</p>
                  <div class="promo-item__image"><img src="./img/promos/promo-4.jpg"></div>
                  <div class="promo-item__hover"><img src="./img/promos/promo-4-h.jpg"></div>
                </div>
      </div>
    </div>
  </section>
  <section class="check-in">
    <div class="wrapper"><a class="button" href="tel:+79878221223">+7 987 822-12-23</a>
      <header class="check-in__header">
        <div class="check-in__title">мужская территория </div>
        <div class="check-in__subtitle">Ждем тебя в Magnum</div>
      </header>
    </div>
  </section>
  <section class="partners">
    <div class="wrapper">
      <header class="partners__header">
        <h2 class="partners__title">Наши<br> <strong>партнеры</strong></h2>
      </header>
      <div class="partners__content"><a class="partner" href="http://barberwild.com/"><img src="./img/partners/plogo-4.png"></a><a class="partner" href="#"><img src="./img/partners/plogo-1.png"></a><a class="partner" href="#"><img src="./img/partners/plogo-2.png"></a><a class="partner" href="#"><img src="./img/partners/plogo-3.png"></a>
      </div>
    </div>
  </section>
  <section class="prices">
    <div class="wrapper"><a class="nav-link" id="prices"></a>
      <header class="prices__header">
        <div class="prices__header-wrapper">
          <h2 class="prices__title"><strong>Прайс</strong></h2>
          <p class="prices__subtitle">Список наиболее популярных услуг нашего барбершопа</p>
        </div>
        <div class="prices__button"><a class="button button--blue" href="price.html">Полный Прайс</a></div>
      </header>
      <div class="prices__content">
        <div class="vert-title vert-title--right">Prices Magnum Barbershop</div>
        <table>
          <caption>Комплексы</caption>
          <tr>
            <td>Стрижка + Стрижка бороды</td>
            <td>1400</td>
          </tr>
          <tr>
            <td>Стрижка + Опасное бритьё</td>
            <td>2000</td>
          </tr>
        </table>
        <table>
          <caption>Голова</caption>
          <tr>
            <td>Стрижка мужская</td>
            <td>1100</td>
          </tr>
          <tr>
            <td>Детская стрижка (до 12 лет)</td>
            <td>800</td>
          </tr>
          <tr>
            <td>Стрижка папа + сын</td>
            <td>1600</td>
          </tr>
          <tr>
            <td>Стрижка под машинку</td>
            <td>800</td>
          </tr>
        </table>
        <table>
          <caption>Борода</caption>
          <tr>
            <td>Стрижка бороды</td>
            <td>500</td>
          </tr>
          <tr>
            <td>Камуфляж бороды</td>
            <td>600</td>
          </tr>
        </table>
        <table>
          <caption>Бритьё</caption>
          <tr>
            <td>Опасное бритьё</td>
            <td>1100</td>
          </tr>
          <tr>
            <td>Бритьё головы</td>
            <td>1100</td>
          </tr>
        </table>
      </div>
    </div>
  </section>
  <section class="contacts">
    <div class="wrapper"><a class="nav-link" id="contacts"></a>
      <header class="contacts__header">
        <h2 class="contacts__title">Наши<br> <strong>контакты</strong></h2>
      </header>
      <div class="contacts__content">
        <div class="vert-title vert-title--right vert-title--blue">Contacts Magnum Barbershop</div>
        <div class="contacts__text">По всем интересующим вопросам ты можешь обратиться к меденежеру по телефону или оправить письмо на электронный адрес.<br> <strong> До встречи в MAGNUM</strong></div>
        <div class="contact">
          <h3 class="contact__title">Телефоны</h3>
          <div class="contact__text"><a href="tel:+78452577737">+7 8452 57-77-37 <br></a><a href="tel:+79878221223">+7 987 822-12-23</a></div>
        </div>
        <div class="contact">
          <h3 class="contact__title">Электропочта</h3>
          <div class="contact__text"><a href="mailto:info@barbershopmagnum.ru">info@barbershopmagnum.ru</a></div>
        </div>
        <div class="contact">
          <h3 class="contact__title">Адрес</h3>
          <div class="contact__text">г. Саратов, ул. Яблочкова, 8/10</div>
        </div>
      </div>
      <div class="contacts__map" id="map"></div>
    </div>
  </section>
  <footer class="site-footer">
    <div class="wrapper">
      <div class="site-footer__logo-n-socials">
        <div class="site-footer__logo"><img src="./img/logo-h-white.svg"></div>
        <div class="site-footer__socials">
          <div class="socials">
            <h3 class="socials__title">Мы в социальных сетях</h3>
            <div class="socials__content"><a class="social-icon ico-vkontakte" href="https://vk.com/magnum_barbershop">VKontakte</a><a class="social-icon ico-instagram" href="https://www.instagram.com/magnum_barbershop/">Instagram</a></div>
          </div>
        </div>
      </div>
      <div class="site-footer__copyrights">© Все права сохранены</div>
    </div>
  </footer>
  <script src="./scripts/map.js"></script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyClofSbCu6EYSgaWdfCK5G1i_eUXgL4RCk&amp;callback=initMap"></script>
  <script src="./scripts/app.js"></script>
</body>