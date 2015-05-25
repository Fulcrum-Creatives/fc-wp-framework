<?php if ( has_post_thumbnail() ) : ?>
	<div class="entry__thumbnail">
	    <?php if( !is_single() ) : ?>
		<a href="<?php esc_url( get_permalink() ); ?>" rel="bookmark">
	    	<?php the_post_thumbnail();?>
	    </a>
		<?php else : ?>
			<?php the_post_thumbnail();?>
		<?php endif; ?>
	</div>
<?php endif ?>