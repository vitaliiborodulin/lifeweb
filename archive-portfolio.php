<?php
/*
Template Name: Portfolio List
*/

?>

<?php get_header();  ?>

<div class="text-1">
    <div class="container">

		<?php if ( function_exists('yoast_breadcrumb') ) {
			yoast_breadcrumb( '<div class="breadcrumb py-2">','</div>' );
		} ?>

        <div class="row">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<div class="col-lg-10">
				<div class="card mb-5">
					<div class="row align-items-center">
						<div class="col-md-4">
							<div class="card-img">
								<a href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail('case-thumb', ['class' => 'card-img']);  ?>
								</a>
							</div>
						</div>
						<div class="col-md-8">
							<div class="card-body py-2">
								<h2 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
								<?php if( get_field('podzagolovok_kejsa') ): ?> 
									<h3><?php the_field('podzagolovok_kejsa'); ?></h3>
								<?php endif;?>
								<div class="card-text"><?php the_field('tekst_pro_kejs_na_stranicze_portfolio'); ?></div>
								<div class="card-text text-right"><a href="<?php the_permalink(); ?>">Читать</a></div>

							</div>
						</div>
					</div>
				</div>
			</div>
		
			<?php endwhile; ?>

		</div>
		
		<!-- Пагинация -->
		<?php the_posts_pagination();?>
			
			<!-- Если записей в цикле нет — цикл не сработал (else) -->
			<?php else: ?>
		
			<p>Нет постов в цикле.</p>
		
		<?php endif; ?>

    </div>
</div>

<?php get_footer();  ?>