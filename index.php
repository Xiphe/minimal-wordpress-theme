<?php get_template_part( 'header' ); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php if ( have_posts() ) : ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', get_post_format() ); ?>
					<?php if ( is_single() ) : ?>
						<?php comments_template(); ?>
					<?php endif; ?>
				<?php endwhile; ?>

			<?php else : ?>
			<?php endif ; ?>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_template_part( 'footer' ); ?>