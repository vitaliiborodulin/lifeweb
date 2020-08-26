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
							<a href="<?php the_permalink() ?>">
								<h2><?php the_title() ?></h2>
							</a>
							
							<span><?php the_excerpt() ?></span>
						</div>
					<?php endwhile; ?>
			<?php else: ?>
				Записей нет!
			<?php endif; ?>

		</div>
		<?php the_posts_pagination(); ?>
    </div>
</div>


<?php get_footer(); ?>