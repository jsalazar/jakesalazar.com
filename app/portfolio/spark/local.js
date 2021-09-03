$(document).ready(function() {

    // onLoad
    $('#section-graduate').hide();
    var programSections = $('.program-choices'),
        programButtons = $('.program-choice');

    // handler for program choice buttons
    programButtons.on('click', function(event) {

        event.preventDefault();
        // update highlighted button
        programButtons.removeClass('active');
        $(this).addClass('active');

        // capture section to display
        var programChoice = $(this).data('choice');

        if (programChoice == 'section-graduate') {
            $('.ribbon').addClass('is-flipped');
        }
        else {
            $('.ribbon').removeClass('is-flipped');
        }

        // hide all sections
        programSections.fadeOut('slow');

        // display requested section
        $('#'+programChoice).fadeIn('slow');

        // scroll into view
        $('html, body').animate({scrollTop: $('.ribbon-container').offset().top}, 1000, function() {

        });

    });

}); // end $(document).ready(function(){})