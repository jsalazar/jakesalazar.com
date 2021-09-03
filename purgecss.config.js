module.exports = {
    content: ['dist/**/*.html'],
    css: ['node_modules/bootstrap/dist/css/bootstrap.min.css'],
    safelist: ['text-light-green', 'me-3', 'pe-lg-5', 'ps-lg-0', 'fade', 'show', /^modal/],
    output: 'dist/styles/vendor.css'
}