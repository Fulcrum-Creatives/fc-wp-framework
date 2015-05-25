<?php get_header(); ?>
<main id="main" class="body__content" role="main">
    <?php 
    if ( have_posts() ) : while ( have_posts() ) : the_post();
        get_template_part( 'template-parts/content' );
    endwhile; 
    	fcwp_pagination('numbered');
    else:
    	get_template_part( 'template-parts/content', 'none' );
	endif; wp_reset_postdata();
    ?>
</main>
<?php get_footer(); ?>