// PC 追従Header

window.addEventListener('load', () => {
	const header = document.querySelector('.header');
	const fv = document.querySelector('#fv');

	console.log('header:', header);
	console.log('fv:', fv);

	if (!header || !fv) {
		console.error('取得失敗');
		return;
	}

	const observer = new IntersectionObserver(
		(entries) => {
			entries.forEach((entry) => {
				if (!entry.isIntersecting) {
					header.classList.add('is-scrolled');
				} else {
					header.classList.remove('is-scrolled');
				}
			});
		},
		{
			threshold: 0,
		},
	);

	observer.observe(fv);
});

// SPハンバーガーメニュー
const hamburger = document.querySelector('.hamburger');
const drawer = document.querySelector('.drawer');

if (hamburger && drawer) {
	hamburger.addEventListener('click', () => {
		hamburger.classList.toggle('is-open'); // バー → X に変形
		drawer.classList.toggle('is-open'); // メニュー開閉
		document.body.classList.toggle('drawer-open'); // 背景スクロール制御など
	});

	// メニュー内リンクで閉じる
	drawer.querySelectorAll('a').forEach((link) => {
		link.addEventListener('click', () => {
			hamburger.classList.remove('is-open');
			drawer.classList.remove('is-open');
			document.body.classList.remove('drawer-open');
		});
	});
}
