<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">

    <?php wp_head();  ?>
</head>
<body <?php body_class() ?>>
<a href="#header" class="link-top"></a>
    <header id="header">
        <div class="container-fluid mb-4">
            <div class="row align-items-center align-items-lg-start">
                <div class="col-auto">
                    <a class="logo" href="<?php echo get_home_url();  ?>">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/life-web.png" alt="life-web">
                    </a>
                </div>
                <div class="col">
                    <div class="row justify-content-end align-items-center align-items-lg-start mb-lg-4 mr-8">
                        <div class="col-auto d-none d-lg-block">
                            <div class="nav-top">
                                <?php wp_nav_menu( [
                                    'theme_location' => 'header-top',
                                    'container'       => null, 
                                    'menu_class'      => 'header__navigation',
                                    'depth'           => 1
                                ] ); ?>
                            </div>
                        </div>
                        <div class="col-auto d-none d-sm-block offset-0 offset-xl-1"><a href="tel:<?php echo get_field('tel', 7); ?>" class="phone"><?php echo get_field('tel', 7); ?></a></div>
                        <div class="col-auto d-none d-sm-block offset-0 offset-xl-1">
                            <div class="lang"><a href="#" class="link-lang">RU</a><a href="#" class="link-lang">EN</a></div>
                        </div>
                        <div class="col-auto d-lg-none">
                            <a href="#mobile-menu" class="mobile-menu-link">
                                <div class="icon-block"></div>
                                <div class="icon-block"></div>
                                <div class="icon-block"></div>
                            </a>
                        </div>
                    </div>
                    <div class="row d-none d-lg-flex mr-8">
                        <div class="col">
                            <div class="nav-bottom">
                                <ul>
                                    <li><a href="#">РАЗРАБОТКА  САЙТОВ</a></li>
                                    <li><a href="#">Техническая поддержка сайтов</a></li>
                                    <li><a href="#">Тестирование ПО</a></li>
                                    <li><a href="#">Интернет реклама</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-xl-6">
                    <h1>Эффективная разработка<br> и тестирование ПО</h1>
                    <p>Обеспечиваем качество на всех этапах работы</p>
                </div>
                <div class="col-lg-4 col-xl-6">
                    <a href="#order" class="btn-header">Получить консультацию</a>
                </div>
            </div>
        </div>
    </header>