<?php get_header(); ?>
<main id="main" class="body__content" role="main">
    <?php if ( have_posts() ) : ?>
    	<header class="entry__header">
    		<?php fcwp_archive_title(); ?>
		</header>
    <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'template-parts/content' ); ?>
    <?php endwhile; else: ?>
    	<?php get_template_part( 'template-parts/content', 'none' ); ?>
	<?php endif; wp_reset_postdata(); ?>
</main>
<?php get_footer(); ?>