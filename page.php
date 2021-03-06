<?php get_header(); ?>


<div class="text-1">
    <div class="container">

		<?php if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<div class="breadcrumb py-2">','</div>' );
			} ?>
		
        <div class="row">
			<?php if(have_posts()): 
					while(have_posts()): the_post(); ?>
						<div class="col-12">
							<h2><?php the_title() ?></h2>
							
							<div class="inner-page-list mb-3 py-3">
									<div class="row">
										<div class="col-12">
											<?php $arg = [
											'depth'        => 1,
											'title_li'     => null,
											'child_of' => get_the_ID() 
											]; //здесь выводим список дочерних страниц если они есть?>
											<ul>
												<?php wp_list_pages( $arg ) ?>
											</ul>
										</div>
									</div>
							</div>

							<span><?php the_content() ?></span>
						</div>
					<?php endwhile; ?>
			<?php endif; ?>
		</div>
    </div>
</div>



<?php get_footer(); ?>