<?php get_header();  ?>

<div class="text-1">
    <div class="container">

        <div class="row justify-content-center">
            <?php $cases = get_posts(['post_type' => 'portfolio', 'numberposts' => -1]);?>
            <?php foreach($cases as $case): ?>
						<div class="col-lg-10">
							<a href="<?php echo get_the_permalink($case); ?>">
								<h2><?php echo get_the_title($case); ?></h2>
							</a>
							
							<span><?php the_excerpt() ?></span>
						</div>
            <?php endforeach; ?>

		</div>
    </div>
</div>

<?php get_footer();  ?>