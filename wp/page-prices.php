<?php
    // Template Name: Prices Page
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('stylesheet_directory'); ?>/favicon/apple-touch-icon.png?v=2">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('stylesheet_directory'); ?>/favicon/favicon-32x32.png?v=2">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('stylesheet_directory'); ?>/favicon/favicon-16x16.png?v=2">
    <link rel="manifest" href="<?php bloginfo('stylesheet_directory'); ?>/favicon/manifest.json">
    <link rel="mask-icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon/favicon.ico?v=2">
    <meta name="msapplication-config" content="<?php bloginfo('stylesheet_directory'); ?>/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&amp;amp;subset=cyrillic,cyrillic-ext" rel="stylesheet">

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

    <title>
        <?php bloginfo('name'); ?>
    </title>

    <?php
        wp_head();
    ?>
</head>

<body>
    <header class="site-header site-header--inner">
        <div class="vert-title">Price Magnum Barbershop</div>
        <nav class="main-nav">
            <div class="wrapper">
                <a class="logo" href="<?php echo esc_url(home_url('')); ?>">
                    <img class="logo__color" src="<?php bloginfo('stylesheet_directory'); ?>/img/logo-h.svg">
                    <img class="logo__white" src="<?php bloginfo('stylesheet_directory'); ?>/img/logo-h-white.svg">
                </a>

                <div class="main-nav__menu-icon">
                    <div class="main-nav__menu-icon__middle"></div>
                </div>

                <div class="main-menu">
                    <ul class="main-menu__list">
                        <li><a href="<?php echo esc_url(home_url('')); ?>#about">О нас</a></li>
                        <li><a href="<?php echo esc_url(home_url('')); ?>#services">Услуги</a></li>
                        <li><a href="<?php echo esc_url(home_url('')); ?>#promos">Акции</a></li>
                        <li><a href="<?php echo esc_url(home_url('')); ?>#prices">Прайс</a></li>
                        <li><a href="<?php echo esc_url(home_url('')); ?>#team">Команда</a></li>
                        <li><a href="<?php echo esc_url(home_url('')); ?>#contacts">Контакты</a></li>
                    </ul>
                </div>

                <div class="main-nav__button">
                    <!--<a class="button button--blue" href="tel:+79878221223">+7 987 822-12-23</a>-->
                    <a class="button button--blue ms_booking" href="#">Онлайн запись</a>
                </div>
            </div>
        </nav>

        <div class="hero hero--simple">
            <h1 class="hero__title">Добро пожаловать в Magnum</h1>
            <p class="hero__motto">Прайс-лист<br> на услуги</p>
        </div>
    </header>

    <section class="sub-hero">
        <div class="wrapper">
            <h2 class="sub-hero__title">Барбершоп<br> <strong>Magnum</strong></h2>
            <p class="sub-hero__subtitle">По-настоящему<br> мужские стрижки</p>

            <div class="sub-hero__button">
                <!--<a class="button button--blue" href="tel:+79878221223">+7 987 822-12-23</a>-->
                <a class="button button--blue ms_booking" href="#">Онлайн запись</a>
            </div>
        </div>
    </section>
    <div class="wrapper">
        <section class="price-section price-section--right">
            <header class="price-section__header">
                <h2 class="price-section__title">Комплекс услуг</h2>
                <p class="price-section__subtitle">Хотите полностью изменить образ или привести в порядок уже сформировавшийся? Тогда вам несомненно подойдут
                    наши комплексные услуги.</p>
            </header>
            <div class="price-section__image"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/price/price-deco-1.jpg"></div>
            <table class="price-section__table">
                <tr>
                    <td>Стрижка + Стрижка бороды</td>
                    <td>1400</td>
                </tr>
                <tr>
                    <td>Стрижка + Опасное бритьё</td>
                    <td>1900</td>
                </tr>
                <tr>
                    <td>Стрижка машинкой + Стрижка бороды</td>
                    <td>900</td>
                </tr>
                <tr>
                    <td>Стрижка друг + друг</td>
                    <td>1900</td>
                </tr>
                <tr>
                    <td>Стрижка бороды + Бритье головы</td>
                    <td>1400</td>
                </tr>
            </table>
        </section>
        <section class="price-section">
            <header class="price-section__header"><a id="haircut"></a>
                <h2 class="price-section__title">Стрижки</h2>
                <p class="price-section__subtitle">Подбор стрижки по форме лица, структуре волос, образцам фото. Работа машинкой, ножницами, триммером, подбривание
                    шеи и висков. Удаление лишних волос из ушей, носа. Мытье головы (при необходимости до и после стрижки),
                    укладка профессиональными средствами.</p>
            </header>
            <div class="price-section__image"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/price/price-deco-2.jpg"></div>
            <table class="price-section__table">
                <tr>
                    <td>Мужская стрижка</td>
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
                    <td>500</td>
                </tr>
                <tr>
                    <td>Укладка волос</td>
                    <td>300</td>
                </tr>
                <tr>
                    <td>Камуфляж седины</td>
                    <td>1000</td>
                </tr>
            </table>
        </section>
        <section class="price-section price-section--right price-section--last"><a id="beard"></a><a id="shave"></a>
            <header class="price-section__header">
                <h2 class="price-section__title">Борода и&nbsp;бритье</h2>
                <p class="price-section__subtitle">Статусная услуга для настоящих мужчин и целый ритуал.</p>
            </header>
            <div class="price-section__image"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/price/price-deco-3.jpg"></div>
            <table class="price-section__table">
                <tr>
                    <td>Капремонт бороды</td>
                    <td>600</td>
                </tr>
                <tr>
                    <td>Камуфляж бороды</td>
                    <td>600</td>
                </tr>
                <tr>
                    <td>Опасное бритье</td>
                    <td>1100</td>
                </tr>
                <tr>
                    <td>Бритье головы</td>
                    <td>1100</td>
                </tr>
                <tr>
                    <td>Стрижка усов</td>
                    <td>300</td>
                </tr>
            </table>
        </section>
    </div>
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
            <div class="partners__content partners__content--full"><a class="partner" href="http://barberwild.com/"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/partners/plogo-4.png"></a><a class="partner"
                    href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/partners/plogo-1.png"></a><a class="partner" href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/partners/plogo-2.png"></a>
                <a
                    class="partner" href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/partners/plogo-3.png"></a>
            </div>
        </div>
    </section>

    <!--
        Footer
    -->
    <footer class="site-footer">
        <div class="wrapper">
            <div class="site-footer__logo-n-socials">
                <div class="site-footer__logo"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo-h-white.svg"></div>
                <div class="site-footer__socials">
                    <div class="socials">
                        <h3 class="socials__title">Мы в социальных сетях</h3>
                        <div class="socials__content">
                            <a class="social-icon ico-vkontakte" href="https://vk.com/magnum_barbershop">VKontakte</a>
                            <a class="social-icon ico-instagram" href="https://www.instagram.com/magnum_barbershop/">Instagram</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-footer__copyrights">© Все права сохранены</div>
        </div>
    </footer>

    <script type="text/javascript" src="https://w68025.yclients.com/widgetJS" charset="UTF-8"></script>
    <!--<script src="<?php bloginfo('stylesheet_directory'); ?>/scripts/app.js"></script>-->

    <?php
        wp_footer();
    ?>
</body>

</html>