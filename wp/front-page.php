<?php get_header(); ?>

        <main>
			<!-- fv -->
            <?php get_template_part('template-parts/fv'); ?>

			<div class="main__contents">
				<div class="main__container">
					<div class="main__inner">
						<!-- service -->
                        <?php get_template_part('template-parts/service'); ?>
						<!-- flow -->
                        <?php get_template_part('template-parts/flow'); ?>
						<!-- profile -->
                        <?php get_template_part('template-parts/profile'); ?>
						<!-- contact -->
                        <?php get_template_part('template-parts/contact'); ?>
                    </div>
				</div>
			</div>
		</main>

<?php get_footer(); ?>
