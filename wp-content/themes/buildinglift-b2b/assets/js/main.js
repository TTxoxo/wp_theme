(function () {
	'use strict';
	var toggle = document.querySelector('.bl-menu-toggle');
	var nav = document.querySelector('.bl-header__nav');
	if (toggle && nav) {
		toggle.addEventListener('click', function () {
			var expanded = toggle.getAttribute('aria-expanded') === 'true';
			toggle.setAttribute('aria-expanded', expanded ? 'false' : 'true');
			nav.classList.toggle('is-open');
		});
	}

	var slides = document.querySelectorAll('.bl-home-hero__slide');
	if (!slides.length) return;
	var current = 0;
	var nextBtn = document.querySelector('.bl-hero-next');
	var prevBtn = document.querySelector('.bl-hero-prev');
	var isMobile = window.matchMedia('(max-width: 640px)').matches;

	function showSlide(index) {
		slides[current].classList.remove('is-active');
		current = (index + slides.length) % slides.length;
		slides[current].classList.add('is-active');
	}

	if (nextBtn) nextBtn.addEventListener('click', function () { showSlide(current + 1); });
	if (prevBtn) prevBtn.addEventListener('click', function () { showSlide(current - 1); });

	if (!isMobile && slides.length > 1) {
		setInterval(function () { showSlide(current + 1); }, 5000);
	}
})();
