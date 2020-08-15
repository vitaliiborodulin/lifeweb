<?php get_header(); ?>


<div class="text-1">
    <div class="container">
        <div class="row justify-content-center">
			<?php if(have_posts()): 
					while(have_posts()): the_post(); ?>
						<div class="col-lg-10">
							<a href="<?php the_permalink() ?>">
								<?php the_post_thumbnail('thumbnail') ?>
							</a>
							<h2><?php the_title() ?></h2>
							<span><?php the_excerpt() ?></span>
						</div>
					<?php endwhile; ?>
			<?php else: ?>
				Записей нет!
			<?php endif; ?>

			<?php the_posts_pagination() ?>
		</div>
    </div>
</div>


<?php get_footer(); ?>

<div class="text-1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <p>Каждый проект является уникальным. Мы подбираем для вас оптимальное решение, применяя современные методики и инструменты для улучшения качества ваших продуктов.</p>
                <p>С нами сотрудничают крупнейшие российские телекоммуникационные компании, ведущие системные интеграторы и разработчики программных продуктов, компании банковского сектора.</p>
            </div>
        </div>
    </div>
</div>