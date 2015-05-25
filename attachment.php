<?php get_header(); ?>
<main id="main" class="body__content" role="main">
    <?php if ( have_posts() ) : ?>
    	<div class="edit">
			<?php edit_post_link( __( 'Edit', FCWP_TAXDOMAIN ), '<span class="edit__link">', '</span>' ); ?>
		</div>
    	<header class="page__header">
    		<h1 class="page__title" id="section-heading-<?php the_ID(); ?>">
				<?php the_title(); ?>
			</h1>
		</header>
    <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'template-parts/content', 'attachment' ); ?>
        <footer class="entry__footer">
		</footer>
    <?php endwhile; else: ?>
    	<?php get_template_part( 'template-parts/content', 'none' ); ?>
	<?php endif; wp_reset_postdata(); ?>
</main>
<?php get_footer(); ?>