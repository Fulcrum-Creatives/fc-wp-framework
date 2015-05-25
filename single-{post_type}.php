<?php get_header(); ?>
<main id="main" class="body__content" role="main">
    <?php 
    while ( have_posts() ) : the_post();
    	get_template_part( 'template-parts/content-single' ); 
    	fcwp_posts_pagination();
    	if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;
    endwhile; 
	?>
</main>
<?php get_footer(); ?>