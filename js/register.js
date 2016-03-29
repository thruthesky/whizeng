jQuery( function( $ ) {
    $('section.register form').submit ( function (e) {
        e.preventDefault();
        on_submit();
        var $form = $(this);
        var url = $form.prop('action') + '?' + $form.serialize();
        $.post(url, function(re) {
            on_result(re);
        });
    });
    function on_submit() {
        $('.row.spinner').show();
        $('.row.submit').hide();
        $('.row.error').hide();
    }
    function on_result(re) {
        setTimeout(function(){
            $('.row.spinner').hide();
            if ( re['code'] ) {
                $('.row.submit').show();
                var $error = $('.row.error');
                $error.html( '<i class="fa fa-exclamation-triangle"></i> ' + re['message'] );
                $error.show();
            }
            else {
                location.href = home_url;
            }
        }, 500);
    }
});