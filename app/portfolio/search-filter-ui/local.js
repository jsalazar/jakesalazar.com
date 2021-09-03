$(document).ready(function(){

    // ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    // ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    // Forms & Guidelines HANDLERS FOR SEARCH AND FILTERING RECORDS
    // ----------------------------------------------------------------


    // onLoad cache some elements
    var listItems = $('.file-title');
    var tagContainers = $('.tags-container');
    var fileContainers = $('.file-container');
    var resultsTerm = $('#results-term');
    var resultsCount = $('#results-count');

    // set initial record count onLoad
    resultsCount.html(fileContainers.filter(':visible').length);

    // handler for attempted form submission (user pressing enter/return keys)
    $('#filterForm').on('submit', function(event) {

        // event.stopPropagation();
        return false;

    });

    // handler listening to searches and filter clicks
    $('#filterData, .filterTag').on('keyup click', function(event) {

        event.preventDefault();

        if (event.type == 'click') {

            // determine where user is clicking from
            // use pretty titles for display, but pass in system titles (Master's VS masters)
            if ($(this).attr('title') == '') {

                var eFilter = $(this).text().toUpperCase();

            }
            else {

                var eFilter = $(this).attr('title').toUpperCase();

            }

            // remove any hilighted elements and reset viewing display
            $('.filterTag').removeClass('hilight-result');
            $('html, body').animate({scrollTop: resultsTerm.offset().top}, 'slow');

            // this prevents hilighting of tags when user first clicks on search field
            if (eFilter != '') {

                for (var li = 0; li < tagContainers.length; li++) {

                    // grab all children for each container
                    // extract text for each child and join them with a space ' '
                    var tagChildren = tagContainers.eq(li).children();

                    var childrenString = $.map(tagChildren, function(obj) {

                         if ($(obj).text().toUpperCase().indexOf(eFilter) > -1) {

                            // console.log('found one...');
                            $(obj).addClass('hilight-result');

                         }

                        return $(obj).text()

                    }).join(' ');

                    // prep children text for search
                    childrenString = childrenString.toUpperCase();

                    if (childrenString.indexOf(eFilter) > -1) {

                        // show parent container where matching text was found
                        tagContainers.eq(li).parent().removeClass('d-none');

                    }
                    else {

                        // hide parent element
                        tagContainers.eq(li).parent().addClass('d-none');

                    }

                } // ENDS for (var li = 0; li < tagContainers.length; li++) {

            } // ENDS if (eFilter != '') {

            // update search indicators and values
            resultsCount.html(fileContainers.filter(':visible').length);
            resultsTerm.html(eFilter);






        } // ENDS: if (event.type == 'click') {
        else { // its not a tag click filter, so process as a search being typed




            var eFilter = $(this).val().toUpperCase();

            if (eFilter.length > 3) {

                $.map(listItems, function(obj) {

                     if ($(obj).text().toUpperCase().indexOf(eFilter) > -1) {

                        $(obj).addClass('hilight-result');
                        // show parent container where matching text was found
                        $(obj).parent().removeClass('d-none');

                     }
                     else {

                        $(obj).parent().addClass('d-none');

                     }

                });

                // update search indicators and values
                resultsCount.html(fileContainers.filter(':visible').length);
                resultsTerm.html(eFilter);

            } // ENDS if (eFilter.length > 3) {
            else {

                // remove any hilighted elements
                // $('ul.regular li a').removeClass('hilight-result');
                // reset and show all file-container elements
                fileContainers.removeClass('d-none');
                //update display count
                resultsCount.html(fileContainers.filter(':visible').length);
                resultsTerm.html('All');

            }




        }

    }); // ENDS $('#filterData').on('keyup', function() {








}); // ENDS $(document).ready(function(){