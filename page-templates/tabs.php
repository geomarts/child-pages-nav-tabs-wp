<?php
/* Template Name: Tabs Page */
get_header();

$parent_id    = wp_get_post_parent_id();
$parent_title = get_the_title( $parent_id );
$child_pages  = get_pages(
	array(
		'parent' => $parent_id,
	)
);
?>

<main class="site-main">
	<?php
	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post();
			?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<section class="section-with-tabs">
					<div class="container container-sm">
						<?php
						if ( ! empty( $child_pages ) ) :
							/*BREADCRUMBS*/
							?>
							<ul class="breadcrumbs">
								<li class="breadcrumb">
									<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
										<?php esc_html_e( 'Home', 'playground' ); ?>
									</a>
								</li>
								<li class="breadcrumb">
									<?php echo esc_html( $parent_title ); ?>
								</li>
								<li class="breadcrumb">
									<?php the_title(); ?>
								</li>
							</ul>

							<?php /*TABS*/ ?>
							<div class="tabs-wrapper">
								<ul class="tabs">
									<?php
									foreach ( $child_pages as $key => $child_page ) :
										$child_page_id   = $child_page->ID;
										$child_page_link = get_page_link( $child_page_id );
										$active          = get_permalink() === $child_page_link ? ' active' : '';
										?>
										<li class="tab<?php echo $active; ?>">
											<a class="tab-link" href="<?php echo esc_url( $child_page_link ); ?>">
												<?php echo esc_html( $child_page->post_title ); ?>
											</a>
										</li>
									<?php endforeach; ?>
								</ul>
							</div>
						<?php endif; ?>
					</div>
				</section>

				<?php /*TAB CONTENT*/ ?>
				<section class="section-with-content">
					<div class="container container-sm">
						<?php the_content(); ?>
					</div>
				</section>


				<?php
				/*NAVIGATION*/
				get_template_part( 'partials/tabs-navigation', null, array( 'child_pages' => $child_pages ) );
				?>
			</article>
			<?php
		endwhile;
	endif;
	?>
</main>

<?php
get_footer();
