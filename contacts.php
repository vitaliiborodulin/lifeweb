<?php
/*
Template Name: Contacts
*/

?>

<?php get_header('');  ?>

<section class="order" id="order">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Оставить заявку</h2>
            </div>
            <div class="col-md-9 col-lg-7 col-xl-6">
                <div class="container-form">
                    <?php echo do_shortcode('[contact-form-7 id="51" title="Контактная форма на контактах"]');  ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer();  ?>