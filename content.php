
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php $featured = ( is_sticky() && is_home() && ! is_paged() ); ?>
		<header class="entry-header">
			<?php the_post_thumbnail(); ?>

			<?php if ( is_single() ) : ?>
			<h1 class="entry-title<?php echo $featured ? ' entry-featured' : ''; ?>">
				<?php the_title(); ?>
			</h1>
			<?php else : ?>
			<h1 class="entry-title<?php echo $featured ? ' entry-featured' : ''; ?>">
				<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'xiphe_minimal' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark">
					<?php the_title(); ?>
				</a>
			</h1>
			<?php endif; // is_single() ?>
		</header><!-- .entry-header -->

		<?php if ( is_search() ) : // Only display Excerpts for Search ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
		<?php else : ?>
		<div class="entry-content">
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'xiphe_minimal' ) ); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'xiphe_minimal' ), 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->
		<?php endif; ?>

		<footer class="entry-meta">
			<?php echo Xiphe\minimal\getMetaDate(); 
			$categories_list = get_the_category_list( __( ', ', 'xiphe_minimal' ) );
			if ( ! empty( $categories_list ) ) {
				echo ' | ' . $categories_list;
			}
			$tag_list = get_the_tag_list( '', __( ', ', 'xiphe_minimal' ) );
			if ( ! empty( $tag_list ) ) {
				echo ' | ' . $tag_list;
			}
			if ( comments_open() ):
				echo ' | ';
			?>
				<a href="<?php the_permalink(); ?>#comments" title="<?php echo esc_attr( sprintf( __( 'Comments of %s', 'xiphe_minimal' ), the_title_attribute( 'echo=0' ) ) ); ?>">
					<?php comments_number(); ?></a>
			<?php endif; ?>

			<?php edit_post_link( __( 'Edit', 'xiphe_minimal' ), ' | <span class="edit-link">', '</span>' ); ?>
		</footer><!-- .entry-meta -->
	</article><!-- #post -->
