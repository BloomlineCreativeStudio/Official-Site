<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header class="header header-simple">
		<div class="header__inner container header-simple__innner ">
			<!-- ロゴ -->
			<h1 class="header__logo">
				<a href="/">
					<img
						src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg"
						alt="Bloomline creative Studio" />
				</a>
			</h1>
		</div>
	</header>