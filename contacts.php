<?php
/*
Template Name: Contacts
*/

?>

<?php get_header('');  ?>

<?php if (pll_current_language() == 'en') { ?>

    <section class="order" id="order">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2>Submit a letter</h2>
                </div>
                <div class="col-md-9 col-lg-7 col-xl-6">
                    <div class="container-form">
                        <?php echo do_shortcode('[contact-form-7 id="329" title="Форма на контактах en"]');  ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
<?php } else { ?>
    
    <section class="order" id="order">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2>Оставить заявку</h2>
                </div>
                <div class="col-md-9 col-lg-7 col-xl-6">
                    <div class="container-form">
                        <?php echo do_shortcode('[contact-form-7 id="328" title="Форма на контактах"]');  ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
        
<?php       } ?>

<?php get_footer();  ?>