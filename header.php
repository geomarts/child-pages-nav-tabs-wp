<!doctype html>
<html <?php language_attributes(); ?>>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<?php get_template_part( 'partials/sprites' ); ?>
		<div class="site-wrapper">
			<?php
			get_template_part( 'partials/main-header' );
			?>
