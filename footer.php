<footer>
        <div class="container">
            
                <?php wp_nav_menu( [
                    'theme_location' => 'footer',
                    'container'       => 'div', 
                    'items_wrap'      => '<ul id="%1$s" class=" footer__navigation row justify-content-center justify-content-sm-between justify-content-lg-center mb-3 %2$s">%3$s</ul>',
                    'depth'           => 2
                ] ); ?>
            
            <div class="row">

                <?php if (pll_current_language() == 'en') { ?>

                    <div class="col-12">
                        <p class="text-center">© 2008-<?php echo date('Y'); ?>   LifeWEB    All right reserved.</p>
                        <p class="text-center">The information on the website life-web.ru is for informational purposes only and is not a public offer<br> defined by the provisions of Article 437 (2) of the Civil Code of the Russian Federation.</p>
                        <p class="text-center">For detailed information on the cost of services, please send your message using a special contact form on our website</p>
                        <p class="text-center"><a class="footer__map" href="<?php echo get_permalink(320); ?>">Site map</a></p>
                    </div>

                <?php } elseif (pll_current_language() == 'sr' ) { ?>

                    <div class="col-12">
                        <p class="text-center">© 2008-<?php echo date('Y'); ?>   LifeWEB    All right reserved.</p>
                        <p class="text-center">The information on the website life-web.ru is for informational purposes only and is not a public offer<br> defined by the provisions of Article 437 (2) of the Civil Code of the Russian Federation.</p>
                        <p class="text-center">For detailed information on the cost of services, please send your message using a special contact form on our website</p>
                        <p class="text-center"><a class="footer__map" href="<?php echo get_permalink(407); ?>">Мапа сајта</a></p>
                    </div>

                <?php } else { ?>

                    <div class="col-12">
                        <p class="text-center">© 2008-<?php echo date('Y'); ?>   LifeWEB    Все права защищены.</p>
                        <p class="text-center">Информация на сайте life-web.ru носит исключительно информационный характер и не является публичной офертой,<br> определяемой положениями  Статьи 437 (2) Гражданского кодекса РФ.</p>
                        <p class="text-center">Для получения подробной информации о стоимости услуг, пожалуйста, отправьте свое сообщение с помощью специальной формы связи на нашем сайте</p>
                        <p class="text-center"><a class="footer__map" href="<?php echo get_permalink(162); ?>">Карта сайта</a></p>
                    </div>

                <?php       } ?>

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
                    <ul class="lang">
                        <?php if ( function_exists('pll_the_languages') ) {
                            pll_the_languages(['display_names_as' => 'slug', 'show_flags' => 1]);  
                        } ?>
                    </ul>
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
</body>
</html>