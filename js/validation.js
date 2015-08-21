$(document).ready(function() {

    $('.form').on('submit',function(e) {
        $('.validate').each(function() {
            if( $(this).val() == '' ) {
                alert($(this).data('error'));
                e.preventDefault();
                return false;
            }
        });
    });

    $('.ui .dropdown').dropdown({
        useLabels: true
    });

    $('.ui .popup').popup();

});