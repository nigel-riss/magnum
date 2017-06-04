<?php
    // Template Name: Home Page

    // About vars
    $about_title        = get_field('about-title');
    $about_text_1       = get_field('about-text-1');
    $about_text_2       = get_field('about-text-2');
    $about_text_3       = get_field('about-text-3');
    $feature_1          = get_field('feature-1');
    $feature_text_1     = get_field('feature-text-1');
    $feature_2          = get_field('feature-2');
    $feature_text_2     = get_field('feature-text-2');
    $feature_3          = get_field('feature-3');
    $feature_text_3     = get_field('feature-text-3');
    $feature_4          = get_field('feature-4');
    $feature_text_4     = get_field('feature-text-4');

    // Price vars
    $price_content      = get_field('price-content');

    // Contacts
    $phone_1            = get_field('phone-1');
    $phone_link_1       = get_field('phone-link-1');
    $phone_2            = get_field('phone-2');
    $phone_link_2       = get_field('phone-link-2');
    $e_mail             = get_field('e-mail');
    $address            = get_field('address');
    $latitude           = get_field('latitude');
    $longitude          = get_field('longitude');
?>

    <!DOCTYPE html>
    <html lang="ru">

    </html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

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
        <header class="site-header">
            <nav class="main-nav">
                <div class="wrapper">
                    <div class="logo">
                        <img class="logo__color" src="<?php bloginfo('stylesheet_directory'); ?>/img/logo-h.svg">
                        <img class="logo__white" src="<?php bloginfo('stylesheet_directory'); ?>/img/logo-h-white.svg">
                    </div>

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

                    <div class="main-nav__button">
                        <!--<a class="button button--blue" href="tel:+79878221223">+7 987 822-12-23</a>-->
                        <a class="button button--blue ms_booking" href="#">Онлайн запись</a>
                    </div>
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

        <!--
            About section
        -->
        <section class="about">
            <div class="wrapper">
                <a class="nav-link" id="about"></a>
                <div class="about__hero">
                    <p class="about__hero-title">
                        <?php echo $about_title; ?>
                    </p>

                    <p class="about__hero-description">
                        <?php echo $about_text_1; ?>
                    </p>
                    <p class="about__hero-description">
                        <?php echo $about_text_2; ?>
                    </p>
                    <p class="about__hero-description">
                        <?php echo $about_text_3; ?>
                    </p>

                    <div class="vert-title">About Magnum Barbershop</div>
                </div>
                <div class="about__content">
                    <header class="about__header">
                        <h2 class="about__title">Барбершоп<br> <strong>Magnum</strong></h2>
                        <p class="about__subtitle">Барбершоп Magnum — лучшая в Саратове парикмахерская для мужчин. </p>
                    </header>
                    <div class="about__features">
                        <div class="feature">
                            <h3 class="feature__title">
                                <?php echo $feature_1; ?>
                            </h3>
                            <p class="feature__text">
                                <?php echo $feature_text_1; ?>
                            </p>
                        </div>

                        <div class="feature">
                            <h3 class="feature__title">
                                <?php echo $feature_2; ?>
                            </h3>
                            <p class="feature__text">
                                <?php echo $feature_text_2; ?>
                            </p>
                        </div>

                        <div class="feature">
                            <h3 class="feature__title">
                                <?php echo $feature_3; ?>
                            </h3>
                            <p class="feature__text">
                                <?php echo $feature_text_3; ?>
                            </p>
                        </div>

                        <div class="feature">
                            <h3 class="feature__title">
                                <?php echo $feature_4; ?>
                            </h3>
                            <p class="feature__text">
                                <?php echo $feature_text_4; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--
            Services
        -->
        <section class="services">
            <div class="wrapper">
                <a class="nav-link" id="services"></a>
                <div class="services__hero">
                    <h2 class="services__title">Услуги<br> <strong>барбершопа</strong></h2>
                    <div class="vert-title vert-title--right">Services Magnum Barbershop</div>
                </div>
                <div class="services__content">
                    <a class="service" href="price.html#haircut">
                        <div class="service__image"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/haircut-srv.jpg"></div>
                        <div class="service__content">
                            <div class="service__icon">
                                <div class="icon icon-scissors"></div>
                            </div>
                            <h3 class="service__title">Стрижки</h3>
                            <p class="service__subtitle">Мужские и детские</p>
                        </div>
                    </a>
                    <a class="service" href="price.html#shave">
                        <div class="service__image"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/shaving-srv.jpg"></div>
                        <div class="service__content">
                            <div class="service__icon">
                                <div class="icon icon-blade"></div>
                            </div>
                            <h3 class="service__title">Бритьё</h3>
                            <p class="service__subtitle">Классическое и Королевское</p>
                        </div>
                    </a><br>
                    <a class="service" href="price.html#beard">
                        <div class="service__image"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/beard-srv.jpg"></div>
                        <div class="service__content">
                            <div class="service__icon">
                                <div class="icon icon-razor"></div>
                            </div>
                            <h3 class="service__title">Борода</h3>
                            <p class="service__subtitle">Стрижка и окрашивание</p>
                        </div>
                    </a>
                    <a class="service" href="price.html#tatoo">
                        <div class="service__image"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/tatoo-srv.jpg"></div>
                        <div class="service__content">
                            <div class="service__icon">
                                <div class="icon icon-tatoo-machine"></div>
                            </div>
                            <h3 class="service__title">Татуировки</h3>
                            <p class="service__subtitle">Любой сложности</p>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <!--
            Promos
        -->
        <section class="promos">
            <div class="wrapper">
                <a class="nav-link" id="promos"></a>
                <header class="promos__header">
                    <h2 class="promos__title">Наши<br> <strong>акции</strong></h2>
                </header>
                <div class="promos__content">
                    <?php
                        $args = array(
                            'category_name' => 'promo'
                        );

                        query_posts($args);

                        if (have_posts()) {
                            while(have_posts()) {
                                the_post();

                                // vars
                                $promo_title        = get_field('promo-name');
                                $promo_subtitle     = get_field('promo-subtitle');
                                $promo_blue_url     = get_field('promo-blue');
                                $promo_color_url    = get_field('promo-color');

                    ?>

                    <div class="promo-item">
                        <h3 class="promo-item__title">
                            <?php echo $promo_title; ?>
                        </h3>
                        <p class="promo-item__subtitle">
                            <?php echo $promo_subtitle; ?>
                        </p>
                        <div class="promo-item__image">
                            <img src="<?php echo $promo_blue_url; ?>">
                        </div>
                        <div class="promo-item__hover">
                            <img src="<?php echo $promo_color_url; ?>">
                        </div>
                    </div>


                    <?php
                            }
                        }
                    ?>
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

        <!--
            Partners
        -->
        <section class="partners">
            <div class="wrapper">
                <header class="partners__header">
                    <h2 class="partners__title">Наши<br> <strong>партнеры</strong></h2>
                </header>
                <div class="partners__content">
                    <a class="partner" href="http://barberwild.com/"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/partners/plogo-4.png"></a>
                    <a class="partner" href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/partners/plogo-1.png"></a>
                    <a class="partner" href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/partners/plogo-2.png"></a>
                    <a class="partner" href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/partners/plogo-3.png"></a>
                </div>
            </div>
        </section>

        <!--
            Prices
        -->
        <section class="prices">
            <div class="wrapper">
                <a class="nav-link" id="prices"></a>
                <header class="prices__header">
                    <div class="prices__header-wrapper">
                        <h2 class="prices__title"><strong>Прайс</strong></h2>
                        <p class="prices__subtitle">Список наиболее популярных услуг нашего барбершопа</p>
                    </div>
                    <div class="prices__button"><a class="button button--blue" href="price.html">Полный Прайс</a></div>
                </header>

                <div class="prices__content">
                    <div class="vert-title vert-title--right">Prices Magnum Barbershop</div>
                    <?php echo $price_content; ?>
                </div>
            </div>
        </section>

        <!--
            Contacts
        -->
        <section class="contacts">
            <div class="wrapper">
                <a class="nav-link" id="contacts"></a>
                <header class="contacts__header">
                    <h2 class="contacts__title">Наши<br> <strong>контакты</strong></h2>
                </header>

                <div class="contacts__content">
                    <div class="vert-title vert-title--right vert-title--blue">Contacts Magnum Barbershop</div>
                    <div class="contacts__text">По всем интересующим вопросам ты можешь обратиться к меденежеру по телефону или оправить письмо на электронный
                        адрес.<br> <strong> До встречи в MAGNUM</strong></div>

                    <div class="contact">
                        <h3 class="contact__title">Телефоны</h3>
                        <div class="contact__text">
                            <a href="tel:<?php echo $phone_link_1; ?>"><?php echo $phone_1; ?><br></a>
                            <a href="tel:<?php echo $phone_link_2; ?>"><?php echo $phone_2; ?></a>
                        </div>
                    </div>

                    <div class="contact">
                        <h3 class="contact__title">Электропочта</h3>
                        <div class="contact__text">
                            <a href="mailto:<?php echo $e_mail; ?>"><?php echo $e_mail; ?></a>
                        </div>
                    </div>

                    <div class="contact">
                        <h3 class="contact__title">Адрес</h3>
                        <div class="contact__text">
                            <?php echo $address; ?>
                        </div>
                    </div>
                </div>

                <div class="contacts__map" id="map"></div>
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

        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyClofSbCu6EYSgaWdfCK5G1i_eUXgL4RCk&amp;callback=initMap"></script>
        <!--<script type="text/javascript" src="https://w15399.yclients.com/widgetJS" charset="UTF-8"></script>-->
        <script type="text/javascript" src="https://w68025.yclients.com/widgetJS" charset="UTF-8"></script>

        <!-- Map -->
        <script>
            function initMap() {
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 17,
                    center: {
                        lat: <?php echo $latitude; ?>,
                        lng: <?php echo $longitude; ?>
                    },
                    disableDefaultUI: true,
                    scrollwheel: false,
                    // mapTypeControl: false,
                    // draggable: false,
                    zoomControl: true,
                    scaleControl: false
                });

                var marker = new google.maps.Marker({
                    map: map,
                    animation: google.maps.Animation.BOUNCE,
                    position: {
                        lat: <?php echo $latitude; ?>,
                        lng: <?php echo $longitude; ?>
                    }
                });
            }
        </script>

        <script src="<?php bloginfo('stylesheet_directory'); ?>/scripts/app.js"></script>

        <?php
            wp_footer();
        ?>
    </body>