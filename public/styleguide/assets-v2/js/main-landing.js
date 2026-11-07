$(document).ready(function() {

    // cache some vars
    var soeNavLink = $('.soe-nav-link'),
        navbarSOE = $('.navbar-soe'),
        navbarSOEHeight = 58,
        fixedTop = $('.fixed-top'),
        navbarBrand = $('.navbar-brand'),
        navbarPosition,
        isScrolling,
        scrollAnchor,
        scrollSections,
        currentSection,
        sectionID;

    // scrollSpy support
    if (soeNavLink.length) {
        scrollSections = soeNavLink.map(function() {
            return $($(this).attr("href"));
        });
        // console.log(scrollSections);
    }


    // control scrolling fixed top navbar
    $(window).on('scroll', function() {

        if (navbarSOE.offset().top > navbarSOEHeight) {
            fixedTop.addClass('navbar-soe-collapse');
            navbarBrand.removeClass('soe-logo-m-soe').addClass('soe-logo-m-edu');
        }

        if (navbarSOE.offset().top > 500) {
                navbarSOE.addClass('larger-font');
        }

        // user has scrolled back to top
        if (navbarSOE.offset().top < navbarSOEHeight) {
            fixedTop.removeClass('navbar-soe-collapse');
            navbarBrand.removeClass('soe-logo-m-edu').addClass('soe-logo-m-soe');
            navbarSOE.removeClass('larger-font');
            // reset active link indicator
            // soeNavLink.removeClass('soe-nav-link-active');
        }

        // faux deBounce to check when scrolling has stopped
        window.clearTimeout(isScrolling);

        // set a timeout to run after scrolling ends
        isScrolling = setTimeout(function() {

            // check if user has scrolled to top of page
            if (navbarSOE.offset().top < navbarSOEHeight) {
                // reset active link indicator
                soeNavLink.removeClass('soe-nav-link-active');
                console.log('active link removed...');
            }

            // scrollSpy support
            if (soeNavLink.length) {

                navbarPosition = $(this).scrollTop() + navbarSOEHeight;

                // check position of all sections detected
                // determine which section is scrolling past top nav bar area
                currentSection = scrollSections.map(function() {
                    if (($(this).offset().top - navbarSOEHeight) < navbarPosition) {
                        return this;
                    }
                });

                // check if any sections have been detected within view
                if (currentSection.length) {
                    // grab last element in currentSection array because it is most recent in passing
                    sectionID = currentSection[currentSection.length - 1];
                    // clear any active links
                    soeNavLink.removeClass('soe-nav-link-active');
                    console.log('active link removed...2...');
                    // assign new active link; sectionID arrives as an array, so simply refer to 1st element
                    $('a[data-section='+sectionID[0].id+']').addClass('soe-nav-link-active');
                }

            } // ENDS: if (soeNavLink.length) {


        }, 100); // ENDS: isScrolling = setTimeout()

    }); // ENDS: $(window).on('scroll')

    // scroll to individual sections
    soeNavLink.on('click', function(e) {

        e.preventDefault();
        scrollAnchor = $(this);
console.log(scrollAnchor);
        $('html, body').stop().animate({scrollTop: $(scrollAnchor.attr('href')).offset().top - navbarSOEHeight}, 'slow');
        soeNavLink.removeClass('soe-nav-link-active');
        scrollAnchor.addClass('soe-nav-link-active');

    });

}); /* ENDS: $(document).ready(function() { */