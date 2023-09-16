<?php
get_header();
?>

<main class="site-main">
	<?php
	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post();
			?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="container container-sm">
					<?php the_content(); ?>
					<a class="btn-contact" href="">
						<?php esc_html_e( 'Contact us', 'playground' ); ?>
						<svg class="shape" aria-hidden="true">
							<use href="#button"></use>
						</svg>
						<svg width="24" height="24" aria-hidden="true">
							<use href="#send"></use>
						</svg>
					</a>
				</div>
			</article>
			<?php
		endwhile;
	endif;
	?>
</main>

<?php
get_footer();
