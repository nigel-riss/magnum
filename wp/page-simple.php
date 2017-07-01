<?php
    // Template Name: Smiple Page
?>

    <!DOCTYPE html>
    <html lang="ru">

    </html>

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
            <div class="vert-title">Magnum Barbershop</div>
            <nav class="main-nav">
                <div class="wrapper">
                    <a class="logo" href="<?php echo esc_url(home_url('')); ?>">
                        <img class="logo__color" src="<?php bloginfo('stylesheet_directory'); ?>/img/logo-h.svg">
                        <img class="logo__white" src="<?php bloginfo('stylesheet_directory'); ?>/img/logo-h-white.svg">
                    </a>

                    <!--<div class="main-nav__menu-icon">
                        <div class="main-nav__menu-icon__middle"></div>
                    </div>-->

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
                <p class="hero__motto"><?php the_title(); ?></p>
            </div>
        </header>

        <main>
            <div class="wrapper">
            
                <?php 
                    $args = array(
                        'category_name' => 'job'
                    );
                    query_posts($args);

                    if(have_posts()) {
                        while(have_posts()) {
                            the_post();
                ?>

                <article class="job">
                    <header class="job__header">
                        <h2 class="job__title"><?php the_title(); ?></h2>
                    </header>
                    <div class="job__content">
                        <?php
                            the_content(); 
                        ?>
                    </div>
                </article>

                <?php
                        }
                    }
                ?>
            </div>
        </main>

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

        <?php
            wp_footer();
        ?>
    </body>