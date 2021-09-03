// for small carousel
new Splide( '.splide', {
  autoplay: true,
  speed: 800,
  type: 'loop',
  autoWidth: true,
  focus: 'center',
  arrows: false,
  pagination: false,
}).mount();


// Scroll certain amounts from current position 
/* 
window.scrollBy({ 
  top: 100, // can be negative value
  left: 0, 
  behavior: 'smooth' 
}); 
*/


function scrollToSection(section) {
  document.querySelector(section).scrollIntoView({ 
    behavior: 'smooth' 
  })
}

document.querySelectorAll('.escrollee').forEach(headerBTN => {
  headerBTN.addEventListener('click', event => {
    scrollToSection(headerBTN.hash)
    event.preventDefault()
  })
})

/* 
document.querySelector('.back-to-top').addEventListener('click', event => {
  // same as scrollTo
  window.scroll({
    top: 0, 
    left: 0, 
    behavior: 'smooth'
  })
  event.preventDefault()
})
 */

// Footer copyright year onLoad
document.getElementById('copyright-yr').appendChild(document.createTextNode(new Date().getFullYear()));