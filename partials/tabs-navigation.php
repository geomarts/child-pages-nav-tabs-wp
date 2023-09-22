<?php
$child_pages      = $args['child_pages'];
$current_page_key = array_search( get_the_ID(), array_column( $child_pages, 'ID' ) );
$prev_page        = $child_pages[ $current_page_key - 1 ];
$next_page        = $child_pages[ $current_page_key + 1 ];
?>

<section class="section-tabs-navigation">
	<div class="container container-sm">
		<div class="navigation">
			<h2 class="screen-reader-text">
				<?php esc_html_e( 'Company Pages Pagination', 'playground' ); ?>
			</h2>
			<?php if ( $prev_page ) : ?>
				<a class="previous" href="<?php echo esc_url( get_permalink( $prev_page ) ); ?>">
					<svg width="24" height="24" aria-hidden="true">
						<use xlink:href="#circle-chevron-left"></use>
					</svg>
					<?php
					//esc_html_e( 'Previous', 'playground' );
					echo esc_html( get_the_title( $prev_page ) );
					?>
				</a>
				<?php
			endif;
			if ( $next_page ) :
				?>
				<a class="next" href="<?php echo esc_url( get_permalink( $next_page ) ); ?>">
					<?php
					//esc_html_e( 'Next', 'playground' );
					echo esc_html( get_the_title( $next_page ) );
					?>
					<svg width="24" height="24" aria-hidden="true">
						<use xlink:href="#circle-chevron-right"></use>
					</svg>
				</a>
			<?php endif; ?>
		</div>
	</div>
</section>
