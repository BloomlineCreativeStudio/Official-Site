<?php get_header('simple'); ?>

<main class="contact-page">
	<div class="contact-page__container">
		<div class="section-header">
			<div class="section-header__title">
				<div class="section-header__text">
					<h2 class="section-header__main">Contact</h2>
					<p class="section-header__sub">お問い合わせ</p>
				</div>
			</div>
		</div>
		<p class="contact-page__lead">制作のご依頼やご相談、お見積りなど、まずはお気軽にお声がけください。<br>
			折り返しご連絡いたします。</p>

		<div class="contact-page__formarea">
			<?php echo do_shortcode('[contact-form-7 id="1965c87" title="Contact"]'); ?>
		</div>
	</div>
</main>

<?php get_footer(); ?>