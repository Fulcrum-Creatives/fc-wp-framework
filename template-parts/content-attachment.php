<article id="post-<?php the_ID(); ?>" <?php post_class('entry'); ?> aria-labelledby="section-heading-<?php the_ID(); ?>" role="article">
	<header class="entry__header">
		<div class="entry__meta">
			<?php fcwp_published_date( array( 'show_modified' => true ) ); ?>
			<?php fcwp_display_author(); ?>
			<?php fcwp_list_terms(); ?>
			<?php fcwp_list_terms( array( 'is_linked' => false, 'text' => 'Tag: ', 'text_plural' => 'Tags: ', 'taxonomies' => array( 'post_tag' ) ) ); ?>
		</div>
	</header>
	<div class="entry__content">
		<span class="content__attachment">
			<?php
			$attachments = array_values( get_children( array( 'post_parent' => $post->post_parent, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => 'ASC', 'orderby' => 'menu_order ID' ) ) );
				foreach ( $attachments as $k => $attachment ) {
				if ( $attachment->ID == $post->ID )
				break;
			}
			$k++;
			// If there is more than 1 attachment in a gallery
			if ( count( $attachments ) > 1 ) {
				if ( isset( $attachments[ $k ] ) ) {
				// get the URL of the next image attachment
					$next_attachment_url = get_attachment_link( $attachments[ $k ]->ID );
				} else {
				// or get the URL of the first image attachment
					$next_attachment_url = get_attachment_link( $attachments[ 0 ]->ID );
				}
			} else {
				// or, if there's only 1 image, get the URL of the image
				$next_attachment_url = wp_get_attachment_url();
			}
			?>
			<a href="<?php echo $next_attachment_url; ?>" title="<?php echo esc_attr( get_the_title() ); ?>" rel="attachment">
				<?php
				$attachment_size = apply_filters( 'shape_attachment_size', array( 1200, 1200 ) ); // Filterable image size.
				echo wp_get_attachment_image( $post->ID, $attachment_size );
				?>
			</a>
		</span>
	</div>
	<footer class="entry__footer">
	</footer>
</article>