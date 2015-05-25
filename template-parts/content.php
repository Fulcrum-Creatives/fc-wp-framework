<article id="post-<?php the_ID(); ?>" <?php post_class('entry'); ?> aria-labelledby="section-heading-<?php the_ID(); ?>" role="article">
	<header class="entry__header">
		<?php the_title( sprintf( '<h1 class="entry__title" id="section-heading-<?php the_ID(); ?>"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
		<div class="entry__meta">
			<?php fcwp_published_date( array( 'show_modified' => true ) ); ?>
			<?php fcwp_display_author(); ?>
			<?php fcwp_list_terms(); ?>
			<?php fcwp_list_terms( array( 'is_linked' => false, 'text' => 'Tag: ', 'text_plural' => 'Tags: ', 'taxonomies' => array( 'post_tag' ) ) ); ?>
		</div>
	</header>
	<?php get_template_part( 'includes/image', 'featured' ); ?>
	<div class="entry__content">
		<?php the_excerpt(); ?>
	</div>
	<footer class="entry__footer">
	</footer>
</article>