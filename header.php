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
                    <div class="logo">
                        <?php the_custom_logo(); ?>
                    </div>
                </div>
                <div class="col">
                    <div class="row justify-content-end align-items-center align-items-lg-start mb-lg-4 mr-8">
                        <div class="col-auto d-none d-lg-block">
                            <div class="nav-top">
                                <?php wp_nav_menu( [
                                    'theme_location' => 'header-top',
                                    'container'       => null, 
                                    'menu_class'      => 'header-top__navigation',
                                    'depth'           => 1
                                ] ); ?>
                            </div>
                        </div>
                        <div class="col-auto d-none d-sm-block offset-0 offset-xl-1"><a href="tel:<?php echo get_field('telefon', 7); ?>" class="phone"><?php echo get_field('telefon', 7); ?></a></div>
                        <div class="col-auto d-none d-sm-block offset-0 offset-xl-1">
                            <div class="lang">
 								<a href="#" class="link-lang">RU</a>
								<a href="#" class="link-lang">EN</a> 
							</div>
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
                                <?php wp_nav_menu( [
                                    'theme_location' => 'header-bottom',
                                    'container'       => null, 
                                    'menu_class'      => 'header-bottom__navigation',
                                    'depth'           => 1
                                ] ); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php if( is_front_page() ):  ?>

        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-xl-6">
                    <h1><?php echo get_field('zagolovok_h1', 7); ?></h1>
                    <p><?php echo get_field('podzagolovok', 7); ?></p>
                </div>
                <div class="col-lg-4 col-xl-6">
                    <a href="#order" class="btn-header">Получить консультацию</a>
                </div>
            </div>
        </div>

        <?php elseif( is_category() ):  ?>

        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-xl-6">
                    <h1><?php single_cat_title(); ?></h1>
                    <p><?php echo category_description(); ?></p>
                </div>
            </div>
        </div>

        <?php elseif( is_home() ):  ?>

        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-xl-6">
                    <h1>Блог</h1>
                    <p>Наши статьи</p>
                </div>
                <div class="col-lg-4 col-xl-6">
                    <a href="<?php echo get_permalink(20); ?>" class="btn-header">Получить консультацию</a>
                </div>
            </div>
        </div>

        <?php elseif( is_post_type_archive('portfolio') ):  ?>

        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-xl-6">
                    <h1>Портфолио</h1>
                    <p>Наши кейсы</p>
                </div>
                <div class="col-lg-4 col-xl-6">
                    <a href="<?php echo get_permalink(20); ?>" class="btn-header">Получить консультацию</a>
                </div>
            </div>
        </div>

        <?php elseif( is_404() ):  ?>

        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-xl-6">
                    <h1>404!</h1>
                </div>
                <div class="col-lg-4 col-xl-6">
                    <a href="<?php echo get_permalink(20); ?>" class="btn-header">Получить консультацию</a>
                </div>
            </div>
        </div>

        <?php else:  ?>

        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-xl-6">
                    <h1><?php echo get_field('zagolovok_h1', 7); ?></h1>
                    <p><?php echo get_field('podzagolovok', 7); ?></p>
                </div>
                <div class="col-lg-4 col-xl-6">
                    <a href="<?php echo get_permalink(20); ?>" class="btn-header">Получить консультацию</a>
                </div>
            </div>
        </div>

        <?php endif;  ?>

    </header>