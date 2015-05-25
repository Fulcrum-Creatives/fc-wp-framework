<div class="edit">
	<?php edit_post_link( __( 'Edit', FCWP_TAXDOMAIN ), '<span class="edit__link">', '</span>' ); ?>
</div>
<article id="post-<?php the_ID(); ?>" <?php post_class('entry single'); ?> aria-labelledby="section-heading-<?php the_ID(); ?>" role="article">
	<header class="entry__header">
			<?php the_title( '<h1 class="entry__title" id="section-heading-<?php the_ID(); ?>">', '</h1>' ); ?>
		<div class="entry__meta">
		</div>
	</header>
	<?php get_template_part( 'includes/image', 'featured' ); ?>
	<section class="entry__content">
		<?php
			the_content();
			fcwp_link_pages( /*array( 'next_or_number' => 'next' )*/ );
			fcwp_posts_pagination();
		?>
	</section>
	<footer class="entry__footer">
		<?php
		if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
			echo '<span class="comments-link">';
			comments_popup_link( esc_html__( 'Leave a comment', '_s' ), esc_html__( '1 Comment', '_s' ), esc_html__( '% Comments', '_s' ) );
			echo '</span>';
		}
		edit_post_link( esc_html__( 'Edit', '_s' ), '<span class="edit-link">', '</span>' );
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;
		?>
	</footer>
</article>