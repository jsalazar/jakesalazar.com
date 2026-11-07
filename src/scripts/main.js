// Home page behavior. Astro bundles and minifies this file.
import Splide from '@splidejs/splide';
import 'bootstrap/js/dist/collapse'; // mobile navbar toggle
import 'bootstrap/js/dist/carousel'; // celebrity endorsements

// Scrolling company-logo strip
new Splide('.splide', {
  autoplay: true,
  speed: 800,
  type: 'loop',
  autoWidth: true,
  focus: 'center',
  arrows: false,
  pagination: false,
}).mount();

// Smooth scroll for in-page nav links
document.querySelectorAll('.escrollee').forEach((link) => {
  link.addEventListener('click', (event) => {
    document.querySelector(link.hash)?.scrollIntoView({ behavior: 'smooth' });
    event.preventDefault();
  });
});

// Footer copyright year
const year = document.getElementById('copyright-yr');
if (year) year.textContent = String(new Date().getFullYear());
