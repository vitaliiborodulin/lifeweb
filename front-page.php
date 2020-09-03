<?php get_header();  ?>

<?php if (pll_current_language() == 'en' ) { ?>

<div class="services">

    <div class="container-fluid">
        <div class="row no-gutters">
            <div class="col-sm-6 col-lg-3">
                <div class="container-service develop">
                    <div class="service-img"><img class="align-self-start" src="<?php bloginfo('template_url'); ?>/assets/img/icons/develop.png" alt="develop"></div>
                    <div class="service-name"><?php echo get_the_title(231); ?></div>
 
                        <?php $arg = [
                            'depth'        => 1,
                            'title_li'     => null,
                            'sort_column'  => 'post_date',
                            'child_of' => 231 
                        ]; //здесь выводим список дочерних страниц если они есть
                        ?>
                        <ul class="service-work-list">
                            <?php wp_list_pages( $arg ) ?>
                        </ul>

                    <div class="btn-container">
                        <a href="<?php echo get_permalink(231); ?>" class="btn-transparent"><div class="container-bg">More info</div></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="container-service support">
                    <div class="service-img"><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/support.png" alt="support"></div>
                    <div class="service-name"><?php echo get_the_title(246); ?></div>

                        <?php $arg = [
                            'depth'        => 1,
                            'title_li'     => null,
                            'sort_column'  => 'post_date',
                            'child_of' => 246 
                            ]; //здесь выводим список дочерних страниц если они есть
                        ?>
                        <ul class="service-work-list">
                            <?php wp_list_pages( $arg ) ?>
                        </ul>

                    <div class="btn-container">
                        <a href="<?php echo get_permalink(246); ?>" class="btn-transparent"><div class="container-bg">More info</div></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="container-service testing">
                    <div class="service-img"><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/testing.png" alt="testing"></div>
                    <div class="service-name"><?php echo get_the_title(256); ?></div>
                    
                    <?php $arg = [
                            'depth'        => 1,
                            'title_li'     => null,
                            'sort_column'  => 'post_date',
                            'child_of' => 256 
                            ]; //здесь выводим список дочерних страниц если они есть
                    ?>
                    <ul class="service-work-list">
                            <?php wp_list_pages( $arg ) ?>
                    </ul>

                    <div class="btn-container">
                        <a href="<?php echo get_permalink(256); ?>" class="btn-transparent"><div class="container-bg">More info</div></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="container-service pr">
                    <div class="service-img"><img class="align-self-start" src="<?php bloginfo('template_url'); ?>/assets/img/icons/pr.png" alt="pr"></div>
                    <div class="service-name"><?php echo get_the_title(266); ?></div>
                    
                    <?php $arg = [
                            'depth'        => 1,
                            'title_li'     => null,
                            'sort_column'  => 'post_date',
                            'child_of' => 266 
                            ]; //здесь выводим список дочерних страниц если они есть
                    ?>
                     <ul class="service-work-list">
                            <?php wp_list_pages( $arg ) ?>
                    </ul>

                    <div class="btn-container">
                        <a href="<?php echo get_permalink(266); ?>" class="btn-transparent"><div class="container-bg">More info</div></a>
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
                <p><?php echo get_field('tekst_1_en', 7); ?></p>
            </div>
        </div>
    </div>
</div>
<section class="why-us">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Why us?</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg">
                <div class="container-reasons left">
                    <div class="container-reason top">
                        <div class="text-reason pl-100 ls-2 mb-77">
                            <div class="name-reason"><?php echo get_field('zagolovok_my_1_en', 7); ?></div>
                            <div class="desc-reason"><?php echo get_field('tekst_my_1_en', 7); ?></div>
                        </div>
                        <div class="img-reason"><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/why-us.png" alt="icon"></div>
                    </div>
                    <div class="container-reason middle mb-63">
                        <div class="text-reason pl-10">
                            <div class="name-reason"><?php echo get_field('zagolovok_my_2_en', 7); ?></div>
                            <div class="desc-reason"><?php echo get_field('tekst_my_2_en', 7); ?></div>
                        </div>
                        <div class="img-reason"><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/why-us-1.png" alt="icon"></div>
                    </div>
                    <div class="container-reason bottom">
                        <div class="text-reason pl-10">
                            <div class="name-reason"><?php echo get_field('zagolovok_my_3_en', 7); ?></div>
                            <div class="desc-reason"><?php echo get_field('tekst_my_3_en', 7); ?></div>
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
                            <div class="name-reason"><?php echo get_field('zagolovok_my_4_en', 7); ?></div>
                            <div class="desc-reason"><?php echo get_field('tekst_my_4_en', 7); ?></div>
                        </div>
                        <div class="img-reason"><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/why-us-3.png" alt="icon"></div>
                    </div>
                    <div class="container-reason middle mb-80">
                    <div class="text-reason">
                        <div class="name-reason"><?php echo get_field('zagolovok_my_5_en', 7); ?></div>
                        <div class="desc-reason"><?php echo get_field('tekst_my_5_en', 7); ?></div>
                    </div>
                    <div class="img-reason"><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/why-us-4.png" alt="icon"></div>
                </div>
                    <div class="container-reason bottom">
                        <div class="text-reason">
                            <div class="name-reason"><?php echo get_field('zagolovok_my_6_en', 7); ?></div>
                            <div class="desc-reason"><?php echo get_field('tekst_my_6_en', 7); ?></div>
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
                <p><?php echo get_field('tekst_2_en', 7); ?></p>
            </div>
        </div>
    </div>
</div>
<section class="cases">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2><a href="<?php echo get_post_type_archive_link('portfolio'); ?>">Our cases</a></h2>
            </div>
            <div class="col-12">
                <div class="container-slider">
                    <?php $cases = get_posts(['post_type' => 'portfolio', 'numberposts' => -1]);?>
                    
                    <div class="slides">

                        <?php foreach($cases as $case): ?>
                            <div class="slide">
                                <div class="project">
                                    <a href="<?php echo get_the_permalink($case); ?>"><img src="<?php echo get_the_post_thumbnail_url($case);  ?>" alt="" class="img-project"></a>
                                    <div class="project-info">
                                        <div class="info-container">
                                            <div class="project-name"><?php echo get_the_title($case); ?><br><span class="pt-1"><?php echo get_field('podzagolovok_kejsa_en', $case); ?></span></div>
                                            <ul class="option-list">

                                                <?php if( get_field('chto_sdelano_v_kejse_1_en', $case) ): ?> 
                                                    <li><?php the_field('chto_sdelano_v_kejse_1_en', $case); ?></li>
                                                <?php endif;?>

                                                <?php if( get_field('chto_sdelano_v_kejse_2_en', $case) ): ?> 
                                                    <li><?php the_field('chto_sdelano_v_kejse_2_en', $case); ?></li>
                                                <?php endif;?>
                                                
                                                <?php if( get_field('chto_sdelano_v_kejse_3_en', $case) ): ?> 
                                                    <li><?php the_field('chto_sdelano_v_kejse_3_en', $case); ?></li>
                                                <?php endif;?>
                                                
                                            </ul>
                                        </div>
                                        <a href="<?php echo get_the_permalink($case); ?>" class="link">More info</a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>

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
                <h2>Submit a letter</h2>
            </div>
            <div class="col-md-9 col-lg-7 col-xl-6">
                <div class="container-form">
                    <?php echo do_shortcode('[contact-form-7 id="327" title="Форма на главной en"]');  ?>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="text-3">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <p><?php echo get_field('tekst_3_en', 7); ?></p>
            </div>
        </div>
    </div>
</div>

<?php } elseif (pll_current_language() == 'sr' ) { ?>

<div class="services">

    <div class="container-fluid">
        <div class="row no-gutters">
            <div class="col-sm-6 col-lg-3">
                <div class="container-service develop">
                    <div class="service-img"><img class="align-self-start" src="<?php bloginfo('template_url'); ?>/assets/img/icons/develop.png" alt="develop"></div>
                    <div class="service-name"><?php echo get_the_title(385); ?></div>
 
                        <?php $arg = [
                            'depth'        => 1,
                            'title_li'     => null,
                            'sort_column'  => 'post_date',
                            'child_of' => 385 
                        ]; //здесь выводим список дочерних страниц если они есть
                        ?>
                        <ul class="service-work-list">
                            <?php wp_list_pages( $arg ) ?>
                        </ul>

                    <div class="btn-container">
                        <a href="<?php echo get_permalink(385); ?>" class="btn-transparent"><div class="container-bg">Детаљније</div></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="container-service support">
                    <div class="service-img"><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/support.png" alt="support"></div>
                    <div class="service-name"><?php echo get_the_title(423); ?></div>

                        <?php $arg = [
                            'depth'        => 1,
                            'title_li'     => null,
                            'sort_column'  => 'post_date',
                            'child_of' => 423 
                            ]; //здесь выводим список дочерних страниц если они есть
                        ?>
                        <ul class="service-work-list">
                            <?php wp_list_pages( $arg ) ?>
                        </ul>

                    <div class="btn-container">
                        <a href="<?php echo get_permalink(423); ?>" class="btn-transparent"><div class="container-bg">Детаљније</div></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="container-service testing">
                    <div class="service-img"><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/testing.png" alt="testing"></div>
                    <div class="service-name"><?php echo get_the_title(395); ?></div>
                    
                    <?php $arg = [
                            'depth'        => 1,
                            'title_li'     => null,
                            'sort_column'  => 'post_date',
                            'child_of' => 395 
                            ]; //здесь выводим список дочерних страниц если они есть
                    ?>
                    <ul class="service-work-list">
                            <?php wp_list_pages( $arg ) ?>
                    </ul>

                    <div class="btn-container">
                        <a href="<?php echo get_permalink(395); ?>" class="btn-transparent"><div class="container-bg">Детаљније</div></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="container-service pr">
                    <div class="service-img"><img class="align-self-start" src="<?php bloginfo('template_url'); ?>/assets/img/icons/pr.png" alt="pr"></div>
                    <div class="service-name"><?php echo get_the_title(371); ?></div>
                    
                    <?php $arg = [
                            'depth'        => 1,
                            'title_li'     => null,
                            'sort_column'  => 'post_date',
                            'child_of' => 371 
                            ]; //здесь выводим список дочерних страниц если они есть
                    ?>
                     <ul class="service-work-list">
                            <?php wp_list_pages( $arg ) ?>
                    </ul>

                    <div class="btn-container">
                        <a href="<?php echo get_permalink(371); ?>" class="btn-transparent"><div class="container-bg">Детаљније</div></a>
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
                <p><?php echo get_field('tekst_1_sr', 7); ?></p>
            </div>
        </div>
    </div>
</div>
<section class="why-us">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Зашто ми?</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg">
                <div class="container-reasons left">
                    <div class="container-reason top">
                        <div class="text-reason pl-100 ls-2 mb-77">
                            <div class="name-reason"><?php echo get_field('zagolovok_my_1_sr', 7); ?></div>
                            <div class="desc-reason"><?php echo get_field('tekst_my_1_sr', 7); ?></div>
                        </div>
                        <div class="img-reason"><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/why-us.png" alt="icon"></div>
                    </div>
                    <div class="container-reason middle mb-63">
                        <div class="text-reason pl-10">
                            <div class="name-reason"><?php echo get_field('zagolovok_my_2_sr', 7); ?></div>
                            <div class="desc-reason"><?php echo get_field('tekst_my_2_sr', 7); ?></div>
                        </div>
                        <div class="img-reason"><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/why-us-1.png" alt="icon"></div>
                    </div>
                    <div class="container-reason bottom">
                        <div class="text-reason pl-10">
                            <div class="name-reason"><?php echo get_field('zagolovok_my_3_sr', 7); ?></div>
                            <div class="desc-reason"><?php echo get_field('tekst_my_3_sr', 7); ?></div>
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
                            <div class="name-reason"><?php echo get_field('zagolovok_my_4_sr', 7); ?></div>
                            <div class="desc-reason"><?php echo get_field('tekst_my_4_sr', 7); ?></div>
                        </div>
                        <div class="img-reason"><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/why-us-3.png" alt="icon"></div>
                    </div>
                    <div class="container-reason middle mb-80">
                    <div class="text-reason">
                        <div class="name-reason"><?php echo get_field('zagolovok_my_5_sr', 7); ?></div>
                        <div class="desc-reason"><?php echo get_field('tekst_my_5_sr', 7); ?></div>
                    </div>
                    <div class="img-reason"><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/why-us-4.png" alt="icon"></div>
                </div>
                    <div class="container-reason bottom">
                        <div class="text-reason">
                            <div class="name-reason"><?php echo get_field('zagolovok_my_6_sr', 7); ?></div>
                            <div class="desc-reason"><?php echo get_field('tekst_my_6_sr', 7); ?></div>
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
                <p><?php echo get_field('tekst_2_sr', 7); ?></p>
            </div>
        </div>
    </div>
</div>
<section class="cases">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2><a href="<?php echo get_post_type_archive_link('portfolio'); ?>">Наши случајеви</a></h2>
            </div>
            <div class="col-12">
                <div class="container-slider">
                    <?php $cases = get_posts(['post_type' => 'portfolio', 'numberposts' => -1]);?>
                    
                    <div class="slides">

                        <?php foreach($cases as $case): ?>
                            <div class="slide">
                                <div class="project">
                                    <a href="<?php echo get_the_permalink($case); ?>"><img src="<?php echo get_the_post_thumbnail_url($case);  ?>" alt="" class="img-project"></a>
                                    <div class="project-info">
                                        <div class="info-container">
                                            <div class="project-name"><?php echo get_the_title($case); ?><br><span class="pt-1"><?php echo get_field('podzagolovok_kejsa_sr', $case); ?></span></div>
                                            <ul class="option-list">

                                                <?php if( get_field('chto_sdelano_v_kejse_1_sr', $case) ): ?> 
                                                    <li><?php the_field('chto_sdelano_v_kejse_1_sr', $case); ?></li>
                                                <?php endif;?>

                                                <?php if( get_field('chto_sdelano_v_kejse_2_sr', $case) ): ?> 
                                                    <li><?php the_field('chto_sdelano_v_kejse_2_sr', $case); ?></li>
                                                <?php endif;?>
                                                
                                                <?php if( get_field('chto_sdelano_v_kejse_3_sr', $case) ): ?> 
                                                    <li><?php the_field('chto_sdelano_v_kejse_3_sr', $case); ?></li>
                                                <?php endif;?>
                                                
                                            </ul>
                                        </div>
                                        <a href="<?php echo get_the_permalink($case); ?>" class="link">More info</a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>

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
                <h2>Пошаљите своју пријаву</h2>
            </div>
            <div class="col-md-9 col-lg-7 col-xl-6">
                <div class="container-form">
                    <?php echo do_shortcode('[contact-form-7 id="453" title="Форма на главной sr"]');  ?>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="text-3">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <p><?php echo get_field('tekst_3_sr', 7); ?></p>
            </div>
        </div>
    </div>
</div>

<?php } else { ?> 

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
                        'sort_column'  => 'post_date',
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
                        'sort_column'  => 'post_date',
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
                        'sort_column'  => 'post_date',
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
                        'sort_column'  => 'post_date',
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
            <h2><a href="<?php echo get_post_type_archive_link('portfolio'); ?>">Наши кейсы</a></h2>
        </div>
        <div class="col-12">
            <div class="container-slider">
                <?php $cases = get_posts(['post_type' => 'portfolio', 'numberposts' => -1]);?>
                
                <div class="slides">

                    <?php foreach($cases as $case): ?>
                        <div class="slide">
                            <div class="project">
                                <a href="<?php echo get_the_permalink($case); ?>"><img src="<?php echo get_the_post_thumbnail_url($case);  ?>" alt="" class="img-project"></a>
                                <div class="project-info">
                                    <div class="info-container">
                                        <div class="project-name"><?php echo get_the_title($case); ?><br><span class="pt-1"><?php echo get_field('podzagolovok_kejsa', $case); ?></span></div>
                                        <ul class="option-list">

                                            <?php if( get_field('chto_sdelano_v_kejse_1', $case) ): ?> 
                                                <li><?php the_field('chto_sdelano_v_kejse_1', $case); ?></li>
                                            <?php endif;?>

                                            <?php if( get_field('chto_sdelano_v_kejse_2', $case) ): ?> 
                                                <li><?php the_field('chto_sdelano_v_kejse_2', $case); ?></li>
                                            <?php endif;?>
                                            
                                            <?php if( get_field('chto_sdelano_v_kejse_3', $case) ): ?> 
                                                <li><?php the_field('chto_sdelano_v_kejse_3', $case); ?></li>
                                            <?php endif;?>
                                            
                                        </ul>
                                    </div>
                                    <a href="<?php echo get_the_permalink($case); ?>" class="link">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

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
                <?php echo do_shortcode('[contact-form-7 id="326" title="Форма на главной"]');  ?>
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

<?php       } ?>

<?php get_footer();  ?>