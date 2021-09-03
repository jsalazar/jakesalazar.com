$(document).ready(function() {




    function clearForm(form) {
        // iterate over all of the inputs for the form
        // element that was passed in
        $(':input', form).each(function() {
            var type = this.type;
            var tag = this.tagName.toLowerCase();
            // it's ok to reset the value attr of text inputs, password inputs, and textareas
            if (type === 'text' || type === 'password' || tag === 'textarea') {
                this.value = '';
            }
            // checkboxes and radios need to have their checked state cleared
            // but should *not* have their 'value' changed
            else if (type === 'checkbox' || type === 'radio') {
                this.checked = false;
            }
            // select elements need to have their 'selectedIndex' property set to -1
            // (this works for both single and multiple select elements)
            else if (tag === 'select') {
                this.selectedIndex = -1;
            }
        });
    }

    $('#tellMeMore').submit(function() {
        // disable form submit button
        $('input[type=submit]', this).attr('disabled', 'disabled');
        //show loading bar
        // $('#loading').css({'visibility':'visible','opacity':'1','display':'block'});
        $('.loading-container-form').fadeIn();

        // reset form validation messages
        $('.form-control').removeClass('is-invalid');


        // Grab data
        var contactName = $('#contactName').val();
        var contactEmail = $('#contactEmail').val();
        // var playmakerInterest = $('#tellMeInterest').val();

        // Send it
        $.post('tellMeMoreAction.php', {pName:contactName, pEmail:contactEmail},
            function(aResponse) {

                var responseMSG;

                    // PROCESS ERRORS
                    if (aResponse.status === 'error') {

                        responseMSG = '<p class="text-danger"><strong>Woops!</strong></p>';

                        $.each(aResponse.errors,function(index,item){
                            // responseMSG += '<li>'+item+'</li>';
                            $('#'+item).addClass('is-invalid');
                        });


                        $('#loadingStatus').html(responseMSG).fadeIn('slow').animate({ opacity: 1.0 }, 2500);
                        //hide loading bar
                        // $('#loading').fadeTo(1000, 0);
                        $('.loading-container-form').fadeOut();
                        // enable form submit button
                        $('input[type=submit]', this).removeAttr('disabled');

                    }

                    // PROCESS SUCCESS
                    if (aResponse.status === 'success') {

                        responseMSG = '<p class="text-success"><strong>Thanks for your interest.</strong></p>';

                            //responseMSG += aResponse.message; // access json object directly

                        //responseMSG += '</div>';

                        $('#loadingStatus').html(responseMSG).fadeIn('slow').animate({ opacity: 1.0 }, 2500);

                        // CLEAR FORM VALUES
                        clearForm('#tellMeMore');

                        //hide loading bar
                        // $('#loading').fadeTo(1000, 0);
                        $('.loading-container-form').fadeOut();
                        // enable form submit button
                        $('input[type=submit]', this).removeAttr('disabled');
                    }

                }, 'json');


        // Keep the form from refreshing the page
        return false;
    });



}); /* ENDs: $(document).ready(function() { */
