<div class="edit"><?php edit_post_link( __( 'Edit', FCWP_TAXDOMAIN ), '<span class="edit__link">', '</span>' ); ?></div>
<article id="post-<?php the_ID(); ?>" <?php post_class('entry search'); ?> aria-labelledby="section-heading-<?php the_ID(); ?>" role="article">
	<header class="entry__header">
		<h1 class="entry__title" id="section-heading-<?php the_ID(); ?>">
			<a href="<?php the_permalink(); ?>" rel="bookmark">
				<?php the_title(); ?>
			</a>
		</h1>
		<div class="entry__meta">
		</div>
	</header>
	<section class="entry__content">
		<?php the_excerpt(); ?>
	</section>
	<footer class="entry__footer">
	</footer>
</article>