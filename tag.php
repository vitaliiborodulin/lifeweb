<?php get_header(); ?>


<div class="blog-box">
    <div class="container">

		<?php if ( function_exists('yoast_breadcrumb') ) {
			yoast_breadcrumb( '<div class="breadcrumb py-2">','</div>' );
		} ?>

        <div class="row justify-content-center justify-content-md-start">
			<?php if(have_posts()): 
					while(have_posts()): the_post(); ?>

						<div class="col col-8 col-sm-6 col-md-4 col-lg-3 mb-3">
							<article class="blog-item d-flex flex-column">
								<?php if ( has_post_thumbnail()): ?>
								<div class="blog-image">
									<a href="<?php the_permalink() ?>"><img src="<?php the_post_thumbnail_url('case-thumb') ?>" alt=""></a>
								</div>
								<?php endif;  ?>
								<div class="blog-text d-flex flex-column">
									<div class="blog-tags mb-1"><?php the_tags('', ' &#8226; '); ?></div>
									<a href="<?php the_permalink() ?>"><h2 class="blog-title"><?php the_title() ?></h2></a>
									<p class="blog-time mt-auto"><?php the_time('F jS, Y');  ?></p>
								</div>
							</article>
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