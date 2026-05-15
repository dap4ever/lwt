import * as bootstrap from 'bootstrap';
import './main.scss';

(function () {
	'use strict';

	// --- Search form validation ---
	[].forEach.call(document.querySelectorAll('.search-form'), (el) => {
		el.addEventListener('submit', function (e) {
			var search = el.querySelector('input');
			if (search.value.length < 1) {
				e.preventDefault();
				search.focus();
			}
		});
	});

	// --- Bootstrap Popovers ---
	var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
	popoverTriggerList.map(function (popoverTriggerEl) {
		return new bootstrap.Popover(popoverTriggerEl, { trigger: 'focus' });
	});

	// --- Navbar scroll effect ---
	var navbar = document.getElementById('lwt-navbar');
	if (navbar) {
		var updateNavbar = function () {
			if (window.scrollY > 80) {
				navbar.classList.add('navbar-scrolled');
			} else {
				navbar.classList.remove('navbar-scrolled');
			}
		};
		window.addEventListener('scroll', updateNavbar, { passive: true });
		updateNavbar();
	}

	// --- Scroll indicator click ---
	document.querySelectorAll('.scroll-indicator').forEach(function (scrollIndicator) {
		scrollIndicator.addEventListener('click', function () {
			var targetSelector = scrollIndicator.getAttribute('data-scroll-target');
			var heroSection = scrollIndicator.closest('.hero-section');
			var target = targetSelector ? document.querySelector(targetSelector) : null;

			if (!target && heroSection) {
				target = heroSection.nextElementSibling;
				while (target && target.tagName && target.tagName.toLowerCase() !== 'section') {
					target = target.nextElementSibling;
				}
			}

			if (!target) {
				return;
			}

			var headerOffset = navbar ? navbar.offsetHeight : 0;
			var targetTop = target.getBoundingClientRect().top + window.pageYOffset - headerOffset;

			window.scrollTo({
				top: Math.max(targetTop, 0),
				behavior: 'smooth',
			});
		});
	});

	// --- Counter animation ---
	function animateCounter(el) {
		var target = parseInt(el.dataset.target, 10);
		var duration = 2000;
		var step = target / (duration / 16);
		var current = 0;
		var timer = setInterval(function () {
			current += step;
			if (current >= target) {
				current = target;
				clearInterval(timer);
			}
			el.textContent = Math.floor(current);
		}, 16);
	}

	var counterObserver = new IntersectionObserver(function (entries) {
		entries.forEach(function (entry) {
			if (entry.isIntersecting && !entry.target.classList.contains('counted')) {
				entry.target.classList.add('counted');
				animateCounter(entry.target);
			}
		});
	}, { threshold: 0.5 });

	document.querySelectorAll('.counter-number').forEach(function (el) {
		counterObserver.observe(el);
	});

	// --- Scroll animations (fade-in-up) ---
	var scrollObserver = new IntersectionObserver(function (entries) {
		entries.forEach(function (entry) {
			if (entry.isIntersecting) {
				entry.target.classList.add('animated');
				scrollObserver.unobserve(entry.target);
			}
		});
	}, { threshold: 0.15 });

	document.querySelectorAll('.animate-on-scroll').forEach(function (el) {
		scrollObserver.observe(el);
	});

	// --- Portfolio filter ---
	var filterBtns = document.querySelectorAll('.filter-btn');
	if (filterBtns.length) {
		filterBtns.forEach(function (btn) {
			btn.addEventListener('click', function () {
				filterBtns.forEach(function (b) { b.classList.remove('active'); });
				btn.classList.add('active');

				var filter = btn.dataset.filter;
				document.querySelectorAll('.portfolio-item').forEach(function (item) {
					if (filter === 'all' || item.dataset.category === filter) {
						item.style.display = 'block';
					} else {
						item.style.display = 'none';
					}
				});
			});
		});
	}

})();
