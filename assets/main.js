// Webpack Imports
import * as bootstrap from 'bootstrap';

(function () {
	'use strict';

	// Focus input if Searchform is empty
	[].forEach.call(document.querySelectorAll('.search-form'), (el) => {
		el.addEventListener('submit', function (e) {
			var search = el.querySelector('input');
			if (search.value.length < 1) {
				e.preventDefault();
				search.focus();
			}
		});
	});

	// Initialize Popovers: https://getbootstrap.com/docs/5.0/components/popovers
	var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
	var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
		return new bootstrap.Popover(popoverTriggerEl, {
			trigger: 'focus',
		});
	});
})();

function addBlurInClassToElements() {
	var elements = document.getElementsByClassName('blur');

	function isElementInViewport(element) {
		var rect = element.getBoundingClientRect();
		return (
			rect.top >= 0 &&
			rect.left >= 0 &&
			rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
			rect.right <= (window.innerWidth || document.documentElement.clientWidth)
		);
	}

	function handleScroll() {
		for (var i = 0; i < elements.length; i++) {
			var element = elements[i];
			if (isElementInViewport(element)) {
				element.classList.add('blur-in');
			}
		}
	}

	window.addEventListener('scroll', handleScroll);
	handleScroll();
}
function addBlendInClassToElements() {
	var elements = document.getElementsByClassName('blend');

	function isElementInViewport(element) {
		var rect = element.getBoundingClientRect();
		return (
			rect.top >= 0 &&
			rect.left >= 0 &&
			rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
			rect.right <= (window.innerWidth || document.documentElement.clientWidth)
		);
	}

	function handleScroll() {
		for (var i = 0; i < elements.length; i++) {
			var element = elements[i];
			if (isElementInViewport(element)) {
				element.classList.add('blend-in');
			}
		}
	}

	window.addEventListener('scroll', handleScroll);
	handleScroll();
}

function adjustBackgroundSize() {
	var element = document.querySelector('.moving-bg-bar');

	function handleScroll() {
		var elementRect = element.getBoundingClientRect();
		var windowHeight = window.innerHeight;
		var elementTop = elementRect.bottom;
		var scrollPercentage = ((windowHeight - elementTop) / windowHeight) * 100;
		element.style.backgroundSize = (scrollPercentage) + '% 2px';
	}
	window.addEventListener('scroll', handleScroll);
}

function addScaleTransformToBanner() {
	var banner = document.querySelector('.animate-banner');
	var bannerImg = banner.querySelector('img');

	function calculatePositionPercentage() {
		var bannerRect = banner.getBoundingClientRect();
		var windowHeight = window.innerHeight;
		var bannerTop = bannerRect.top;

		var positionPercentage = ((windowHeight - bannerTop) / windowHeight) * 100;
		return positionPercentage.toFixed(2); // Zaokrąglamy wynik do dwóch miejsc po przecinku
	}

	function updateTransformScale() {
		var positionPercentage = calculatePositionPercentage();
		bannerImg.style.transform = 'scale(' + ((positionPercentage / 500) + 1) + ')';
	}

	// Wywołujemy funkcję aktualizacji transformacji przy załadowaniu strony i przy zmianie rozmiaru okna
	updateTransformScale();
	window.addEventListener('scroll', updateTransformScale);
}

addEventListener("DOMContentLoaded", (event) => {
	AOS.init();
	addBlurInClassToElements();
	addBlendInClassToElements();
	adjustBackgroundSize();
	addScaleTransformToBanner();
});
