<footer>
        <div class="container">
            <!-- <div class="row justify-content-center justify-content-sm-between justify-content-lg-center mb-3">
                <div class="col col-sm-6  col-xl-3">
                    <div class="footer-list">
                        <a href="#" class="head-list">Разработка сайтов</a>
                        <ul>
                            <li><a href="#">сайт-визитка</a></li>
                            <li><a href="#">корпоративный сайт</a></li>
                            <li><a href="#">интернет-магазин</a></li>
                            <li><a href="#">фирменный стиль</a></li>
                            <li><a href="#">редизайн сайта</a></li>
                            <li><a href="#">адаптивный дизайн</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6  col-xl-3">
                    <div class="footer-list">
                        <a href="#" class="head-list">Техническая поддержка</a>
                        <ul>
                            <li><a href="#">разработка техдокументации</a></li>
                            <li><a href="#">техническая поддержка</a></li>
                            <li><a href="#">комплексная поддержка</a></li>
                            <li><a href="#">хостинг</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6  col-xl-3">
                    <div class="footer-list">
                        <a href="#" class="head-list">Тестирование ПО</a>
                        <ul>
                            <li><a href="#">анализ юзабилити</a></li>
                            <li><a href="#">функциональное тестирование</a></li>
                            <li><a href="#">автоматизация тестирования</a></li>
                            <li><a href="#">тестирование документации</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6  col-xl-3">
                    <div class="footer-list">
                        <a href="#" class="head-list">ИНТЕРНЕТ РЕКЛАМА</a>
                        <ul>
                            <li><a href="#">Яндекс.Директ</a></li>
                            <li><a href="#">аудит сайта</a></li>
                            <li><a href="#">продвижение статьями</a></li>
                            <li><a href="#">соцсети</a></li>
                        </ul>
                    </div>
                </div>
            </div> -->
            
                <?php wp_nav_menu( [
                    'theme_location' => 'footer',
                    'container'       => 'div', 
                    'items_wrap'      => '<ul id="%1$s" class=" footer__navigation row justify-content-center justify-content-sm-between justify-content-lg-center mb-3 %2$s">%3$s</ul>',
                    'depth'           => 2
                ] ); ?>
            
            <div class="row">
                <div class="col-12">
                    <p class="text-center">© 2008-2020   LifeWEB    Все права защищены.</p>
                    <p class="text-center">Информация на сайте life-web.ru носит исключительно информационный характер и не является публичной офертой,<br> определяемой положениями  Статьи 437 (2) Гражданского кодекса РФ.</p>
                    <p class="text-center">Для получения подробной информации о стоимости услуг, пожалуйста, отправьте свое сообщение с помощью специальной формы связи на нашем сайте</p>
                </div>
            </div>
        </div>
    </footer>

    <div class="modals d-none">
        <div id="mobile-menu">
            <div class="btn-close" title="Закрыть">
                    <div class="icon-close">
                        <div class="close-block"></div>
                        <div class="close-block"></div>
                    </div>
                </div>
            <div class="row justify-content-between">
                <div class="col-auto"><a href="tel:<?php echo get_field('tel', 7); ?>" class="phone"><?php echo get_field('tel', 7); ?></a></div>
                <div class="col-auto">
                    <div class="lang">
                        <a href="#" class="link-lang">RU</a>
                        <a href="#" class="link-lang">EN</a>
                    </div>
                </div>
            </div>
            <?php wp_nav_menu( [
                'theme_location' => 'header-top',
                'container'       => null, 
                'menu_class'      => 'header-top__navigation',
                'depth'           => 1
            ] ); ?>
            <?php wp_nav_menu( [
                'theme_location' => 'header-bottom',
                'container'       => null, 
                'menu_class'      => 'header-bottom__navigation',
                'depth'           => 1
            ] ); ?>
        </div>
    </div>


    
    <?php wp_footer();  ?>
    <?php //dynamic_sidebar('sidebar-metrika'); ?>
    <?php echo get_field('metrika', 7); ?>
</body>
</html>