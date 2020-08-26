<footer>
        <div class="container">
            
                <?php wp_nav_menu( [
                    'theme_location' => 'footer',
                    'container'       => 'div', 
                    'items_wrap'      => '<ul id="%1$s" class=" footer__navigation row justify-content-center justify-content-sm-between justify-content-lg-center mb-3 %2$s">%3$s</ul>',
                    'depth'           => 2
                ] ); ?>
            
            <div class="row">
                <div class="col-12">
                    <p class="text-center">© 2008-<?php echo date('Y'); ?>   LifeWEB    Все права защищены.</p>
                    <p class="text-center">Информация на сайте life-web.ru носит исключительно информационный характер и не является публичной офертой,<br> определяемой положениями  Статьи 437 (2) Гражданского кодекса РФ.</p>
                    <p class="text-center">Для получения подробной информации о стоимости услуг, пожалуйста, отправьте свое сообщение с помощью специальной формы связи на нашем сайте</p>
                    <p class="text-center"><a class="footer__map" href="<?php echo get_permalink(162); ?>">Карта сайта</a></p>
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
    <?php echo get_field('metrika', 7); ?>
</body>
</html>