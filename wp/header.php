<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header class="header">
		<div class="header__inner container">

			<!-- ロゴ -->
			<h1 class="header__logo">
				<a href="<?php echo esc_url(home_url('/')); ?>">
					<img
						src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/logo.svg'); ?>"
						alt="Bloomline creative Studio" />
				</a>
			</h1>

			<!-- PCナビ -->
			<nav class="header__nav">
				<?php
				wp_nav_menu([
					'theme_location' => 'global_pc',
					'container'      => false,
					'menu_class'     => 'header__menu',
					'fallback_cb'    => false,
					'walker'         => new Bloomline_Walker_Nav_Menu(), // JP(title)+EN(description)
				]);
				?>

				<!-- CTAは別タブで/contactへ -->
				<a
					href="<?php echo esc_url(home_url('/contact/')); ?>"
					class="header__cta"
					target="_blank"
					rel="noopener noreferrer">
					お問い合わせ
					<span>Contact</span>
				</a>
			</nav>

		</div>
	</header>

	<!-- ハンバーガー -->
	<button class="hamburger" aria-label="menu" aria-controls="drawer">
		<span></span>
		<span></span>
		<span></span>
	</button>
	<!-- SPフルスクリーンメニュー -->
	<div class="drawer" id="drawer">
		<div class="drawer__header">
			<div class="header__logo">
				<img
					src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg"
					alt="Bloomline creative Studio" />
			</div>
		</div>

		<nav class="drawer__nav">

			<?php
			wp_nav_menu([
				'theme_location' => 'global_sp',
				'container'      => false,
				'menu_class'     => 'drawer__menu',
				'fallback_cb'    => false,
			]);
			?>

			<!-- Drawer内にもContact導線（別タブ） -->
			<a
				class="drawer__contact"
				href="<?php echo esc_url(home_url('/contact/')); ?>"
				target="_blank"
				rel="noopener noreferrer">
				Contact
			</a>
		</nav>

		<div class="drawer__footer">
			<div class="drawer__sns">
				<a
					href="https://x.com/BloomlineSakura?s=20"
					class="sns-icon x-icon"
					target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sns-x.svg" alt="X" /></a>
				<a
					href="https://www.instagram.com/bloomline_creative/"
					class="sns-icon insta-icon"
					target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sns-ig.svg" alt="Instagram" /></a>
			</div>
			<p class="drawer__copy">
				&copy; 2026 Bloomline creative Studio
			</p>
		</div>
	</div>