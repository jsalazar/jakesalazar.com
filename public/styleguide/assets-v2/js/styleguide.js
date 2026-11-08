$(document).ready(function() {

// Class "cbp-spmenu-open" gets applied to menu and "cbp-spmenu-push-toleft" or "cbp-spmenu-push-toright" to the body
    $('#sg-menu-link').on('click', function(e) {
      e.preventDefault();
      $('body').toggleClass('sg-menu-push-left');
      $('.sg-menu').toggleClass('sg-menu-open');
      // $('#showRightPush').toggleClass('hvr-wobble-top');
    });


    // var title = $( "em" ).attr( "title" );

    $('.sg-sample').each(function(index, value) {
        //console.log($(this).attr('data-src'));
        //console.log(index +' '+ value);
        var that = $(this);
        var sampleFile = that.attr('data-src');
        console.log(sampleFile);

        var jqxhr = $.get( "getCode.php?file="+sampleFile, function(data) {
          //alert( "success" );
          console.log(data);
          that.prepend(data.regular);
          that.find("code").append(data.encoded);
        })
          .done(function() {
            // make sure you get an actual DOM element and not a jquery collection - hence the '[0]'
            // http://stackoverflow.com/a/15765008
            Prism.highlightElement(that.find("code")[0]);
          })
          .fail(function(xhr, textStatus, errorThrown) {
            //alert( "error" );
            that.prepend(textStatus);
          })
          .always(function() {
            //alert( "finished" );
          });
    });

    // handler for toggling code view
    $(".sg-code").on("click", function(e) {
        e.preventDefault();
        $(this).next().toggleClass("expanded");
    });



}); // end $(document).ready(function(){})