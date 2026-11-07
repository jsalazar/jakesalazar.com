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

    var formTop = $('#tellMeMore');

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

        if ($('#program1').is(':checked')) {
        var program1Val = $('#program1').val();
        }
        if ($('#program2').is(':checked')) {
        var program2Val = $('#program2').val();
        }
        if ($('#program3').is(':checked')) {
        var program3Val = $('#program3').val();
        }
        if ($('#program4').is(':checked')) {
        var program4Val = $('#program4').val();
        }
        if ($('#program5').is(':checked')) {
        var program5Val = $('#program5').val();
        }
        if ($('#program6').is(':checked')) {
        var program6Val = $('#program6').val();
        }




        // Send it
        $.post('tellMeMoreAction.php', {pName:contactName, pEmail:contactEmail, pProg1:program1Val, pProg2:program2Val, pProg3:program3Val, pProg4:program4Val, pProg5:program5Val, pProg6:program6Val},
            function(aResponse) {

                // reset error message for bootstrap
                $('#programsHelp').removeClass('is-invalid');

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

                    $('html, body').animate({scrollTop: formTop.offset().top}, 'slow');

                }, 'json');


        // Keep the form from refreshing the page
        return false;
    });



}); /* ENDs: $(document).ready(function() { */
