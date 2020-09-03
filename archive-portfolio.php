<?php
/*
Template Name: Portfolio List
*/

?>

<?php get_header();  ?>

<?php if (pll_current_language() == 'en') { ?>

<div class="text-1">
    <div class="container">

		<?php if ( function_exists('yoast_breadcrumb') ) {
			yoast_breadcrumb( '<div class="breadcrumb py-2">','</div>' );
		} ?>

        <div class="row">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<div class="col-12">
				<div class="card">
					<div class="row">
						<div class="col-md-4 mb-3">
							<div class="card-img">
								<a href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail('case-thumb', ['class' => 'card-img']);  ?>
								</a>
							</div>
						</div>
						<div class="col-md-8">
							<div class="card-body px-4">
								<h2 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
								<?php if( get_field('podzagolovok_kejsa_en') ): ?> 
									<h3><?php the_field('podzagolovok_kejsa_en'); ?></h3>
								<?php endif;?>
								<div class="card-text"><?php the_field('tekst_pro_kejs_na_stranicze_portfolio_en'); ?></div>
								<div class="card-text text-right"><a href="<?php the_permalink(); ?>">Read more</a></div>

							</div>
						</div>
					</div>
				</div>
				<hr class="my-5">
			</div>
		
			<?php endwhile; ?>

		</div>

		<!-- Пагинация -->
		<?php the_posts_pagination();?>
			
			<!-- Если записей в цикле нет — цикл не сработал (else) -->
			<?php else: ?>
		
			<p>No cases in portfolio.</p>
		
		<?php endif; ?>

    </div>
</div>

<?php } elseif (pll_current_language() == 'sr' ) { ?>

	<div class="text-1">
		<div class="container">

			<?php if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<div class="breadcrumb py-2">','</div>' );
			} ?>

			<div class="row">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<div class="col-12">
					<div class="card">
						<div class="row">
							<div class="col-md-4 mb-3">
								<div class="card-img">
									<a href="<?php the_permalink(); ?>">
										<?php the_post_thumbnail('case-thumb', ['class' => 'card-img']);  ?>
									</a>
								</div>
							</div>
							<div class="col-md-8">
								<div class="card-body px-4">
									<h2 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
									<?php if( get_field('podzagolovok_kejsa_sr') ): ?> 
										<h3><?php the_field('podzagolovok_kejsa_sr'); ?></h3>
									<?php endif;?>
									<div class="card-text"><?php the_field('tekst_pro_kejs_na_stranicze_portfolio_sr'); ?></div>
									<div class="card-text text-right"><a href="<?php the_permalink(); ?>">Читати</a></div>

								</div>
							</div>
						</div>
					</div>
					<hr class="my-5">
				</div>
			
				<?php endwhile; ?>

			</div>

			<!-- Пагинация -->
			<?php the_posts_pagination();?>
				
				<!-- Если записей в цикле нет — цикл не сработал (else) -->
				<?php else: ?>
			
				<p>No cases in portfolio.</p>
			
			<?php endif; ?>

		</div>
	</div>

<?php } else { ?>

	<div class="text-1">
    	<div class="container">

		<?php if ( function_exists('yoast_breadcrumb') ) {
			yoast_breadcrumb( '<div class="breadcrumb py-2">','</div>' );
		} ?>

        <div class="row">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<div class="col-12">
				<div class="card">
					<div class="row">
						<div class="col-md-4 mb-3">
							<div class="card-img">
								<a href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail('case-thumb', ['class' => 'card-img']);  ?>
								</a>
							</div>
						</div>
						<div class="col-md-8">
							<div class="card-body px-4">
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
				<hr class="my-5">
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

<?php       } ?>

<?php get_footer();  ?>