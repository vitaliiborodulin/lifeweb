<?php get_header(); ?>


<div class="text-1">
    <div class="container">

        <?php if ( function_exists('yoast_breadcrumb') ) {
			yoast_breadcrumb( '<div class="breadcrumb py-2">','</div>' );
        } ?>
        
        <?php if (pll_current_language() == 'en') { ?>

        <div class="row justify-content-center">
            <h2>Page not found</h2>
        </div>

        <?php } elseif (pll_current_language() == 'sr' ) { ?>

        <div class="row justify-content-center">
            <h2>Страница није пронађена</h2>
        </div>

        <?php } else { ?>
        
        <div class="row justify-content-center">
            <h2>Страница не найдена</h2>
        </div>
        
        <?php       } ?>

    </div>
</div>


<?php get_footer(); ?>