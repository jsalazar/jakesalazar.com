$(document).ready(function(){

    $('.toggleLink').click(function(e){

        e.preventDefault();

        var tHash = $(this).data('togglehash');
        $('#' + tHash).slideToggle();

        $(this).toggleClass('selected');

    });

}); // ENDS $(document).ready(function()){}