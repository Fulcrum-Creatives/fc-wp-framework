<?php get_header(); ?>
<main id="main" class="body__content" role="main">
    <?php 
    while ( have_posts() ) : the_post();
    	get_template_part( 'template-parts/content-single' ); 
    endwhile; 
	?>
</main>
<?php get_footer(); ?>