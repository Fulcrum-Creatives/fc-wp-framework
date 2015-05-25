<section class="no-results not-found" aria-labelledby="section-heading-no-results">
	<header class="page__header">
		<h1 class="entry__title" id="section-heading-no-results">
			<?php esc_html_e( 'Nothing Found', FCWP_TAXDOMAIN ); ?>
		</h1>
	</header>
	<section class="entry__content">
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
			<p><?php printf( esc_html__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', FCWP_TAXDOMAIN ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>
		<?php elseif ( is_search() ) : ?>
			<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', FCWP_TAXDOMAIN ); ?></p>
			<?php get_search_form(); ?>
		<?php else : ?>
			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', FCWP_TAXDOMAIN ); ?></p>
			<?php get_search_form(); ?>
		<?php endif; ?>
	</section>
	<footer class="entry__footer">
	</footer>
</section>