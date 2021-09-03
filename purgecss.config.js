module.exports = {
    content: ['dist/**/*.html'],
    css: ['node_modules/bootstrap/dist/css/bootstrap.min.css'],
    safelist: ['me-3', 'pe-lg-5', 'ps-lg-0', 'fade', 'show', /^modal/, 'carousel.pointer-event', 'carousel-item-start', 'carousel-item-next', 'carousel-item-prev', 'carousel-item-next:not(.carousel-item-start)', 'carousel-item-prev:not(.carousel-item-end)', 'carousel-fade', 'carousel-item.active', 'carousel-item-next.carousel-item-start', 'carousel-item-prev.carousel-item-end', 'active.carousel-item-start', 'active.carousel-item-end', 'active.carousel-item', 'carousel-fade', 'carousel-fade .carousel-item', 'carousel-fade .carousel-item.active', 'carousel-fade .carousel-item-next.carousel-item-start', 'carousel-fade .carousel-item-prev.carousel-item-end', 'carousel-fade .active.carousel-item-start', 'carousel-fade .active.carousel-item-end'],
    output: 'dist/styles/vendor.css'
}

