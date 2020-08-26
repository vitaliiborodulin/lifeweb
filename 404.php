<?php get_header(); ?>


<div class="text-1">
    <div class="container">

        <?php if ( function_exists('yoast_breadcrumb') ) {
			yoast_breadcrumb( '<div class="breadcrumb py-2">','</div>' );
        } ?>
        
        <div class="row justify-content-center">
            <h2>Страница не найдена</h2>
		</div>
    </div>
</div>


<?php get_footer(); ?>