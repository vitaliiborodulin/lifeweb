<?php get_header();  ?>

<div class="services">
    <div class="container-fluid">
        <div class="row no-gutters">
            <div class="col-sm-6 col-lg-3">
                <div class="container-service develop">
                    <div class="service-img"><img class="align-self-start" src="<?php bloginfo('template_url'); ?>/assets/img/icons/develop.png" alt="develop"></div>
                    <div class="service-name"><?php echo get_the_title(56); ?></div>
 
                        <?php $arg = [
                            'depth'        => 1,
                            'title_li'     => null,
                            'child_of' => 56 
                        ]; //здесь выводим список дочерних страниц если они есть
                        ?>
                        <ul class="service-work-list">
                            <?php wp_list_pages( $arg ) ?>
                        </ul>

                    <div class="btn-container">
                        <a href="<?php echo get_permalink(56); ?>" class="btn-transparent"><div class="container-bg">Узнать больше</div></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="container-service support">
                    <div class="service-img"><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/support.png" alt="support"></div>
                    <div class="service-name"><?php echo get_the_title(68); ?></div>

                        <?php $arg = [
                            'depth'        => 1,
                            'title_li'     => null,
                            'child_of' => 68 
                            ]; //здесь выводим список дочерних страниц если они есть
                        ?>
                        <ul class="service-work-list">
                            <?php wp_list_pages( $arg ) ?>
                        </ul>

                    <div class="btn-container">
                        <a href="<?php echo get_permalink(68); ?>" class="btn-transparent"><div class="container-bg">Узнать больше</div></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="container-service testing">
                    <div class="service-img"><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/testing.png" alt="testing"></div>
                    <div class="service-name"><?php echo get_the_title(78); ?></div>
                    
                    <?php $arg = [
                            'depth'        => 1,
                            'title_li'     => null,
                            'child_of' => 78 
                            ]; //здесь выводим список дочерних страниц если они есть
                    ?>
                    <ul class="service-work-list">
                            <?php wp_list_pages( $arg ) ?>
                    </ul>

                    <div class="btn-container">
                        <a href="<?php echo get_permalink(78); ?>" class="btn-transparent"><div class="container-bg">Узнать больше</div></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="container-service pr">
                    <div class="service-img"><img class="align-self-start" src="<?php bloginfo('template_url'); ?>/assets/img/icons/pr.png" alt="pr"></div>
                    <div class="service-name"><?php echo get_the_title(88); ?></div>
                    
                    <?php $arg = [
                            'depth'        => 1,
                            'title_li'     => null,
                            'child_of' => 88 
                            ]; //здесь выводим список дочерних страниц если они есть
                    ?>
                     <ul class="service-work-list">
                            <?php wp_list_pages( $arg ) ?>
                    </ul>

                    <div class="btn-container">
                        <a href="<?php echo get_permalink(88); ?>" class="btn-transparent"><div class="container-bg">Узнать больше</div></a>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
<div class="text-1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <p><?php echo get_field('tekst_1', 7); ?></p>
            </div>
        </div>
    </div>
