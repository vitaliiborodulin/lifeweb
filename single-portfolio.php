<?php get_header(); ?>


<div class="text-1">
    <div class="container">

		<?php if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<div class="breadcrumb py-2">','</div>' );
			} ?>
		
        <div class="row">
			<?php if(have_posts()): 
					while(have_posts()): the_post(); ?>
						<div class="col-lg-10">
							<h2><?php the_title() ?></h2>
							
							<span><?php the_content() ?></span>
						</div>
					<?php endwhile; ?>
			<?php endif; ?>
		</div>
    </div>
</div>

<?php get_footer(); ?>