</div>
<section class="why-us">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Почему мы?</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg">
                <div class="container-reasons left">
                    <div class="container-reason top">
                        <div class="text-reason pl-100 ls-2 mb-77">
                            <div class="name-reason"><?php echo get_field('zagolovok_my_1', 7); ?></div>
                            <div class="desc-reason"><?php echo get_field('tekst_my_1', 7); ?></div>
                        </div>
                        <div class="img-reason"><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/why-us.png" alt="icon"></div>
                    </div>
                    <div class="container-reason middle mb-63">
                        <div class="text-reason pl-10">
                            <div class="name-reason"><?php echo get_field('zagolovok_my_2', 7); ?></div>
                            <div class="desc-reason"><?php echo get_field('tekst_my_2', 7); ?></div>
                        </div>
                        <div class="img-reason"><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/why-us-1.png" alt="icon"></div>
                    </div>
                    <div class="container-reason bottom">
                        <div class="text-reason pl-10">
                            <div class="name-reason"><?php echo get_field('zagolovok_my_3', 7); ?></div>
                            <div class="desc-reason"><?php echo get_field('tekst_my_3', 7); ?></div>
                        </div>
                        <div class="img-reason"><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/why-us-2.png" alt="icon"></div>
                    </div>
                </div>
            </div>
            <div class="d-none d-xl-flex col-3 align-items-center justify-content-center">
                <div class="text-web">Life WEB</div>
            </div>
            <div class="col-lg">
                <div class="container-reasons right">
                    <div class="container-reason top">
                        <div class="text-reason ls-2">
                            <div class="name-reason"><?php echo get_field('zagolovok_my_4', 7); ?></div>
                            <div class="desc-reason"><?php echo get_field('tekst_my_4', 7); ?></div>
                        </div>
                        <div class="img-reason"><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/why-us-3.png" alt="icon"></div>
                    </div>
                    <div class="container-reason middle mb-80">
                    <div class="text-reason">
                        <div class="name-reason"><?php echo get_field('zagolovok_my_5', 7); ?></div>
                        <div class="desc-reason"><?php echo get_field('tekst_my_5', 7); ?></div>
                    </div>
                    <div class="img-reason"><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/why-us-4.png" alt="icon"></div>
                </div>
                    <div class="container-reason bottom">
                        <div class="text-reason">
                            <div class="name-reason"><?php echo get_field('zagolovok_my_6', 7); ?></div>
                            <div class="desc-reason"><?php echo get_field('tekst_my_6', 7); ?></div>
                        </div>
                        <div class="img-reason"><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/why-us-5.png" alt="icon"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="text-2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <p><?php echo get_field('tekst_2', 7); ?></p>
            </div>
        </div>
    </div>
</div>
<section class="cases">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Наши кейсы</h2>
            </div>
            <div class="col-12">
                <div class="container-slider">
                    <div class="slides">
                        <div class="slide">
                            <div class="project"><img src="<?php bloginfo('template_url'); ?>/assets/img/projects/project-1.png" alt="project-1" class="img-project">
                                <div class="project-info">
                                    <div class="info-container">
                                        <div class="project-name">Autom1.ru</div>
                                        <ul class="option-list">
                                            <li>Разработака сайта в 2018 г.</li>
                                            <li>Продвижение сайта</li>
                                        </ul>
                                    </div>
                                    <a href="#" class="link">Подробнее</a>
                                </div>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="project"><img src="<?php bloginfo('template_url'); ?>/assets/img/projects/project-2.png" alt="project-2" class="img-project">
                                <div class="project-info">
                                    <div class="info-container">
                                        <div class="project-name">Fishingnews.ru<br><span>Рыболовный интернет-maгaзин</span></div>
                                        <ul class="option-list">
                                            <li>Разработка сайта в 2010 г.</li>
                                            <li>Перенос сайта на Shope-skript в 2020</li>
                                            <li>Техническая поддержка</li>
                                        </ul>
                                    </div>
                                    <a href="#" class="link">Подробнее</a>
                                </div>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="project"><img src="<?php bloginfo('template_url'); ?>/assets/img/projects/project-1.png" alt="project-1" class="img-project">
                                <div class="project-info">
                                    <div class="info-container">
                                        <div class="project-name">Autom1.ru</div>
                                        <ul class="option-list">
                                            <li>Разработака сайта в 2018 г.</li>
                                            <li>Продвижение сайта</li>
                                        </ul>
                                    </div>
                                    <a href="#" class="link">Подробнее</a>
                                </div>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="project"><img src="<?php bloginfo('template_url'); ?>/assets/img/projects/project-2.png" alt="project-2" class="img-project">
                                <div class="project-info">
                                    <div class="info-container">
                                        <div class="project-name">Fishingnews.ru<br><span>Рыболовный интернет-maгaзин</span></div>
                                        <ul class="option-list">
                                            <li>Разработка сайта в 2010 г.</li>
                                            <li>Перенос сайта на Shope-skript в 2020</li>
                                            <li>Техническая поддержка</li>
                                        </ul>
                                    </div>
                                    <a href="#" class="link">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="control">
                        <div class="btn-prev">
                            <div class="btn-icon"></div>
                        </div>
                        <div class="btn-next">
                            <div class="btn-icon"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="order" id="order">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Оставить заявку</h2>
            </div>
            <div class="col-md-9 col-lg-7 col-xl-6">
                <div class="container-form">
                    <?php echo do_shortcode('[contact-form-7 id="27" title="Контактная форма на главной"]');  ?>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="text-3">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <p><?php echo get_field('tekst_3', 7); ?></p>
            </div>
        </div>
    </div>
</div>

<?php get_footer();  ?>